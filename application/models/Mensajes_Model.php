<?php
class Mensajes_Model extends CI_Model
{
	public function verMensajes(){
		$sql="SELECT * FROM tbl_Mensajes";
		$verr=$this->db->query($sql);
		return $verr;
	}
	public function guardarMensaje($emisor, $contacto, $contenido, $id){
			if($this->db->query("INSERT INTO tbl_Mensajes(Emisor_Mensaje, Contacto_Mensaje, Contenido_Mensaje, FK_Id_Usuaria, Estado_Mensaje) VALUES ('$emisor', '$contacto', '$contenido', $id,'Nuevo')"))
			{
				return true;
			}
			else{
				return false;
			}
	}
	public function verMensaje(){
		$id= $this->session->userdata('id');
		$sql="SELECT * FROM tbl_mensajes WHERE FK_Id_Usuaria=$id AND Estado_Mensaje='Nuevo'";
		$res = $this->db->query($sql);
		return $res->result();
	}
	
	public function verMensajeC(){
		$id= $this->session->userdata('id');
		$sql="SELECT * FROM tbl_mensajes_contactos WHERE Id_Emisor=$id AND Estado_Mensaje IS NULL";
		$res = $this->db->query($sql);
		return $res->result();
	}
	
	public function EstadoMensajesC(){
		$id = $this->input->post('id');
		$this->load->model('Mensajes_Model');
		$this->Mensajes_Model->EstadoMensajeC($id);
		echo json_encode($id);
	}
	public function EstadoMensaje($id){
		$sql="UPDATE tbl_Mensajes SET Estado_Mensaje='Leido' WHERE PK_Id_Mensaje=$id";
		$this->db->query($sql);
	}
	public function EstadoMensajeC($id){
		$sql="UPDATE tbl_Mensajes_Contactos SET Estado_Mensaje='Leido' WHERE PK_Id_Mensaje_Contacto=$id";
		$this->db->query($sql);
	}
	public function ListarMensajes(){
		$id= $this->session->userdata('id');

		$sql= "SELECT * FROM tbl_Mensajes WHERE FK_Id_Usuaria=$id ORDER BY PK_Id_Mensaje DESC";
		$msj = $this->db->query($sql);

		return $msj;
	}
	public function listaMensajesContacto($idContacto){
		$sql = "SELECT * FROM tbl_Mensajes_Contactos WHERE FK_Id_Contacto=$idContacto ORDER BY PK_Id_Mensaje_Contacto ASC";
		$mens=$this->db->query($sql);
		return $mens->result();
	}
	public function InsertarMensajesContacto($idContacto, $idEmisor, $idReceptor, $mensaje){
		$sql ="INSERT INTO tbl_Mensajes_Contactos(Id_Emisor, Id_receptor, Mensaje, FK_Id_Contacto) VALUES ($idEmisor, $idReceptor, '$mensaje', $idContacto)";
		$bool= $this->db->query($sql);
		if($bool){
			$sql2 = "SELECT * FROM tbl_Mensajes_Contactos WHERE FK_Id_Contacto=$idContacto ORDER BY PK_Id_Mensaje_Contacto ASC";
			$mens=$this->db->query($sql2);
			return $mens->result();
		}
		else{
			return false;
		}
	}


}