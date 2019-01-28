<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensajes extends CI_Controller {
	
	public function Guardar(){

				$datos=$this->input->post();
				//echo json_encode($datos);
				$emisor=$datos['Emisor_Mensaje'];
				$contacto =$datos['Contacto_Mensaje'];
				$contenido = $datos['Contenido_Mensaje'];
				$id =$datos['ID'];
				$this->load->model('Mensajes_Model');
				$bool=$this->Mensajes_Model->guardarMensaje($emisor, $contacto, $contenido, $id);
	
	}
	public function VerMensajes(){
		$this->load->model('Mensajes_Model');
		$mensajes = $this->Mensajes_Model->verMensaje();
		echo json_encode($mensajes);
	}
	public function VerMensajesC(){
		$this->load->model('Mensajes_Model');
		$mensajes = $this->Mensajes_Model->verMensajeC();
		echo json_encode($mensajes);
	}
	public function EstadoMensajes(){
		$id = $this->input->post('id');
		$this->load->model('Mensajes_Model');
		$this->Mensajes_Model->EstadoMensaje($id);
		echo json_encode($id);
	}
	public function ListarMensajes(){
		$this->load->model('Mensajes_Model');
		$mens=$this->Mensajes_Model->ListarMensajes();

		$data = array('Mensajes'=>$mens);
		$this->load->view('administrador/base/header');
		$this->load->view('Mensajes/Mensajes_Invitados',$data);
		$this->load->view('administrador/base/footer');
	}
	public function listarMensajesContactos(){
		$idContacto=$this->input->POST('Id');
		//$idContacto=6;
		//$idContacto=$this->input->GET('Id');
		$this->load->model('Mensajes_Model');
		$msj = $this->Mensajes_Model->listaMensajesContacto($idContacto);
		echo json_encode($msj);
	}
	public function mostrarMensajesContactos(){
		//$idContacto=$this->input->POST('Id');
		//$idContacto=6;
		$idContacto=$this->input->GET('Id');
		$this->load->model('Mensajes_Model');
		$msj = $this->Mensajes_Model->listaMensajesContacto($idContacto);
		$data =array("Mensajes"=>$msj);
		$this->load->view('administrador/base/header');
		$this->load->view('Mensajes/HistorialMensajes', $data);
		$this->load->view('administrador/base/footer');
		//echo json_encode($msj);
	}
	public function InsertarMensajesContactos(){

		$idContacto=$this->input->POST('IdC');
		$idEmisor=$this->input->POST('IdEmi');
		$idReceptor=$this->input->POST('IdRe');
		$mensaje=$this->input->POST('msj');
		$this->load->model('Mensajes_Model');
		$msj = $this->Mensajes_Model->InsertarMensajesContacto($idContacto, $idEmisor, $idReceptor, $mensaje);
		echo json_encode($msj);

	}
		


}
?>