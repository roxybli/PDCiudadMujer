<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncios extends CI_Controller {
	public function index()
	{
	if($tipo=$this->session->userdata('login')){
			$this->load->view('administrador/base/header');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
		}
		$this->load->model('Anuncios_Model');
		$anuncio=$this->Anuncios_Model->listarAnuncios();
		$this->load->model('Instituciones_Model');
		$institucion=$this->Instituciones_Model->verInstituciones();
		$datos = array('Anuncios'=>$anuncio, 'Instituciones'=>$institucion);
		$this->load->view('anuncios/lista_anuncios', $datos);
		$this->load->view('administrador/base/footer');
	}
	public function publicar_anuncios()
	{
		$this->load->view('administrador/base/header');
		$this->load->model('Instituciones_Model');
		$institucion=$this->Instituciones_Model->verInstituciones();
		$data=array('Instituciones'=>$institucion);
		$this->load->view('anuncios/publicar_anuncio', $data);
		$this->load->view('administrador/base/footer');
	}
	public function guardar()
	{
		$nombre=$_FILES['imagenN']['name'];
	    $tempo= $_FILES['imagenN']['tmp_name'];
	    $dir="plantilla/img_anuncios/";
	    move_uploaded_file($tempo, $dir.$nombre);
	    //$imagenconvert= file_get_contents($dir.$nombre);
	    $this->load->model('Anuncios_Model');
	    $datos=$this->input->POST();
	    $bool= $this->Anuncios_Model->insertarAnuncio($nombre, $datos);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'Anuncios"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al editar los datos")</script>';
	    }
	}
	
	public function guardarBorrador()
	{
		$nombre=$_FILES['imagenN']['name'];
	    $tempo= $_FILES['imagenN']['tmp_name'];
	    $dir="plantilla/img_anuncios/";
	    move_uploaded_file($tempo, $dir.$nombre);
	    $this->load->model('Anuncios_Model');
	    $datos=$this->input->POST();
	    $bool= $this->Anuncios_Model->insertarBorrador($nombre, $datos);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'Anuncios/GestionarBorradores"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al editar los datos")</script>';
	    }
	}
	
	public function VerAnuncios(){
		if($tipo=$this->session->userdata('login')){
			$this->load->view('administrador/base/header');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
		}
		$id=$this->input->GET('id');
		$this->load->model('Anuncios_Model');
		$noticia = $this->Anuncios_Model->VerAnuncio($id);
		$data=array('Noticia'=>$noticia);
		//$this->load->view('administrador/base/header');
		$this->load->view('anuncios/Ver_Anuncio', $data);
		$this->load->view('administrador/base/footer');
	}

	public function GestionarNoticias(){
		$this->load->model('Anuncios_Model');
		$anuncio=$this->Anuncios_Model->listarAnuncios();
		$anuncio1=$this->Anuncios_Model->listarInstituciones();
		$datos = array('Anuncios'=>$anuncio, 'Anuncios1'=>$anuncio1);
		//cargando vistas
		$this->load->view('administrador/base/header');
		$this->load->view('anuncios/Gestionar_Noticias',$datos);
		$this->load->view('administrador/base/footer');
	}
	
	public function GestionarBorradores(){
		$this->load->model('Anuncios_Model');
		$borrador=$this->Anuncios_Model->listarBorradores();
		$borrador1=$this->Anuncios_Model->listarInstituciones2();
		$datos = array('Borradores'=>$borrador, 'Borradores1'=>$borrador1);
		//cargando vistas
		$this->load->view('administrador/base/header');
		$this->load->view('anuncios/Gestionar_Borradores',$datos);
		$this->load->view('administrador/base/footer');
	}
	
	
	public function eliminarAnuncio(){
			$id= $this->input->GET('id');
			 $datos=$this->input->POST();
			$this->load->model('Anuncios_Model');
			$bool=$this->Anuncios_Model->EliminarAnuncio($id);
			if($bool){
				echo '<script type="text/javascript">	
					self.location ="'.base_url().'/Anuncios/GestionarNoticias"
				</script>';
			}
			else{
				echo '<script type="text/javascript">
					alert("ERROR");
					self.location ="'.base_url().'Anuncios/GestionarNoticias"
					</script>';
			}
	}
	
	public function eliminarBorrador(){
			$id= $this->input->GET('id');
			 $datos=$this->input->POST();
			$this->load->model('Anuncios_Model');
			$bool=$this->Anuncios_Model->EliminarBorrador($id);
			if($bool){
				echo '<script type="text/javascript">	
					self.location ="'.base_url().'/Anuncios/GestionarBorradores"
				</script>';
			}
			else{
				echo '<script type="text/javascript">
					alert("ERROR");
					self.location ="'.base_url().'Anuncios/GestionarBorradores"
					</script>';
			}
	}
	
	public function EditarNoticias(){
		$id=$this->input->GET('id');
		$this->load->model('Anuncios_Model');
		$noticia = $this->Anuncios_Model->VerAnuncio($id);
		$this->load->model('Instituciones_Model');
		$institucion=$this->Instituciones_Model->verInstituciones();
		$data=array('Noticia'=>$noticia, 'Instituciones'=>$institucion);
		$this->load->view('administrador/base/header');
		$this->load->view('anuncios/Editar_Noticia', $data);
		$this->load->view('administrador/base/footer');
	}
	
	public function EditarBorradores(){
		$id=$this->input->GET('id');
		$this->load->model('Anuncios_Model');
		$borrador = $this->Anuncios_Model->VerBorrador($id);
		$this->load->model('Instituciones_Model');
		$institucion=$this->Instituciones_Model->verInstituciones();
		$data=array('Borrador'=>$borrador, 'Instituciones'=>$institucion);
		$this->load->view('administrador/base/header');
		$this->load->view('anuncios/Editar_Borrador', $data);
		$this->load->view('administrador/base/footer');
	}
	
	public function Editar(){
		$datos=$this->input->POST();
		if($nombre=$_FILES['imagenN']['name']==""){
			$nombre=$datos['Imagen'];
		}
		else{
			$nombre=$_FILES['imagenN']['name'];
	    	$tempo= $_FILES['imagenN']['tmp_name'];
	    	$dir="plantilla/img_anuncios/";
	    	move_uploaded_file($tempo, $dir.$nombre);
		}
	    //$imagenconvert= file_get_contents($dir.$nombre);
	    $this->load->model('Anuncios_Model');
	    $bool= $this->Anuncios_Model->editarAnuncio($nombre, $datos);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'Anuncios/GestionarNoticias"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al editar los datos")</script>';
	    }

	}
	
	public function EditarB(){
		$datos=$this->input->POST();
		if($nombre=$_FILES['imagenN']['name']==""){
			$nombre=$datos['Imagen'];
		}
		else{
			$nombre=$_FILES['imagenN']['name'];
	    	$tempo= $_FILES['imagenN']['tmp_name'];
	    	$dir="plantilla/img_anuncios/";
	    	move_uploaded_file($tempo, $dir.$nombre);
		}
	    //$imagenconvert= file_get_contents($dir.$nombre);
	    $this->load->model('Anuncios_Model');
	    $bool= $this->Anuncios_Model->editarBorrador($nombre, $datos);
	    if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'Anuncios/GestionarBorradores"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al editar los datos")</script>';
	    }

	}
	

	public function BuscarPor(){
		if ($this->input->is_ajax_request()) {
			$valor = $this->input->POST("buscar");
			$institucion = $this->input->POST("institucion");
			$this->load->model('Anuncios_Model');
			$result = $this->Anuncios_Model->BuscarNoticia($valor, $institucion);
			echo json_encode($result);
		}
		
	}
	public function BuscarFecha(){

		$datos = $this->input->POST();
		if($this->session->userdata('login')){
			$this->load->view('administrador/base/header');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
		}
		$this->load->model('Anuncios_Model'); 
		$anuncio=$this->Anuncios_Model->AnunciosFecha($datos);
		$this->load->model('Instituciones_Model');
		$institucion=$this->Instituciones_Model->verInstituciones();
		$datos = array('Anuncios'=>$anuncio, 'Instituciones'=>$institucion);
		$this->load->view('anuncios/lista_anuncios',$datos);
		$this->load->view('administrador/base/footer');
	}


	}


