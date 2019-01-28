<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayuda extends CI_Controller {


	public function index()
	{
		$id=$this->session->userdata('id');
		$id_tipo=$this->session->userdata('id_tipo');

			if($id_tipo==3){
			$this->load->view('administrador/base/header');	
			$this->load->view('Ayuda/Ayuda');
		}

			else if ($id_tipo==2){
			$this->load->view('administrador/base/header');	
			$this->load->view('Ayuda/AyudaAdmin');
		}
			else if ($id_tipo==1){
			$this->load->view('administrador/base/header');	
			$this->load->view('Ayuda/AyudaSuper');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
			$this->load->view('Ayuda/Ayudavisitante');

		}
		$this->load->view('administrador/base/footer');
	}


}