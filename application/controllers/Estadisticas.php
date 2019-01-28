<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends CI_Controller {
	public function index(){
		if($tipo=$this->session->userdata('login')){
			$this->load->view('administrador/base/header');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
		}
		$this->load->view('Estadisticas/EstadisticasMenu');
		
		$this->load->view('administrador/base/footer');
		//echo json_encode($datos->result());
	}
	public function EstadisticasCargar(){
		$fechaI=$this->input->GET('FechaInicial');
		$fechaF=$this->input->GET('FechaFinal');
		$this->load->model('Estadisticas_Model');
		$datos = $this->Estadisticas_Model->EstadicticasVentas($fechaI, $fechaF);
		echo json_encode($datos->result());
	}
	public function EstadisticasInventario(){
		$fechaI=$this->input->GET('FechaInicial');
		$fechaF=$this->input->GET('FechaFinal');
		$this->load->model('Estadisticas_Model');
		$datos = $this->Estadisticas_Model->EstadicticasInventario($fechaI, $fechaF);
		echo json_encode($datos->result());
	}
	public function EstadisticasIngresos(){
		$fechaI=$this->input->GET('FechaInicial');
		$fechaF=$this->input->GET('FechaFinal');
		$this->load->model('Estadisticas_Model');
		$datos = $this->Estadisticas_Model->EstadicticasCIngresos($fechaI, $fechaF);
		echo json_encode($datos->result());
	}
	public function EstadisticasEgresos(){
		$fechaI=$this->input->GET('FechaInicial');
		$fechaF=$this->input->GET('FechaFinal');
		$this->load->model('Estadisticas_Model');
		$datos = $this->Estadisticas_Model->EstadicticasCEgresos($fechaI, $fechaF);
		echo json_encode($datos->result());
	}
		

}
?>