<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Emprendedoras extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		
	}

	public function index()
	{
			if($tipo=$this->session->userdata('login')){
			$this->load->view('administrador/base/header');	
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
		}
		$this->load->model('Usuarias_Model');
		$this->load->model('Perfiles_Model');
		$this->load->model('Rubros_Model');
		$verr=$this->Rubros_Model->verRubros();
		$perfil=$this->Perfiles_Model->CargarBolsa();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data4= array('Perfiles'=>$perfil,'sedes'=>$resultado2,'rubros'=>$verr);
		$this->load->view('emprendedoras/bolsa_emprendedoras', $data4);
		$this->load->view('administrador/base/footer');
	}
public function BuscarPor(){
	if ($this->input->is_ajax_request()) {
			$valor = $this->input->POST("buscar");
			$valorS = $this->input->POST("buscarS");
			$valorR = $this->input->POST("buscarR");
			$this->load->model('Perfiles_Model');
			$result = $this->Perfiles_Model->BuscarPerfil($valor, $valorS, $valorR);
			echo json_encode($result);
		}
	}
	public function verUsuarias()
	{
		$this->load->model('Usuarias_Model');
		$usuarias = $this->Usuarias_Model->CargarUsuarias();
		$datos = array('registro'=>$usuarias);
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/usuarias/Ver_Usuarias',$datos);
		$this->load->view('administrador/base/footer');
	}
	public function EliminarUsuaria(){

		$id= $this->input->GET('id');
		$this->load->model('Usuarias_Model');
		$bool=$this->Usuarias_Model->eliminarUsuaria($id);
		if($bool){
			echo '<script type="text/javascript">
				self.location ="'.base_url().'/Emprendedoras/verUsuarias"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("ERROR No se pudo eliminar");
				self.location ="'.base_url().'/Emprendedoras/verUsuarias"
				</script>';

		} 
	}
	public function tipo()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/usuarias/insertar_tipo');
		$this->load->view('administrador/base/footer');
	}
		public function InsertarUsuaria()
	{
		$this->load->model('Usuarias_Model');
		$resultado =$this->Usuarias_Model->CargarTipo();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data=array('con' => $resultado, 'con2'=>$resultado2);
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/usuarias/crear_usuaria', $data);
		$this->load->view('administrador/base/footer');
	}
	public function registro_tipo()
	{
		$this->load->model('Usuarias_Model');
	    $datos=$this->input->POST();
	    $bool= $this->Usuarias_Model->insertarTipo($datos);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'/Emprendedoras/tipo"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al insertar los datos verifique o comuniquese con el administrador del sistema")</script>';
	    }
	}
	public function registro_usuaria()
	{
		$this->load->model('Usuarias_Model');
	    $datos=$this->input->POST();
	    $nombre=$this->input->POST('nombre');
	    $apellido=$this->input->POST('apellido');
	    $nomuser=$this->input->POST('nomuser');
	    $pass=$this->input->POST('pass');
	    $encrontra=$this->encrypt->encode($pass);
	    $direccion=$this->input->POST('direccion');
	    $telefono=$this->input->POST('telefono');
		$dui=$this->input->POST('dui');
		$tipo=$this->input->POST('tipo');
		$sede=$this->input->POST('sede');
		$Año_Ingreso=$this->input->POST('Año_Ingreso');
	    $data = array('datos'=> $datos,'nombre' => $nombre,'apellido' => $apellido, 'nomuser' => $nomuser,'pass' => $encrontra, 'direccion' => $direccion, 'telefono' => $telefono, 'dui' => $dui, 'tipo' => $tipo,'sede' => $sede, 'Año_Ingreso' => $Año_Ingreso);
	    $bool= $this->Usuarias_Model->insertarUsuaria($data);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'/Emprendedoras/InsertarUsuaria"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al insertar los datos verifique o comuniquese con el administrador del sistema")</script>';
	    }
	}
	public function ver_Perfil(){
		$var=$this->input->GET('id');
		$cant =  $this->input->GET('cantidad');
		$this->load->model('Perfiles_Model');
		$perfil=$this->Perfiles_Model->Ver_Perfil($var, $cant);
		$this->load->model('Contactos_Model');
		if($this->session->userdata('login')){
			$veriP=$this->Contactos_Model->VerificarContactoP($var);
			$veri=$this->Contactos_Model->VerificarContacto($var);
			$this->load->view('administrador/base/header');
			$datos = array('perfil'=>$perfil, 'verC'=>$veri,'Ver'=>$veriP);
			$this->load->view('emprendedoras/ver_perfil', $datos);
			$this->load->view('administrador/base/footer');
		}
		else{
			$datos = array('perfil'=>$perfil);
			$this->load->view('administrador/base/headerVisitante');
			$this->load->view('emprendedoras/ver_perfil', $datos);
			$this->load->view('administrador/base/footer');
		}
	}
	public function VerificarNomUser(){
		if ($this->input->is_ajax_request()) {
			$this->load->model('Usuarias_Model');
			$valor = $this->input->POST("buscar");
			$result = $this->Usuarias_Model->verificarNombreUser($valor);
			echo json_encode($result);
		}
	}
	public function editar(){
		$id= $this->input->GET('id');
		$this->load->library('encrypt');
		$this->load->model("Usuarias_Model");
		$res=$this->Usuarias_Model->CargarUsuaria($id);
		$this->load->model('Usuarias_Model');
		$resultado =$this->Usuarias_Model->CargarTipo();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data=array('con' => $resultado, 'con2'=>$resultado2, 'info'=>$res);
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/usuarias/EditarUsuaria', $data);
		$this->load->view('administrador/base/footer');
	}
	public function EditarUsuaria(){
		$this->load->model('Usuarias_Model');
	    $datos=$this->input->POST();
	    $nombre=$this->input->POST('nombre');
	    $apellido=$this->input->POST('apellido');
	    $nomuser=$this->input->POST('nomuser');
	    $pass=$this->input->POST('pass');
	    $encrontra=$this->encrypt->encode($pass);
	    $direccion=$this->input->POST('direccion');
	    $telefono=$this->input->POST('telefono');
	    $dui=$this->input->POST('dui');
		$tipo=$this->input->POST('tipo');
		$sede=$this->input->POST('sede');
		$pass4=$this->input->POST('pass4');
	    $data = array('pass4'=>$pass4,'datos'=> $datos,'nombre' => $nombre,'apellido' => $apellido, 'nomuser' => $nomuser,'pass' => $encrontra, 'direccion' => $direccion, 'telefono' => $telefono, 'dui' => $dui, 'tipo' => $tipo,'sede' => $sede);
	    $bool= $this->Usuarias_Model->editarUsuaria($data);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'/Emprendedoras/VerUsuarias"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">
				alert("Error al modificar la informacion");
				self.location ="'.base_url().'/Emprendedoras/VerUsuarias"
				</script>';
	    }
	}

	public function EditarUsuarias(){
		$idUsuario = $this->session->userdata('id');
		$this->load->model('Usuarias_Model');
	    $datos=$this->input->POST();
	    $nombre=$this->input->POST('nombre');
	    $apellido=$this->input->POST('apellido');
	    $nomuser=$this->input->POST('nomuser');
	    $pass=$this->input->POST('pass');
	    $encrontra=$this->encrypt->encode($pass);
	    $direccion=$this->input->POST('direccion');
	    $telefono=$this->input->POST('telefono');
	    $tipo=$this->input->POST('tipo');
	    $data = array('id'=>$idUsuario,'datos'=> $datos,'nombre' => $nombre,'apellido' => $apellido, 'nomuser'=> $nomuser,'pass' => $encrontra, 'direccion' => $direccion, 'telefono' => $telefono, 'tipo' => $tipo);
	    $bool= $this->Usuarias_Model->editarUsuarias($data);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'/Login/home"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">
				alert("Error al modificar la informacion");
				self.location ="'.base_url().'/Login/home"
				</script>';
	    }
	}

}