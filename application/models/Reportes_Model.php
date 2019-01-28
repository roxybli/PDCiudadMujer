<?php
class Reportes_Model extends CI_Model
{
	public function ReporteGeneral($param=null){
		$sede = $param['sede'];
		if($sede==""){
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede";
		}
		else{
			echo $sede;
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.FK_Sede=$sede";
		}
		
		$datos=$this->db->query($sql);
		return $datos;
	}
	public function ReportePorAño($param=null){
		if($param !=null){
			$param1 = $param['Año_Ingreso'];
			$sede = $param['sede'];
		if($sede==""){
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.Año_Ingreso=$param1";
		}
		else{
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.Año_Ingreso=$param1 AND u.FK_Sede=$sede";
		}
			$datos=$this->db->query($sql);
			return $datos;
		}
	}
	public function ReportePorPeriodo($param=null)
	{
		if($param !=null)
		{
			$param1 = $param['Año_Ingreso'];
			$param2 = $param['Año_Fin'];
			$sede = $param['sede'];
		if($sede==""){
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.Año_Ingreso BETWEEN $param1 AND $param2";
		}
		else{
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.Año_Ingreso BETWEEN $param1 AND $param2 AND u.FK_Sede=$sede";
		}
			$datos=$this->db->query($sql);
			return $datos;


		}	
	}
	public function ReportePorPeriodoVentas($id, $param=null)
	{
		if($param !=null)
		{
			$param1 = $param['Fecha_Venta'];
			$param2 = $param['Fecha_Fin'];
			$sql = "SELECT p.Nombre_Producto, SUM(v.Cantidad_Venta) AS cantidad, p.Precio_Producto, v.Fecha_Venta
			FROM tbl_venta AS v
			INNER JOIN tbl_inventario AS i ON v.Fk_Id_Inventario = i.Pk_Id_Inventario
			INNER JOIN tbl_productos AS p ON i.Fk_Id_Producto = p.Pk_Id_Producto
			WHERE p.FK_Id_Usuario =$id
			AND v.Fecha_Venta BETWEEN '$param1'
			 AND '$param2'GROUP BY p.Nombre_Producto";
					$datos = $this->db->query($sql);
					return $datos;
		}
}

public function ReportePorPeriodoAÑOSVentas($id, $param=null)
	{
		if($param !=null)
		{
			$param1 = $param['Fecha_Venta'];
			$param2 = $param['Fecha_Fin'];
			$sql = "SELECT p.Nombre_Producto, p.Precio_Producto,  SUM(v.Cantidad_Venta) AS cantidad
					FROM tbl_Venta AS v
					INNER JOIN tbl_Inventario AS i ON ( v.Fk_Id_Inventario = i.PK_Id_Inventario )
					INNER JOIN tbl_Productos AS p ON ( i.FK_Id_Producto = p.PK_Id_Producto )
					INNER JOIN tbl_Usuarias AS u ON ( p.FK_Id_Usuario = u.pk_Id_Usuaria )
					WHERE p.FK_Id_Usuario ='$id'
					AND YEAR( v.Fecha_Venta )
					BETWEEN '$param1'
					AND '$param2'
					GROUP BY p.Nombre_Producto";
					$datos = $this->db->query($sql);
					return $datos;
		}
}

public function ReportePorPeriodoInventario($id, $param=null)
	{
		if($param !=null)
		{
			$param1 = $param['Fecha_Creacion'];
			$param2 = $param['Fecha_Fin'];
			$sql = "SELECT p.Nombre_Producto, p.Precio_Producto, SUM( i.Existencia_Producto ) AS cantidad, 
			         i.Fecha_Creacion
					FROM tbl_inventario AS i
					INNER JOIN tbl_productos AS p ON i.FK_Id_Producto = p.Pk_Id_Producto
					WHERE p.FK_Id_Usuario =$id
					AND i.Estado = 'Terminado'
					AND i.Fecha_Creacion
					BETWEEN '$param1'
					AND '$param2'
					GROUP BY p.Nombre_Producto";
					$datos = $this->db->query($sql);
					return $datos;
		}
}

public function ReportePorPeriodoAÑOSInventario($id, $param=null)
	{
		if($param !=null)
		{
			$param1 = $param['Fecha_Creacion'];
			$param2 = $param['Fecha_Fin'];
			$sql = "SELECT p.Nombre_Producto, p.Precio_Producto, SUM( i.Existencia_Producto ) AS cantidad, 
			         i.Fecha_Creacion
					FROM tbl_inventario AS i
					INNER JOIN tbl_productos AS p ON i.FK_Id_Producto = p.Pk_Id_Producto
					WHERE p.FK_Id_Usuario =$id
					AND i.Estado = 'Terminado'
					AND YEAR(i.Fecha_Creacion)
					BETWEEN '$param1'
					AND '$param2'
					GROUP BY p.Nombre_Producto";
					$datos = $this->db->query($sql);
					return $datos;
		}
}

public function ReportePorPeriodoBalances($id, $param=null)
	{
		if($param !=null)
		{
			$param1 = $param['Fecha_Balance'];
			$param2 = $param['Fecha_Fin'];
			$sql = "SELECT e.Nombre_Egreso, e.Cantidad_Egreso, bie.Total_Ingreso
					FROM tbl_Balance AS b
					INNER JOIN tbl_Ingresos_Egresos_Balance AS bie ON ( b.PK_Id_Balance = bie.FK_Id_Balance )
					INNER JOIN tbl_Egresos AS e ON ( bie.FK_Id_Egreso = e.Pk_Id_Egreso )
					INNER JOIN tbl_Usuarias AS u ON ( b.FK_Id_Usuario = u.pk_Id_Usuaria )
					WHERE b.FK_Id_Usuario =$id
					AND b.Fecha_Balance
					BETWEEN 'param1'
					AND 'param2'
					GROUP BY b.Fecha_Balance, e.Nombre_Egreso";
					$datos = $this->db->query($sql);
					return $datos;
}
		}
	}
?>


