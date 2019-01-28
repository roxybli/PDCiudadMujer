<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfiles extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		
	}
	public function registroPerfil()
	{
		//echo "no tiene registros";
		$dir ="plantilla/img_perfil/".$this->session->userdata('nombre').$this->session->userdata('id')."/";
		if (!file_exists($dir))
			{
				mkdir($dir);
			}
		//$dir="plantilla/img_perfil/";
		$nombre=$_FILES['imagenPerfil']['name'];
	    $tempo= $_FILES['imagenPerfil']['tmp_name'];
	    move_uploaded_file($tempo, $dir.$nombre);
	    $nombre2=$_FILES['imagen1']['name'];
	    $tempo2= $_FILES['imagen1']['tmp_name'];
	    move_uploaded_file($tempo2, $dir.$nombre2);
	    $nombre3=$_FILES['imagen2']['name'];
	    $tempo3= $_FILES['imagen2']['tmp_name'];
	    move_uploaded_file($tempo3, $dir.$nombre3);
	    $nombre4=$_FILES['imagen3']['name'];
	    $tempo4= $_FILES['imagen3']['tmp_name'];
	    move_uploaded_file($tempo4, $dir.$nombre4);
	    $img_perfil = $this->session->userdata('nombre').$this->session->userdata('id')."/".$nombre;
	    $img_1= $this->session->userdata('nombre').$this->session->userdata('id')."/".$nombre2;
	    $img_2= $this->session->userdata('nombre').$this->session->userdata('id')."/".$nombre3;
	    $img_3= $this->session->userdata('nombre').$this->session->userdata('id')."/".$nombre4;
	    $datos=$this->input->POST();
	    $this->load->model('Perfiles_Model');
	    $bool=$this->Perfiles_Model->InsertarPerfil($img_perfil, $img_1, $img_2, $img_3, $datos);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'/Login/home"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al insertar los datos verifique o comuniquese con el administrador del sistema")</script>';
	    }
	}
	public function Mover($img){

	}
	public function editarImagen(){
		$campo="";
		$rutaimg="plantilla/img_perfil/".$this->session->userdata('nombre').$this->session->userdata('id')."/";
		$rutabd=$this->session->userdata('nombre').$this->session->userdata('id')."/";
		$condicion=$this->input->GET('c');
		$campo="";

		if($condicion==1){
			$campo="Foto1";
		}
		if($condicion==2){
			$campo="Foto2";
		}
		if($condicion==3){
			$campo="Foto3";
		}
		$nombre=$_FILES['imagen']['name'];
		$tempo= $_FILES['imagen']['tmp_name'];
		move_uploaded_file($tempo, $rutaimg.$nombre);
		$img= $this->session->userdata('nombre').$this->session->userdata('id')."/".$nombre;
		$id=$this->session->userdata('id');
		$this->load->model('Perfiles_Model');
		$bool=$this->Perfiles_Model->EditarImagen($campo, $img, $id);
		if($bool){
	    	echo '<script type="text/javascript">
				
				self.location ="'.base_url().'/Login/home"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al insertar los datos verifique o comuniquese con el administrador del sistema")</script>';
	    }
	}
	public function EditarUsuaria(){
		$datos = $this->input->POST();
		$nombre=$this->input->POST('nombre');
	    $apellido=$this->input->POST('apellido');
	    $nomuser=$this->input->POST('nomuser');
	    $pass=$this->input->POST('pass');
	    $encrontra=$this->encrypt->encode($pass);
	    $direccion=$this->input->POST('direccion');
	    $telefono=$this->input->POST('telefono');
		$this->load->model('Perfiles_Model');
		$data = array('datos'=> $datos,'nombre' => $nombre,'apellido' => $apellido, 'nomuser' => $nomuser,'pass' => $encrontra, 'direccion' => $direccion, 'telefono' => $telefono);
		$bool = $this->Perfiles_Model->editarUsuaria($data);
		if($bool){
			echo '<script type="text/javascript">	
				self.location ="'.base_url().'/Login/home"
				</script>';	
		}
		
		else{
			echo '<script type="text/javascript">alert("Error al insertar los datos verifique o comuniquese con el administrador del sistema")</script>';
		}
	}

	public function EditarPerfil(){
		$datos = $this->input->POST();
		$this->load->model('Perfiles_Model');
		$bool = $this->Perfiles_Model->editarPerfil($datos);
		if($bool){

			echo '<script type="text/javascript">
				self.location ="'.base_url().'/Login/home"
				</script>';
		}
		else{
			echo '<script type="text/javascript">alert("Error al insertar los datos verifique o comuniquese con el administrador del sistema")</script>';
		}
	}
}