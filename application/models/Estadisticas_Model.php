<?php 

class Estadisticas_Model extends CI_Model
{
	public function EstadicticasVentas($fechaI, $fechaF){
		$id= $this->session->userdata('id');
		$sql="SELECT p.Nombre_Producto, SUM(v.Cantidad_Venta) AS cantidad
			FROM tbl_venta AS v
			INNER JOIN tbl_inventario AS i ON v.Fk_Id_Inventario = i.Pk_Id_Inventario
			INNER JOIN tbl_productos AS p ON i.Fk_Id_Producto = p.Pk_Id_Producto
			WHERE p.FK_Id_Usuario =$id
			AND v.Fecha_Venta
			BETWEEN '$fechaI'
			AND '$fechaF'
			GROUP BY p.Nombre_Producto";
		$resultado=$this->db->query($sql);
		return $resultado;
	}
	public function EstadicticasInventario($fechaI, $fechaF){
		$id= $this->session->userdata('id');
		$sql="SELECT p.Nombre_Producto, SUM(i.Existencia_Producto) as suma
			FROM tbl_inventario AS i
			INNER JOIN tbl_productos AS p ON i.FK_Id_Producto = p.Pk_Id_Producto 
			WHERE p.FK_Id_Usuario =$id
			AND i.Estado = 'Terminado'
			AND i.Fecha_Creacion
			BETWEEN '$fechaI'
			AND '$fechaF'
			GROUP BY Nombre_Producto";
		$resultado = $this->db->query($sql);
		return $resultado;
		}
	public function EstadicticasCIngresos($fechaI, $fechaF){
		$id= $this->session->userdata('id');
		$sql="SELECT Nombre_Ingreso,  SUM(Cantidad_Ingreso) AS suma
			FROM tbl_ingresos
			WHERE FK_Id_Usuario =$id
			AND Fecha_Ingreso
			BETWEEN '$fechaI'
			AND '$fechaF'
			GROUP BY Nombre_Ingreso";
		$resultado = $this->db->query($sql);
		return $resultado;
		}
		public function EstadicticasCEgresos($fechaI, $fechaF){
		$id= $this->session->userdata('id');
		$sql="SELECT Nombre_Egreso, SUM( Cantidad_Egreso ) AS suma
				FROM tbl_egresos
				WHERE FK_Id_Usuario =$id
				AND Fecha_Egreso
				BETWEEN '$fechaI'
				AND '$fechaF'
				GROUP BY Nombre_Egreso";
		$resultado = $this->db->query($sql);
		return $resultado;
		}


}
?>