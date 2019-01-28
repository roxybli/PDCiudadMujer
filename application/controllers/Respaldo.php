<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Respaldo extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->library('zip');
		if (!$this->session->userdata('login'))
		{
			//header("Location:". base_url());
			echo '<script type="text/javascript">
				alert("Debes iniciar sesion !!!");
				self.location ="'.base_url().'"
				</script>';
		}
	}

	public function Respaldar(){
		$this->load->dbutil();
		$db_format = array('format'=>'zip', 'filename'=>'db_Plataforma_Backup.sql');
		$backup=& $this->dbutil->backup($db_format);
		$dbname='Copia_de_Seguridad_de_'.date('d-m-Y').'.zip';
		$save='/Respaldos/'.$dbname;
		write_file($save,$backup);
		force_download($dbname, $backup);


	}


	/*public function Respaldar(){
		$this->load->model('Respaldo_Model');
		$bool=$this->Respaldo_Model->backupDatabaseTables();
		if($bool){
	    	echo '<script type="text/javascript">
				self.location ="'.base_url().'/Login/home"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al respladar los datos verifique o comuniquese con el administrador del sistema")
	    		self.location ="'.base_url().'/Login/home"
	    		</script>';
	    }
	}*/
}
	?>