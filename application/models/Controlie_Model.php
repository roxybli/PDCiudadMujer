<?php 

class Controlie_Model extends CI_Model
{

public function guardarIE($datos=null, $idUsuario)
	{
		$ingresosN= $datos['ingresosN'];
		$ingresosD= $datos['ingresosD'];
		$egresosN= $datos['egresosN'];
		$egresosD= $datos['egresosD'];
		$fecha= $datos['fechaIE'];
		@$estadoE= $datos['estadoE'];
		$ingresoTotal = 0;
		$contadorI = 0;
		$contadorE = 0;

		// Insertando El Balance
		$sql1 = "INSERT INTO tbl_Balance VALUES('', '$idUsuario', '$fecha', '$ingresoTotal')";
		if ($this->db->query($sql1))
		{
			// Obteniendo el Id del ultimo balance...
			$sql2 = "SELECT MAX(PK_Id_Balance) as idBalance FROM tbl_Balance";
			$id = $this->db->query($sql2);
			foreach ($id->result() as $idB)
			{
				$datoID = $idB->idBalance; // Id del balance
			}
		}

		//Insertando Ingresos
		if (sizeof($ingresosN) >0)
		{
			for ($i=0; $i < sizeof($ingresosN); $i++)
			{ 
				$sql3="INSERT INTO tbl_Ingresos VALUES('','$idUsuario', '$ingresosN[$i]', '$ingresosD[$i]', '$fecha')";
				
				if ($this->db->query($sql3))
				{
					$contadorI++;	
				}

				$ingresoTotal = $ingresoTotal + $ingresosD[$i];
			}
		} // Fin de Ingresos

		// Insertando Egresos
		$egresosBalance=0;
		if (sizeof($egresosN) >0)
		{
			for ($i=0; $i < sizeof($egresosN); $i++)
			{ 
				$sql4="INSERT INTO tbl_Egresos VALUES('','$idUsuario', '$egresosN[$i]', '$egresosD[$i]', '$fecha')";
			
				if ($this->db->query($sql4))
				{
					// Obteniendo el ID del Egreso Insertado
					$sql5 = "SELECT MAX(Pk_Id_Egreso ) as idE FROM tbl_Egresos";
					$idE = $this->db->query($sql5);
					foreach ($idE->result() as $idEgreso)
					{
						$datoIDE = $idEgreso->idE; // Id del ultimo egreso insertado
					}

					// Insertando los egresos en el balance
					$sql6 = "INSERT INTO tbl_Ingresos_Egresos_Balance VALUES('$datoID', '$datoIDE ', 'Gasto', '$ingresoTotal')";
					if ($this->db->query($sql6))
					{
						$egresosBalance++;
					}

					$contadorE++;	
				}								
			}
		}
			
		if (($contadorI + $contadorE) == (sizeof($ingresosN) + sizeof($egresosN)) && sizeof($egresosN)== $egresosBalance)
		{
			return true;
		}
		return false;
	}

	public function obtenerIngreso($fecha, $id)
	{
		$sql = "SELECT Total_Ingreso FROM tbl_Balance WHERE Fecha_Balance = '$fecha' AND FK_Id_Usuario='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}
	public function obtenerEgreso($fecha, $id)
	{
		$sql = "SELECT * FROM tbl_Egresos WHERE Fecha_Egreso = '$fecha' AND FK_Id_Usuario='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function obtenerIngreso2($id)
	{
		$sql = "SELECT DISTINCT Nombre_Ingreso  FROM tbl_Ingresos WHERE FK_Id_Usuario='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}
	public function obtenerEgreso2($id)
	{
		$sql = "SELECT * FROM tbl_Egresos WHERE FK_Id_Usuario='$id' AND Fecha_Egreso=(SELECT MAX(Fecha_Egreso) FROM tbl_Egresos WHERE FK_Id_Usuario='$id') GROUP BY Nombre_Egreso";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function resumenIngresos($id, $i, $f)	
	{
		$sql ="SELECT i.PK_Id_Ingreso, i.FK_Id_Usuario, i.Nombre_Ingreso, i.Cantidad_Ingreso, i.Fecha_Ingreso, u.Nombre, u.Apellido FROM tbl_Ingresos as i INNER JOIN tbl_Usuarias as u ON(i.FK_Id_Usuario = u.pk_Id_Usuaria) WHERE FK_Id_Usuario = '$id' AND DATE(Fecha_Ingreso) BETWEEN '$i' AND '$f'";
		$ingresos = $this->db->query($sql);
		return $ingresos;
	}

	public function resumenEgresos($id, $i, $f)
	{
		$sql ="SELECT * FROM tbl_Egresos WHERE FK_Id_Usuario = '$id' AND DATE(Fecha_Egreso) BETWEEN '$i' AND '$f'";
		$datos = $this->db->query($sql);
		return $datos;
	}


	public function obtenerIngresosBases()
	{
		$sql = "SELECT Nombre as Nombre_Ingreso FROM tbl_Ingresos_Egresos_Bases WHERE Tipo='Ingreso'";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function obtenerEgresosBases()
	{
		$sql = "SELECT Nombre as Nombre_Egreso FROM tbl_Ingresos_Egresos_Bases WHERE Tipo='Egreso'";
		$datos = $this->db->query($sql);
		return $datos;
	}


	public function procesarEgresos($datos = null)
	{
		$ingreso = $datos['totalIngresos'];//
		$egreso = $datos['egresoS'];
		$fecha = $datos['fechaEgresos'];
		$restaIE = $ingreso;

			$sql = "SELECT MAX(PK_Id_Balance) as idBalance FROM tbl_Balance";
			$id = $this->db->query($sql);
			foreach ($id->result() as $idB)
			{
				$datoID = $idB->idBalance;
			}

		$sql2 = "INSERT INTO tbl_Ingresos_Egresos_Balance VALUES('$datoID', '$egreso', 'Gasto', '$ingreso')";
		$sql3 = "UPDATE tbl_Egresos SET Estado_Egreso='Procesado' WHERE Pk_Id_Egreso='$egreso'";
		if ($this->db->query($sql2))
		{
			if ($this->db->query($sql3))
			{
				return true;
			}
		}
		return false;

	}

	public function obtenerBalances($id)
	{
		$sql = "SELECT b.Fecha_Balance, bie.Total_Ingreso, bie.Nombre_Operacion, e.Nombre_Egreso, e.Cantidad_Egreso, COUNT(*) as Operaciones FROM tbl_Balance as b INNER JOIN tbl_Ingresos_Egresos_Balance as bie on(b.PK_Id_Balance = bie.FK_Id_Balance) 
		INNER JOIN tbl_Egresos as e ON(bie.FK_Id_Egreso= e.Pk_Id_Egreso) WHERE b.FK_Id_Usuario = '$id' GROUP BY b.Fecha_Balance";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function detalleBalance($fecha)
	{
	 $sql = "SELECT b.Fecha_Balance, bie.Total_Ingreso, bie.Nombre_Operacion, e.Nombre_Egreso, e.Cantidad_Egreso, u.Nombre, u.Apellido FROM tbl_Balance as b INNER JOIN tbl_Ingresos_Egresos_Balance as bie
				on(b.PK_Id_Balance = bie.FK_Id_Balance) INNER JOIN tbl_Egresos as e ON(bie.FK_Id_Egreso= e.Pk_Id_Egreso) INNER JOIN tbl_Usuarias AS u ON(b.FK_Id_Usuario = u.pk_Id_Usuaria) WHERE b.Fecha_Balance='$fecha'";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function estadisticaIE($id, $i, $f)
	{
		$sql = "SELECT Cantidad_Ingreso as 'Total', Fecha_Ingreso, Nombre_Ingreso, Cantidad_Ingreso FROM tbl_Ingresos WHERE FK_Id_Usuario='$id' AND DATE(Fecha_Ingreso) BETWEEN '$i' AND '$f' ";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function estadisticaIEE($id, $i, $f)
	{
		$sql = "SELECT Cantidad_Egreso as 'Total', Fecha_Egreso, Nombre_Egreso, Cantidad_Egreso FROM tbl_Egresos WHERE FK_Id_Usuario='$id' AND DATE(Fecha_Egreso) BETWEEN '$i' AND '$f' ";
		$datos = $this->db->query($sql);
		return $datos;
	}


}


 ?>



