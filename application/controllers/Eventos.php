<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {
    public function index(){
        $this->load->view('administrador/base/header');
      
        //como vemos en genera calendario le pasamos el año y el mes para que sepa que debe mostrar
        //$data =  array('titulo' => 'Calendario con ci','calendario' => $this->Calendario_Model->genera_calendario($year, $month));
        $this->load->view('Eventos/Eventos');
        $this->load->view('administrador/base/footer');
        
    }
    public function InsertarEvento(){
        $datos =$this->input->post();
        $this->load->model('Calendario_Model');
        $bool=$this->Calendario_Model->Insertar($datos);
        if($bool){
            echo '<script type="text/javascript">
                        
                        self.location ="'.base_url().'Eventos/"
                        </script>';
        }
        else{
            echo '<script type="text/javascript">
                        alert("Error al guardar el evento!!!");
                        self.location ="'.base_url().'Eventos/"
                        </script>';
        }
     }
     public function listarEventos(){
        //$datos =$this->input->post();
        $this->load->model('Calendario_Model');
        $eventos=$this->Calendario_Model->Listar();
        //$dato = array();
        echo json_encode($eventos->result());
     }
     public function listarEventosFecha(){
        $fecha=$this->input->POST('Fecha');
       
      //  echo "****************************La fecha es: "+$fecha;
     }
     public function prueba(){
        $fecha=$this->input->GET('Fecha');
        $this->load->model('Calendario_Model');
        $eventos2=$this->Calendario_Model->ListarEventFecha($fecha);
        echo json_encode($eventos2->result());
        //echo $fecha;
     }
      public function VerUltimoEvento(){
        $this->load->model('Calendario_Model');
        $evento = $this->Calendario_Model->verUltimoEvento();
        echo json_encode($evento);
    }
     
    public function EstadoEvento(){
        $id = $this->input->post('id');
        $this->load->model('Calendario_Model');
        $this->Calendario_Model->EstadoEvento($id);
        echo json_encode($id);
    }
     public function Eliminar(){
        $id=$this->input->GET('IdE');
        //echo $id;
        $this->load->model('Calendario_Model');
        $bool=$this->Calendario_Model->EliminarEvento($id);
        if($bool){
           echo '<script type="text/javascript">
                        
                        self.location ="'.base_url().'Eventos/"
                        </script>';

        }
        else{
            echo '<script type="text/javascript">
                        alert("Error al eliminar el evento!!!");
                        self.location ="'.base_url().'Eventos/"
                        </script>';
        }
     }
     public function Actualizar(){
        $id=$this->input->GET('IdE');
        $this->load->model('Calendario_Model');
        $bool=$this->Calendario_Model->GetEventById($id);
        $data = array('eventos' => $bool);
        $this->load->view('administrador/base/header');
        $this->load->view('Eventos/Actualizar_Evento', $data);
        $this->load->view('administrador/base/footer');
        //echo json_encode($bool->result());
     }
     public function ActualizarEvento(){
        $datos =$this->input->post();
        $this->load->model('Calendario_Model');
        $bool=$this->Calendario_Model->Editar($datos);
        if($bool){
            echo '<script type="text/javascript">
                       
                        self.location ="'.base_url().'Eventos/"
                        </script>';
        }
        else{
            echo '<script type="text/javascript">
                        alert("error al eliminar el evento!!!");
                        self.location ="'.base_url().'Eventos/"
                        </script>';;
        }

     }
}

?>