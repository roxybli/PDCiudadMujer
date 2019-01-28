<?php
class Usuarias_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		
	}
	public function insertarTipo($data=null)
	{
		if($data!=null)
		{
			$tipo=$data['tipo'];
			//$image=addcslashes($img, '"".(),/,?');
			$sql=("INSERT INTO tbl_Tipos_Usuarias(Descripcion) VALUES('$tipo')");
			//$this->db->bind_param('sss', $contenido, $video, $img);
			if($this->db->query($sql)){
				return true;
			}
			else{
				return false;
			}
		}
	}
	public function CargarUsuaria($id){
		$sql="SELECT u.*, s.Nombre_Sede, t.Descripcion AS Tipo FROM tbl_Usuarias AS u INNER JOIN tbl_Sedes AS s ON u.FK_Sede=s.pk_Id_Sede INNER JOIN tbl_Tipos_Usuarias AS t ON u.fk_Tipo_Usuaria = t.pk_Id_Tipo WHERE u.pk_Id_Usuaria=$id";
		$res =$this->db->query($sql);
		return $res;
	}
	public function verificarNombreUser($nombre){
		$sql = "SELECT Nombre FROM tbl_Usuarias WHERE Nom_User = '$nombre'";
		$res =$this->db->query($sql);
		return $res->result();
	}
	public function eliminarUsuaria($id){
		$sql ="DELETE FROM tbl_Usuarias WHERE pk_Id_Usuaria='$id'";
		if($this->db->query($sql)){
			return true;
		}
		else{
			return false;
		}
	}
	public function insertarUsuaria($data=null)
	{
		
		if($data!=null)
		{
			//$image=addcslashes($img, '"".(),/,?');
			$nombre=$data['nombre'];
			$apellido=$data['apellido'];
			$nomuser=$data['nomuser'];
			$pass=$data['pass'];
			$direccion=$data['direccion'];
			$telefono=$data['telefono'];
			$dui=$data['dui'];
			$tipo=$data['tipo'];
			$sede=$data['sede'];
			$Año_Ingreso=$data['Año_Ingreso'];
			$fechaActual = date("Y/m/d");
			$sql="INSERT INTO tbl_Usuarias(FK_Sede, Nombre,Apellido,Nom_User,Pass,Direccion,fk_Tipo_Usuaria,Telefono,Dui,Año_Ingreso,Fecha_Registro) VALUES('$sede','$nombre','$apellido','$nomuser','$pass','$direccion','$tipo','$telefono','$dui','$Año_Ingreso','$fechaActual')";

			if($this->db->query($sql)){
				return true;
			}
			else{
				return false;
			}

		}
	}

	public function CargarUsuarias()
	{
		$tipo=$this->session->userdata('id_tipo');
		if($tipo==1){
				$sql="SELECT u.*, s.Nombre_Sede, t.Descripcion AS Tipo FROM tbl_Usuarias AS u INNER JOIN tbl_Sedes AS s ON u.FK_Sede=s.pk_Id_Sede INNER JOIN tbl_Tipos_Usuarias AS t ON u.fk_Tipo_Usuaria = t.pk_Id_Tipo";
			}
			else if($tipo==2){
				$sede=$this->session->userdata('id_sede');
				$sql="SELECT u.*, s.Nombre_Sede, t.Descripcion AS Tipo FROM tbl_Usuarias AS u INNER JOIN tbl_Sedes AS s ON u.FK_Sede=s.pk_Id_Sede INNER JOIN tbl_Tipos_Usuarias AS t ON u.fk_Tipo_Usuaria = t.pk_Id_Tipo WHERE u.FK_Sede='$sede' AND u.fk_Tipo_Usuaria != 1";
			}
			else if($tipo==3){
				$sede=$this->session->userdata('id_sede');
				$sql="SELECT u.*, s.Nombre_Sede, t.Descripcion AS Tipo FROM tbl_Usuarias AS u INNER JOIN tbl_Sedes AS s ON u.FK_Sede=s.pk_Id_Sede INNER JOIN tbl_Tipos_Usuarias AS t ON u.fk_Tipo_Usuaria = t.pk_Id_Tipo WHERE u.FK_Sede='$sede' AND u.fk_Tipo_Usuaria != 1 and 2";
			}
		
		$res=$this->db->query($sql);
		return $res;	
	}

	public function CargarTipo()
	{
		$tipo=$this->session->userdata('id_tipo');
		if($tipo==1){
				$sql=("SELECT * FROM tbl_Tipos_Usuarias");
			}
			else{
				$sql=("SELECT * FROM tbl_Tipos_Usuarias WHERE pk_Id_Tipo!=1 AND pk_Id_Tipo!=2");
			}
			$res=$this->db->query($sql);
			return $res;	
	}
	public function validarUsuaria($nombre='')
	{
		//$sql="SELECT * FROM tbl_usuario WHERE nomusuario='".$nombre."' LIMIT 1";
		//$contra=		
		$sql  = "SELECT  Nombre, Apellido, pk_Id_Usuaria, Nom_User, Pass, fk_Tipo_Usuaria, FK_Sede FROM tbl_Usuarias WHERE Nom_User='$nombre'";

		$result= $this->db->query($sql);
		if ($result->num_rows() > 0)
		 {
			return $result->row();
		 }
		return null;
	}

	public function CargarSede(){
		$tipo=$this->session->userdata('id_tipo');
		if($tipo==1){
				$sql=("SELECT * FROM tbl_Sedes");
			}

			else if($tipo==2){
				$sede=$this->session->userdata('id_sede');
				$sql=("SELECT * FROM tbl_Sedes WHERE pk_Id_Sede=$sede");
			}
			else if($tipo==""  || $tipo ==3){
				$sql=("SELECT * FROM tbl_Sedes");

			}
		//$sql = "SELECT * FROM tbl_Sedes";
		$res =$this->db->query($sql);
		return $res;
	}
	public function NuevasUsuarias(){
		$fechaActual = date("Y/m/d");
		$id_user=$this->session->userdata('id');
		$id_tipo=$this->session->userdata('id_tipo');
		$sql="SELECT COUNT(*) AS Numero_Usuarias_Nuevas FROM tbl_Usuarias WHERE Fecha_Registro BETWEEN (SELECT Fecha_Actividad FROM tbl_Usuarias WHERE pk_Id_Usuaria=$id_user AND fk_Tipo_Usuaria=$id_tipo) AND '$fechaActual' AND fk_Tipo_Usuaria=3";
		$num =$this->db->query($sql);
		return $num;
	}
	public function NumeroUsuarias(){
		$sql ="Select count(*) AS Registro from tbl_Usuarias";
		$nu=$this->db->query($sql);
		return $nu;
	}
	public function NumeroUsuariasSede(){
		$id_sede=$this->session->userdata('id_sede');
		$sql="SELECT count(*) AS Registro, s.Nombre_Sede FROM tbl_Usuarias AS u INNER JOIN tbl_Sedes AS s ON u.FK_Sede = s.pk_Id_Sede WHERE FK_Sede=$id_sede";
		$ns=$this->db->query($sql);
	return $ns;
	}
	public function EditarUsuaria($data=null){
		if($data!=null){
			$id=$data['pass4'];
			$nombre=$data['nombre'];
			$apellido=$data['apellido'];
			$nomuser=$data['nomuser'];
			$pass=$data['pass'];
			$direccion=$data['direccion'];
			$telefono=$data['telefono'];
			$sede=$data['sede'];
			$tipo=$data['tipo'];
			$sql="UPDATE tbl_Usuarias SET FK_Sede=$sede, Nombre='$nombre', Apellido='$apellido', Nom_User='$nomuser', Pass='$pass', Direccion='$direccion',fk_Tipo_Usuaria=$tipo, Telefono='$telefono' WHERE pk_Id_Usuaria= '$id'";
			if($this->db->query($sql)){
				return true;

			}
			else{
				return false;
			}
		}
	}
	public function EditarUsuarias($data=null){
		if($data!=null){
			$id=$data['id'];
			$nombre=$data['nombre'];
			$apellido=$data['apellido'];
			$nomuser=$data['nomuser'];
			$pass=$data['pass'];
			$direccion=$data['direccion'];
			$telefono=$data['telefono'];
			$tipo=$data['tipo'];
			$sql="UPDATE tbl_Usuarias SET Nombre='$nombre', Apellido='$apellido', Nom_User='$nomuser', Pass='$pass', Direccion='$direccion',fk_Tipo_Usuaria=$tipo, Telefono='$telefono' WHERE pk_Id_Usuaria= '$id'";
			if($this->db->query($sql)){
				return true;

			}
			else{
				return false;
			}
		}
	}
	public function obtenerFotoReporte($id)
	{
		//$sql="SELECT * FROM tbl_usuario WHERE nomusuario='".$nombre."' LIMIT 1";
		$sql  = "SELECT * FROM tbl_Perfiles_Empresariales WHERE FK_Usuaria='$id'";
		$result= $this->db->query($sql);
		if ($result->num_rows() > 0)
		 {
			return $result->row();
		 }
		return null;
	}
}
?>