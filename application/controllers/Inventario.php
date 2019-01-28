<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login'))
		{
			//header("Location:". base_url());
			echo '<script type="text/javascript">
				alert("Debes iniciar sesion !!!");
				self.location ="'.base_url().'"
				</script>';
		}
	}

	public function index()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/inventario_home');
		$this->load->view('administrador/base/footer2');

	}

	public function productos_disponibles()
	{
		$id = $this->session->userdata('id');

		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductosTerminados($id);
		$data = array('datos' => $datos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/productos_disponibles', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function producto_receta()
	{
		$this->load->model('Insumos_Model');
		$id = $this->session->userdata('id');
		$insumos = $this->Insumos_Model->mostrarInsumos($id);
		$data = array('insumos' => $insumos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/producto_receta', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function consultar_receta()
	{
		$this->load->model('Inventario_Model');
		$id = $this->session->userdata('id');
		$datos = $this->Inventario_Model->procedimientosExistentes($id);

		$data = array('datos' => $datos);
		
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/consultar_receta', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function guardarProcedimiento()
	{
		$datos = $this->input->post();

		if (!isset($datos['materiaPrimaSeleccionada']))
		{
			echo '<script type="text/javascript">
				alert("Debes seleccionar la materia prima");
				self.location ="'.base_url().'inventario/producto_receta"
				</script>';
		}
		else
		{
			for ($i=0; $i < sizeof($datos['cantidadInsumo']); $i++)
			{ 
				if ($datos['cantidadInsumo'][$i] <= 0)
				{
					unset($datos['idInsumos'][$i]);
					unset($datos['nombreInsumo'][$i]);
					unset($datos['medidaInsumo'][$i]);
				}
			}
			$cantidadI = array();
			for ($i=0; $i < sizeof($datos['cantidadInsumo']); $i++)
			{ 
				if ($datos['cantidadInsumo'][$i] != 0)
				{
					//unset($datos['cantidadInsumo'][$i]);
					array_push($cantidadI, $datos['cantidadInsumo'][$i] );

				}
			}

			$datoss = array();
			sort($datos['idInsumos']);
			sort($datos['medidaInsumo']);

			$datoss['materiaPrimaSeleccionada' ] = $datos['materiaPrimaSeleccionada'];
			$datoss['medidaInsumo' ] = $datos['medidaInsumo'];
			$datoss['cantidadInsumo' ] = $cantidadI;

			$datoss['nombreProducto' ]  = $datos['nombreProducto'];
			$datoss['precioProducto' ]  = $datos['precioProducto'];
			$datoss['idUsuario' ]  = $datos['idUsuario'];


			if (sizeof($datoss['cantidadInsumo']) == 0)
			{
				echo '<script type="text/javascript">
				alert("No ingresaste todas las cantidades de las materias primas seleccionadas");
				self.location ="'.base_url().'inventario/producto_receta"
				</script>';
			}
			
			else
			{
				$this->load->model('Inventario_Model');
				$this->Inventario_Model->guardarProcedimiento($datoss);
			}
		}
	}
	public function detalleProcedimiento()
	{
		$id =$_GET['e'];
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->detalleProcedimiento($id);
		$data = array('datos' => $datos);
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/detalle_procedimiento', $data);
		$this->load->view('administrador/base/footer2');

	}


	public function guardarProducto()
	{
		$datos = $this->input->post();

		$this->load->model('Inventario_Model');
		$direccion = $this->session->userdata('direccion');
		$bool = $this->Inventario_Model->guardarProducto($datos, $direccion);

		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al guardar el producto en proceso")</script>';

		}
		else
		{
			if ($bool==TRUE)
			{
				echo '<script type="text/javascript">
				self.location ="'.base_url().'//inventario/productosProceso"
				</script>';
			}
		}
	}

	public function productosProceso()
	{
		$id = $this->session->userdata('id');

		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductosProceso($id);
		$data = array('datos' => $datos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/productos_proceso', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function actualizarProducto()
	{
		$id = $_GET['e'];
		$this->load->model('Inventario_Model');
		$bool = $this->Inventario_Model->actualizarProducto($id);
		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al realizar operación")</script>';

		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				self.location ="'.base_url().'inventario/productos_disponibles"
				</script>';
			}
		}
	}


	public function vender_producto($p)
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductoTerminado($id, $p);
		$data = array('datos' => $datos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/venta_producto', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function venderProducto()
	{
		$datos = $this->input->post();
		$this->load->model('Inventario_Model');
		$bool = $this->Inventario_Model->efectuarVenta($datos);

	}

	public function ventasRealizadas()
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->obtenerVentas($id);
		$data = array('datos' => $datos);


		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/ventas_realizadas', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function reporteInventario()
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductosTerminados($id);
		$fecha = date("d-m-Y");
		if (sizeof($datos->result())!=0) 
		{
			$this->load->library('M_pdf');
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
				width: 125px;
			}
			.textoCentral{
				color: #000;
				font-weight: bold;
				float:right;
				padding-left: 20px;
				margin: 0 auto;
				text-align: center;
				line-height:: 50;
				width: 475px;
				line-height: 26px;
			}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
					<div id='img'>
			<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div>
		    <div class='textoCentral'>REPORTE DE INVENTARIO <br>
			       ".strtoupper($this->session->userdata('nombreNegocio'))."      
		    ";
		foreach ($datos->result() as $user)
	        {}
		$html .="
		  <br><strong style='font-weight: bold; text-align:center;'>PROPIETARIA: ".strtoupper($user->Nombre)." ".strtoupper($user->Apellido )."</strong><br>FECHA DE CREACION: ".$fecha."</p></div>
		</div></div>	<br>		        
			<div class='table-responsive container'>
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr >
				        <th>Producto</th>
				        <th>Precio</th>
				        <th>Cantidad</th>
				        <th>Monto</th>
			        </tr>
			        </thead>
			        <tbody>";
		          $totalVendido = 0;
		          $dinero =0; 
		         foreach ($datos->result() as $fila)
		        {
		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->Existencia_Producto;
					$precio = $fila->Precio_Producto;
					$monto = $fila->Precio_Producto;
					$totalVendido = $totalVendido + $cantidad;
					$dinero = $dinero + ($monto*$cantidad);
		            $html.="<tr><td>" . $nombre . "</td><td>" . $precio. "</td><td>" . $cantidad. "</td><td>$" . $monto*$cantidad. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='3'>Total de productos en inventario </th>
						<th>$totalVendido</th>
						</tr>";
				$html .= "<tr>
						<th colspan='3'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";
				$html .= "</table></div>";
		 
		         $pdfFilePath = "resumen_inventario.pdf";
		         //load mPDF library
		        $this->load->library('M_pdf');
		         $mpdf = new mPDF('c', 'A4'); 
		         $estilos=file_get_contents(base_url()."plantilla/css/bootstrap.min.css");
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
					self.location ="'.base_url().'reportes/trabajosRealizados"
					</script>';
			}
	}
	public function reporteVentas()
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->obtenerVentas($id);
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
				width: 125px;
			}
			.textoCentral{
				color: #000;
				font-weight: bold;
				float:right;
				padding-left: 20px;
				margin: 0 auto;
				text-align: center;
				line-height:: 50;
				width: 475px;
				line-height: 26px;
			}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div>
		    <div class='textoCentral'>REPORTE DE VENTAS <br>
			       ".strtoupper($this->session->userdata('nombreNegocio'))." <br>     
		    ";
		foreach ($datos->result() as $user)
	        {}
		$html .="
		    <strong style='font-weight: bold; text-align:center;'>PROPIETARIA:".strtoupper($user->Nombre)." ".strtoupper($user->Apellido )."</strong><br>FECHA DE CREACION: ".$fecha."</p></div>
		</div>
			</div>
			<br>
			        
			<div class='table-responsive container'>
			      
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr >
				        <th>Producto</th>
				        <th>Precio</th>
				        <th>Cantidad</th>
				        <th>Fecha</th>
				        <th>Monto</th>
			        </tr>
			        </thead>
			        <tbody>";
		          $totalVendido = 0;
		          $dinero =0; 
		         foreach ($datos->result() as $fila)
		        {
		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->Cantidad_Venta;
					//$precio = $fila->Fecha_Venta;
					$fecha = new DateTime($fila->Fecha_Venta);
					$fecha = $fecha->format("d-m-Y");
					$monto = $fila->Precio_Producto;
					$totalVendido = $totalVendido + $cantidad;
					$dinero = $dinero + ($monto*$cantidad);
		            $html.="<tr><td>" . $nombre . "</td><td>" . $monto. "</td><td>" . $cantidad. "</td><td>" . $fecha. "</td><td>$" . $monto*$cantidad. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='4'>Total de productos vendidos </th>
						<th>$totalVendido</th>
						</tr>";
				$html .= "<tr>
						<th colspan='4'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";
				$html .= "</table></div>";
		 
		         $pdfFilePath = "resumen_de_ventas_general.pdf";
		         //load mPDF library
		        $this->load->library('M_pdf');
		         $mpdf = new mPDF('c', 'A4'); 
		         $estilos=file_get_contents(base_url()."plantilla/css/bootstrap.min.css");
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
					self.location ="'.base_url().'reportes/trabajosRealizados"
					</script>';
			}
	}
	public function reporteInventarioEnProceso()
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductosProceso($id);
		if (sizeof($datos->result())!=0) 
		{
			$this->load->library('M_pdf');
			$fecha= date("d-m-Y");
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
				width: 125px;
			}
			.textoCentral{
				color: #000;
				font-weight: bold;
				float:right;
				padding-left: 20px;
				margin: 0 auto;
				text-align: center;
				line-height:: 30;
				width: 475px;
				line-height: 20px;
			}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
					<div id='img'>
					<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div>
		    <div class='textoCentral'>REPORTE DE PRODUCTOS EN PROCESO <br>
			       ".strtoupper($this->session->userdata('nombreNegocio'))."      
		    ";
			    foreach ($datos->result() as $user)
		        {}
			$html .="
			    <br><strong style='font-weight: bold;'>PROPIETARIA: ".strtoupper($user->Nombre)." ".strtoupper($user->Apellido )."</strong><br>FECHA DE CREACION: ".$fecha."</p></div>
			    </div>
			</div>
			<br>
			        
			<div class='table-responsive container'>
			      
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr >
				        <th>Producto</th> 
				        <th>Precio</th>
				        <th>Cantidad</th>
				        <th>Monto</th>
			        </tr>
			        </thead>
			        <tbody>";
		          $totalProceso = 0;
		          $dinero =0; 
		         foreach ($datos->result() as $fila)
		        {
		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->Existencia_Producto;
					$precio = $fila->Precio_Producto;
					$monto = $fila->Precio_Producto * $cantidad;
					$totalProceso = $totalProceso + $cantidad;
					$dinero = $dinero + $monto;
		            $html.="<tr><td>" . $nombre . "</td><td>" . $precio. "</td><td>" . $cantidad. "</td><td>$" . $monto. "</td></tr>";
		        }
		        $html .= "<tr >
						<th colspan='3' >Total de productos en proceso </th>
						<th  class='text-center'>$totalProceso</th>
						</tr>";
				$html .= "<tr >
						<th  colspan='3' class='text-center'>Total de dinero </th>
						<th class='text-center'>$$dinero</th>
						</tr>";
				$html .= "</table></div>";
		 
		         $pdfFilePath = "resumen_productos_en_proceso.pdf";
		         //load mPDF library
		        $this->load->library('M_pdf');
		         $mpdf = new mPDF('c', 'A4'); 
		         $estilos=file_get_contents(base_url()."plantilla/css/bootstrap.min.css");
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
					self.location ="'.base_url().'reportes/trabajosRealizados"
					</script>';
			}
	}

	public function datosProducto()
	{
		$id = $_GET['i'];
		$this->load->Model("Inventario_Model");
		$datos = $this->Inventario_Model->datosProducto($id);
		$data = array('datos' => $datos );
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/actualizarReceta', $data);
		$this->load->view('administrador/base/footer2');
	}
public function actualizarReceta()
	{
		$datos = $this->input->post();
		$this->load->Model("Inventario_Model");
		$bool = $this->Inventario_Model->actualizarProcedimiento($datos);
		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al actualizar los datos")</script>';
		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
			
				self.location ="'.base_url().'inventario/consultar_receta"
				</script>';
			}
		}
	}
	public function eliminarReceta()
	{
		$id = $_GET['i'];
		$this->load->Model("Inventario_Model");

		$bool = $this->Inventario_Model->eliminarProcedimiento($id);

		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al eliminar los datos")</script>';
		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				self.location ="'.base_url().'inventario/consultar_receta"
				</script>';
			}
		}
	}
}