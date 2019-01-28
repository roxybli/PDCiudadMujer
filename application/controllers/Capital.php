<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Capital extends CI_Controller {
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
		
		$this->load->view('administrador/capital/index');
		$this->load->view('administrador/base/footer2');
	}
	public function ingresarNegocio()
	{
		$this->load->view('administrador/base/header');
		
		$this->load->Model("Capital_Model");
		$datos = $this->Capital_Model->obternerRubros();
		$data = array('datos' => $datos );
		
		$this->load->view('administrador/capital/capital_inicial', $data);
		$this->load->view('administrador/base/footer2');
	}
	public function guardarDatosNegocio()
	{
		$datos = $this->input->post();
		$this->load->model("Capital_Model");
		$this->Capital_Model->guardarNegocio($datos);
		
	}
	public function negocios()
	{
		$this->load->view('administrador/base/header');
		$this->load->Model("Capital_Model");
		$datos = $this->Capital_Model->obternerRubros();
		$data = array('datos' => $datos );
		$this->load->view('administrador/capital/negocios', $data);
		$this->load->view('administrador/base/footer2');
	}
	public function detalleNegocio($id)
	{
		$this->load->model("Capital_Model");
		$datos = $this->Capital_Model->detalleNegocio($id);
		$data = array('datos' => $datos );
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/capital/detalle_negocio', $data);
		$this->load->view('administrador/base/footer2');
	}
	public function detalleCapital()
	{
	    $dato = $this->input->post();
	    $id =  $dato['rubro'];
		$this->load->Model("Capital_Model");
		$datos = $this->Capital_Model->obtenerNegocios($id);
		$data = array('datos' => $datos );
	    $this->load->view('administrador/base/header');
		$this->load->view('administrador/capital/negocios_rubro', $data);
		$this->load->view('administrador/base/footer2');
	}
	public function detalleNegocioPDF($id)
	{
		$this->load->model("Capital_Model");
		$datos = $this->Capital_Model->detalleNegocio($id);
		$data = array('datos' => $datos );
		if (sizeof($datos->result())!=0) 
		{
			$this->load->library('M_pdf');
			$fecha = date("d-m-Y");
	        $data = [];
	        $hoy = date("dmyhis");
	        foreach ($datos->result() as $fila)
		        {}
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
			    text-align:center;
			    background-color:#000d5a;
			    color:#fff;
			    
			}
			table td{
			    border:1px solid #000;
			    padding:10px;
			    text-align:center;  
			}
			p {
			    text-align:center;
			    padding:10px;
			}
			img {
			    text-align:left;
			    float:left;
			    width: 100px;
			    height: 100px;
			}
			#cabecera{
				width: 900px;
			}
			#img{
				float:left;
				margin-left: 30px;
				width: 125px;
			}
			.textoCentral{
				color: #000;
				font-weight: bold;
				float:right;
				padding-left: 10px;
				margin: 0 auto;
				text-align: center;
				line-height:: 50;
				width: 250px;
				line-height: 18px;
			}
			.totalCapital{
					background-color: rgba(0, 13, 90, 0.10);
				}
				.inversionTotal{
					background-color: rgba(0, 13, 90, 1);
				}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
				<div id='img'>
					<img src='".base_url()."plantilla/images/card/Reporte.png'>
			    </div><p style='font-weight: bold; text-align:right;'> FECHA DE CREACIÓN:  $fecha</p>
			    <div class='textoCentral'>
			         REPORTE DE CAPITAL INICIAL</p> <br>
				    RUBRO: ".strtoupper($fila->Nombre_Rubro)."						    
				    <p>DETALLES DEL NEGOCIO: <strong style='font-weight: bold;'><br>".strtoupper($fila->Nombre_Subrubro)."</strong></p>  
			    </div>";
			$html .= "
			</div>
		
			  </div>
			<div class='table-responsive container'>
			      
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr>
				        <th colspan='2' style='color:#fff'> Rubro: <strong> $fila->Nombre_Rubro </strong></th>
				        <th colspan='2' style='color:#fff'> Producción estimada: <strong>$fila->Produccion_Mensual</strong></th>
				    </tr>
			        </thead>
			        <tbody>
						<tr>
					        <td><strong>Nombre</strong></td>
					        <td><strong>Cantidad</strong></td>
					        <td><strong>Precio unitario</strong></td>
					        <td><strong>Costo</strong></td>
					    </tr>
					    <tr>
					        <td colspan='4' class='text-center'><h4>Equipamiento</h4></td>
					    </tr>
			        ";
				$totalE=0;
		        foreach ($datos->result() as $filaCuerpoE)
		        {
		            if ($filaCuerpoE->Fk_Id_Categoria_Elemento == 1)
		            {
		                $totalE = $totalE + ($filaCuerpoE->Precio_Elemento * $filaCuerpoE->Cantidad_Elemento );
				$html .= "    <tr>
				        <td>$filaCuerpoE->Nombre_Elemento </td>
				        <td>$filaCuerpoE->Cantidad_Elemento </td>
				        <td>$ $filaCuerpoE->Precio_Elemento </td>
				        <td>$".$filaCuerpoE->Precio_Elemento * $filaCuerpoE->Cantidad_Elemento."</td>
				    </tr>";
				   }
				}
				$html .= "<tr class='totalCapital'>
			        <td colspan='3'><h4><strong>Total inversión en equipamiento</strong> </h4></td>
			        <td><h4><strong>$".$totalE."</strong></h4></td>
			    </tr>
			    <tr>
			        <td colspan='4'><h4>Insumos</h4></td>
			    </tr>
			    <tr>";
		    $totalI=0;
		    $totalT = $totalE;
		        foreach ($datos->result() as $filaCuerpoI)
		        {
		            if ($filaCuerpoI->Fk_Id_Categoria_Elemento == 2)
		            {
		                $totalI = $totalI + ($filaCuerpoI->Precio_Elemento * $filaCuerpoI->Cantidad_Elemento  );
				$html .= " <tr>
				        <td> $filaCuerpoI->Nombre_Elemento  </td>
				        <td> $filaCuerpoI->Cantidad_Elemento  $filaCuerpoI->Medida_Elemento </td>
				        <td>$ $filaCuerpoI->Precio_Elemento </td>
				        <td>$".$filaCuerpoI->Precio_Elemento * $filaCuerpoI->Cantidad_Elemento."</td>
				    </tr>";
				    }
				}
				$totalT = $totalT + $totalI;
			    $html .= "<tr class='totalCapital'>
			        <td colspan='3'><h4><strong>Total inversión en insumos </strong></h4></td>
			        <td><h4><strong>$".$totalI."</strong></h4></td>
			    </tr>";
			    $html .="<tr class='inversionTotal'>
			        <td colspan='3' style='color:#fff'><h4><strong>Inversión Total</strong></h4></td>
			        <td style='color:#fff'><h4><strong>$".$totalT."</strong></h4></td>
			          </tr>
			          ";
				$html .= "</table><h4><strong>NOTA: Los Datos de este documento solo son de refencia los precios pueden variar </strong></h4></div>";
		 
		         $pdfFilePath = "resumen de Capital inicial.pdf";
		         //load mPDF library
		        $this->load->library('M_pdf');
		         $mpdf = new mPDF('c', 'A4'); 
		         $estilos=file_get_contents(base_url()."plantilla/componentes/css/bootstrap.min.css");
		         //echo $estilos;
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
					alert("No hay datos que mostrar !!!");
					window.close();
					self.location ="'.base_url().'capital/negocios"
					</script>';
			}
	}
	public function gestionarNegocio()
	{
		$this->load->model("Capital_Model");
		$datos = $this->Capital_Model->obtenerTodosNegocios();
		$data = array('datos' => $datos );
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/capital/gestionar_negocios', $data);
		$this->load->view('administrador/base/footer2');
	}
	public function actualizarNegocio($id)
	{
		$this->load->model("Capital_Model");
		$datos = $this->Capital_Model->detalleNegocio($id);
		$data = array('datos' => $datos );
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/capital/actualizar_negocio', $data);
		$this->load->view('administrador/base/footer2');
	}
	public function actualizarDatosNegocio()
	{
		$datos = $this->input->post();
		$idSubrubro = $datos['idSubrubro'];
		 $d=0; $p=0; $c=0; 
		for ($i=0; $i < sizeof($datos['idEquipamiento']); $i++)
		{
			
			if ($datos['cantidadElemento'][$i] == "")
			{
				$c++;
			}
			if ($datos['precioEquipamiento'][$i] == "")
			{
				$p++;
			}
			if ($datos['idEquipamiento'][$i] == "")
			{
				$d++;
			} 
		}
		if ($c == $p && $c == $d && $p == $d) {
			$this->load->model("Capital_Model");
			$bool = $this->Capital_Model->actualizarNegocio($datos);
			if($bool== false)
				{
					echo '<script type="text/javascript">
						alert("Error al guardar los datos !!!");
						self.location ="'.base_url().'actualizarNegocio/'.$idSubrubro.'"
						</script>';
				}
				else
				{
					if ($bool)
					{
						//$fecha = $datos['fechaIE'];
						echo '<script type="text/javascript">
						
						self.location ="'.base_url().'capital/gestionarNegocio"
						</script>';
					}
				}
		}
		else
		{
			echo '<script type="text/javascript">
					alert("Error al guardar los datos !!!");
					self.location ="'.base_url().'actualizarNegocio/'.$idSubrubro.'"
				</script>';
		}
	}
	public function eliminarElementoSubrubro($id, $n)
	{
		$this->load->model("Capital_Model");
		$bool = $this->Capital_Model->eliminarElementoSubrubro($id);
		if($bool== false)
			{
				echo '<script type="text/javascript">
					alert("Error al eliminar el elemento !!!");
					self.location ="'.base_url().'capital/actualizarNegocio/'.$n.'"
					</script>';
			}
			else
			{
				if ($bool)
				{
					//$fecha = $datos['fechaIE'];
					echo '<script type="text/javascript">
					
					self.location ="'.base_url().'capital/actualizarNegocio/'.$n.'"
					</script>';
				}
			}
	}
	public function eliminarNegocio($id)
	{
		$this->load->model("Capital_Model");
		$bool = $this->Capital_Model->eliminarNegocio($id);
		if($bool== false)
			{
				echo '<script type="text/javascript">
					alert("Error al eliminar el elemento !!!");
					self.location ="'.base_url().'capital/gestionarNegocio"
					</script>';
			}
			else
			{
				if ($bool)
				{
					//$fecha = $datos['fechaIE'];
					echo '<script type="text/javascript">
					self.location ="'.base_url().'capital/gestionarNegocio"
					</script>';
				}
			}
	}
}