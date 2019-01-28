<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubros extends CI_Controller {

	public function index(){
		$this->load->model('Rubros_Model');
		$r=$this->Rubros_Model->verRubros();
		$data= array('Rubro'=>$r);
		$this->load->view('administrador/base/header');
		//$this->load->view('administrador/base/home');
		$this->load->view('Rubros/Gestionar_Rubros', $data);
		$this->load->view('administrador/base/footer');
	}
	public function Guardar(){
		$datos = $this->input->POST();
		$this->load->model('Rubros_Model');
		$bool=$this->Rubros_Model->insertarRubros($datos);
		if($bool){
			echo '<script type="text/javascript">
				
				self.location ="'.base_url().'/Rubros"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Rubros"
				</script>';
		}
	}
	public function Editar(){
		$datos = $this->input->POST();
		$this->load->model('Rubros_Model');
		$bool=$this->Rubros_Model->editarRubros($datos);
		if($bool){
			echo '<script type="text/javascript">
				self.location ="'.base_url().'/Rubros"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Rubros"
				</script>';
		}
	}
	public function Eliminar(){
		$datos = $this->input->GET('id');
		$this->load->model('Rubros_Model');
		$bool=$this->Rubros_Model->eliminarRubros($datos);
		if($bool){
			echo '<script type="text/javascript">
				self.location ="'.base_url().'/Rubros"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Rubros"
				</script>';
		}
	}
}