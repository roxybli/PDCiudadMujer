<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insumos extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login'))
		{
			echo '<script type="text/javascript">
				alert("Debes iniciar sesion !!!");
				self.location ="'.base_url().'"
				</script>';
		}
	}

	public function index()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/insumos/index');
		$this->load->view('administrador/base/footer2');

	}


	public function insumosExistentes()
	{
		$this->load->model('Insumos_Model');
		$id = $this->session->userdata('id');
		$insumos = $this->Insumos_Model->mostrarInsumos($id);
		$data = array('insumos' => $insumos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/insumos/insumos_existentes', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function guardarInsumos()
	{
		$datos = $this->input->post();
		for ($i=0; $i < sizeof($datos['nombreInsumos']); $i++)
		{ 
			if ($datos['nombreInsumos'][$i]=="" || $datos['cantidaInsumo'][$i]=="" || $datos['precioInsumo'][$i]=="" || $datos['medidasInsumo'][$i]=="" || $datos['tipoInsumo'][$i]=="" || $datos['cantidadMinima'][$i]=="" )
			{
				echo '<script type="text/javascript">
				alert("Error: No ingresaste todos los datos !!!");
				self.location ="'.base_url().'insumos/"
				</script>';
				break;
			}
		}
		$this->load->model('Insumos_Model');
		$id = $this->session->userdata('id');
		$bool = $this->Insumos_Model->guardarInsumos($datos, $id);

		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al guardar los insumos")</script>';

		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				self.location ="'.base_url().'insumos/insumosExistentes"
				</script>';
			}
		}
	}

	public function datosInsumo()
	{
		$id = $_GET['i'];
		$this->load->Model("Insumos_Model");
		$datos = $this->Insumos_Model->datosIndumo($id);
		$data = array('datos' => $datos );
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/insumos/actualizar_insumo', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function actualizarInsumo()
	{
		$datos = $this->input->post();
		$this->load->Model("Insumos_Model");
		$bool = $this->Insumos_Model->actualizarInsumo($datos);
		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al actualizar los datos")</script>';
		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				
				self.location ="'.base_url().'insumos/insumosExistentes"
				</script>';
			}
		}
	}
	public function eliminarInsumo()
	{
		$id = $_GET['i'];
		$this->load->Model("Insumos_Model");
		$bool = $this->Insumos_Model->eliminarInsumo($id);
		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al eliminar los datos")</script>';
		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				self.location ="'.base_url().'insumos/insumosExistentes"
				</script>';
			}
		}
	}
	public function reporteInsumos()
	{
		$this->load->model('Insumos_Model');
		$id = $this->session->userdata('id');
		$datos = $this->Insumos_Model->mostrarInsumos($id);
		$data = array('datos' => $datos  );
	if (sizeof($datos->result())!=0) 
	{
		$this->load->library('M_pdf');
		$fecha = date("d-m-Y");
        $data = [];
        $hoy = date("dmyhis");
		$html="
		 <style>
		table{
		    border:1px solid #000;
		    border-collapse:collapse;
		    text-align:center;
		    width:100%;
		    
		}
		table th{
		    border:1px solid #000;
		    padding:10px;
		    text-align:left;
		    background-color:#000d5a;
		    color:#fff;
		    
		}
		table td{
		    border:1px solid #000;
		    padding:10px;
		    text-align:left;  
		}
		p {
		    text-align:center;
		}
		img {
		    text-align:left;
		    float:left;
		    width: 100px;
		    height: 110px;
		}
		#cabecera{
			width: 1000px;
		}
		#img{
			float:left;
			margin-left: 30px;
			width: 150px;
		}
		.textoCentral{
			color: #000;
			font-weight: bold;
			float:right;
			padding-left: 20px;
			margin: 0 auto;
			text-align: center;
			line-height:: 20;
			width: 475px;
			line-height: 26px;
		}
		 </style>
		 <div class='container'>
		    <div id='cabecera'>
			<div id='img'>
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div>
		    <div class='textoCentral'>REPORTE DE INSUMOS <br>
			       ".strtoupper($this->session->userdata('nombreNegocio'))."      
		    ";
		foreach ($datos->result() as $user)
	        {}
		$html .="
		  <br><strong style='font-weight: bold; text-align:center;'>PROPIETARIA:  ".strtoupper($user->Nombre)." ".strtoupper($user->Apellido )."</strong><br>FECHA DE CREACION: ".$fecha."</p></div><br>
		</div>    
		<div class='table-responsive container'>
		        <table class='table table table-bordered'>
		        <thead class='active' >
		        <tr >
		       		 
			        <th>Nombre del insumo</th>
			        <th>Cantidad</th>
			        <th>Precio</th>
			        <th>Monto</th>
			        <th>Medida</th>
			        <th>Tipo</th>
		        </tr>
		        </thead>
		        <tbody>";
	          $totalInsumos = 0; 
	          $ime=1;  
	         foreach ($datos->result() as $fila)
	        {
	            $nombre = $fila->Nombre_Insumo ;
				$cantidad = $fila->Existencia_Insumo;
				$precio = $fila->Precio_Insumo;
				$medida = $fila->Medida_Insumo;
				$tipo = $fila->Nombre_Tipo;
				$totalInsumos = $totalInsumos + 1; 
	            $html.="<tr><td>" . $nombre. "</td><td>" . $cantidad. "</td><td>" . $precio. "</td><td>".$precio*$cantidad."</td><td>" . $medida. "</td><td>" . $tipo. "</td></tr>";
	             
	        }
	        $html .= "<tr>
					<th colspan='5'>Total de insumos existentes </th>
					<th>$totalInsumos</th>
					</tr>";
			$html .= "</table></div>";
	 
	         $pdfFilePath = "resumen_insumos.pdf";
	         //load mPDF library
	        $this->load->library('M_pdf');
	         $mpdf = new mPDF('c', 'A4'); 
	         $estilos=file_get_contents(base_url()."plantilla/css/bootstrap.min.css");
	        
	         $mpdf->SetDisplayMode('fullpage');
	         $mpdf->WriteHTML($estilos,1);
	 
	        $mpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	       // $mpdf->SetFont('','',40); 
	         $mpdf->shrink_tables_to_fit = 1;
	       
	        $mpdf->WriteHTML($html);
	        $mpdf->Output($pdfFilePath, "I");
			}
			else
			{
				echo '<script type="text/javascript">
					alert("No hay datos que mostrar para este rango de tiempo!!!");
					window.close();
					self.location ="'.base_url().'reportes/trabajosRealizados"
					</script>';
			}
	}
}