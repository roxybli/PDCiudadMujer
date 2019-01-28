<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportesEU extends CI_Controller 
{
	public function index()
	{
		$this->load->model('Usuarias_Model');
		$dato = $this->input->POST();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data=array('con2'=>$resultado2);
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesU/Crear_Reportes', $data);
		$this->load->view('administrador/base/footer');
	}

	public function ReportesPDF()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesE/Crear_ReportesE');
		$this->load->view('administrador/base/footer');
	}
	
	public function ReportesPDFVentas()
	{
		$this->load->model('Usuarias_Model');
		$dato = $this->input->POST();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data=array('con2'=>$resultado2);
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesE/Reportes_Ventas', $data);
		$this->load->view('administrador/base/footer');
	}

	public function ReportePeriodoVentas()
	{
		$id = $this->session->userdata('id');
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodoVentas($id, $dato);
		$fecha = date("d-m-Y");
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        $hoy = date("d / M / Y");
	         foreach ($data->result() as $datos)
		        {
		        	//$fecha1 = new DateTime($datos->Fecha_Venta);
                	//$fecha1 = $fecha1->format("d-m-Y");
                	$fecha1 =date("d-m-Y",strtotime($datos->Fecha_Venta."- 8 days"));
                	$fecha2 =date("d-m-Y",strtotime($datos->Fecha_Fin."+ 7 days"));
					//$fecha2 = new DateTime($datos->Fecha_Fin);
                	//$fecha2 = $fecha2->format("d-m-Y");
                }
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
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			<div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
			      
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div>
		    <div class='textoCentral'>REPORTE DE VENTAS <br>".strtoupper($this->session->userdata('nombreNegocio'))." <br> DESDE EL  ".$fecha1." HASTA ".$fecha2."    
		    ";
		foreach ($data->result() as $user)
	        {}
		$html .="
		    <br><strong style='font-weight: bold; text-align:center;'>PROPIETARIA: ".strtoupper($this->session->userdata('nombre'))." ".strtoupper($user->Apellido )."</strong><br>FECHA DE CREACION: ".$fecha."</p></div>
		</div></div><br>
				   </div>
			    </div>";
			$html .= "
			    <strong style='font-weight: bold;'></strong>
			</div>
		
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
		         foreach ($data->result() as $fila)
		        {
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->cantidad;
					$monto = $fila->Precio_Producto;
					$totalVendido = $totalVendido + $cantidad;
					$dinero = $dinero + ($monto*$cantidad);
		            $html.="<tr><td>" . $nombre . "</td><td>" . $monto. "</td><td>" . $cantidad. "</td><td>$" . $monto*$cantidad. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='3'>Total de productos vendidos </th>
						<th>$totalVendido</th>
						</tr>";
				$html .= "<tr>
						<th colspan='3'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";
				$html .= "</table></div>";
		 
		         $pdfFilePath = "resumen_ventas_por_fechas.pdf";
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
public function ReportePorVentas(){
		$id = $this->session->userdata('id');
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodoAÑOSVentas($id, $dato);
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        $hoy = date("d / M / Y");
	        $fecha = date("d-m-Y");
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
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div>
		    <div class='textoCentral'>REPORTE DE VENTAS <br>".strtoupper($this->session->userdata('nombreNegocio'))." <br> DESDE EL AÑO ".$dato['Fecha_Venta']." HASTA ".$dato['Fecha_Fin']."    
		    ";
		foreach ($data->result() as $user)
	        {}
		$html .="
		  <br><strong style='font-weight: bold; text-align:center;'>PROPIETARIA: ".strtoupper($this->session->userdata('nombre'))." ".strtoupper($user->Apellido )."</strong><br>FECHA DE CREACION: ".$fecha."</p></div>
		</div></div>
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
		          $totalVendido = 0;
		          $dinero =0; 
		         foreach ($data->result() as $fila)
		        { 
		            $nombre = $fila->Nombre_Producto;
					$cantidad = $fila->cantidad;
					$monto = $fila->Precio_Producto;
					$totalVendido = $totalVendido + $cantidad;
					$dinero = $dinero + ($monto*$cantidad);
		            $html.="<tr><td>" . $nombre . "</td><td>" . $monto. "</td><td>" . $cantidad. "</td><td>$" . $monto*$cantidad. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='3'>Total de productos vendidos </th>
						<th>$totalVendido</th>
						</tr>";
				$html .= "<tr>
						<th colspan='3'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";
				$html .= "</table></div>";
		 
		 
		         $pdfFilePath = "resumen_ventas_por_año.pdf";
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
	public function ReportesPDFInventario()
	{
		$this->load->model('Usuarias_Model');
		$dato = $this->input->POST();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data=array('con2'=>$resultado2);
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesE/Reportes_Inventario', $data);
		$this->load->view('administrador/base/footer');
	}

public function ReportePeriodoInventario()
	{
		$id = $this->session->userdata('id');
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodoInventario($id, $dato);
		$fecha = date("d-m-Y");
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        $hoy = date("d / M / Y");
	         foreach ($data->result() as $datos)
		        {

		        		$fecha1 =date("d-m-Y",strtotime($datos->Fecha_Creacion."- 1 days"));
                	$fecha2 =date("d-m-Y",strtotime($datos->Fecha_Fin."+ 8 days"));
		        	/*$fecha1 = new DateTime($datos->Fecha_Creacion);
                	$fecha1 = $fecha1->format("d-m-Y");
					$fecha2 = new DateTime($datos->Fecha_Fin);
                	$fecha2 = $fecha2->format("d-m-Y");*/
                }
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
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			<div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
			      
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div>
		    <div class='textoCentral'>REPORTE DE INVENTARIO <br>".strtoupper($this->session->userdata('nombreNegocio'))." <br> DESDE EL  ".$fecha1." HASTA ".$fecha2."    
		    ";
		foreach ($data->result() as $user)
	        {}
		$html .="
		    <br><strong style='font-weight: bold; text-align:center;'>PROPIETARIA: ".strtoupper($this->session->userdata('nombre'))." ".strtoupper($user->Apellido )."</strong>
		    <br>FECHA DE CREACION: ".$fecha."</p>;
		    </div>
		</div></div>
				   </div>
			    </div>";
			$html .= "
			    <strong style='font-weight: bold;'></strong>
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
		          $totalVendido = 0;
		          $dinero =0; 
		         foreach ($data->result() as $fila)
		        {
		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->cantidad;
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
		 
		         $pdfFilePath = "resumen_inventario_por_fecha.pdf";
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
   public function ReportePorInventario(){
		$id = $this->session->userdata('id');
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodoAÑOSInventario($id, $dato);
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        $hoy = date("d / M / Y");
	        $fecha = date("d-m-Y");
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
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div>
		    <div class='textoCentral'>REPORTE DE INVENTARIO <br>".strtoupper($this->session->userdata('nombreNegocio'))." <br> DESDE EL AÑO ".$dato['Fecha_Creacion']." HASTA ".$dato['Fecha_Fin']."    
		    ";
		foreach ($data->result() as $user)
	        {}
		$html .="
		  <br><strong style='font-weight: bold; text-align:center;'>PROPIETARIA: ".strtoupper($this->session->userdata('nombre'))." ".strtoupper($user->Apellido )."</strong> <br>FECHA DE CREACION: ".$fecha."</p></div>
		   <br>
		</div></div>
			   
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
		         foreach ($data->result() as $fila)
		        {
		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->cantidad;
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
		 
		         $pdfFilePath = "resumen_inventario_por_año.pdf";
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

public function ReportesPDFBalances()
	{
		$this->load->model('Usuarias_Model');
		$dato = $this->input->POST();
		$resultado2 =$this->Usuarias_Model->CargarSede();
		$data=array('con2'=>$resultado2);
		$this->load->view('administrador/base/header');
		$this->load->view('ReportesE/Reportes_Balances_IE', $data);
		$this->load->view('administrador/base/footer');
	}

public function ReportePeriodoBalances()
	{
		$id = $this->session->userdata('id');
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodoBalances($id, $dato);
		$fecha = date("d-m-Y");
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        $hoy = date("d / M / Y");
	         foreach ($data->result() as $datos)
		        {
		        	
		        	$fecha1 = new DateTime($datos->Fecha_Balance);
                	$fecha1 = $fecha1->format("d-m-Y");
					$fecha2 = new DateTime($datos->Fecha_Fin);
                	$fecha2 = $fecha2->format("d-m-Y");
                }
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
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			<div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
			      
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div><p style='font-weight: bold; text-align:right;'> FECHA DE CREACIÓN:  $fecha</p>
		    <div class='textoCentral'>REPORTE DE BALANCES DE INGRESOS Y EGRESOS <br> ".strtoupper($this->session->userdata('nombreNegocio'))." <br> DESDE EL  ".$fecha1." AL ".$fecha2."    
		    ";
		foreach ($data->result() as $user)
	        {}
		$html .="
		    <br><strong style='font-weight: bold; text-align:center;'>PROPIETARIA: ".strtoupper($this->session->userdata('nombre'))." ".strtoupper($user->Apellido )."</strong></div>
		</div></div>
				   </div>
			    </div>";
			$html .= "
			    <strong style='font-weight: bold;'></strong>
			</div>
		
			<div class='table-responsive container'>
			      
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr>
	                    <th>Fecha</th>
	                    <th>Operación</th>
	                    <th>Egreso de dinero</th>
	                    <th>Ingreso</th>
	                    <th>Balance</th>
	                </tr>
			        </thead>
			        <tbody>";

                        $contador=0;
                        $ime=0;
                        foreach ($data->result() as $filaDatos)
                        {
                        	$fecha = new DateTime($filaDatos->Fecha_Balance);
                                    $fecha = $fecha->format("d-m-Y");
                           $html .="<tr>
                               <td class='text-primary'><span>$fecha</span></td>
                               <td class='text-primary'><span>$filaDatos->Nombre_Operacion - $filaDatos->Nombre_Egreso</span></td>
                               <td class='text-primary'><span>$".$filaDatos->Cantidad_Egreso."</span></td>";
                            if ($contador == 0)
                            {
                                $ime = $filaDatos->Total_Ingreso;
                                $html .= "<td class='text-primary'><span>$".$filaDatos->Total_Ingreso."</span></td>";     
                            }
                            else
                            {
                                $html .= "<td class='text-primary'><span>$".$ime ."</span></td>";
                            }
                            $ime = $ime - $filaDatos->Cantidad_Egreso;
                                
                               $html .= "<td class='text-primary'><span>$".$ime."</span></td>
                            </tr>";
                                  $contador++;
                            }

                      $html .=  "<tr id='totalDG'>
				            <td colspan='4' class='text-center'><h3>Total despues de gastos</h3></td>
				            <td colspan='2'><span class='btn btn-primary form-control'>$".$ime."</span></td>
				        </tr></tbody>";

				$html .= "</table></div>";

		 

		         $pdfFilePath = "resumen_balances_ingresos_egresos.pdf";
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
					self.location ="'.base_url().'Reportes/trabajosRealizados"
					</script>';
			}

	}

   public function ReportePorBalances(){
		$id = $this->session->userdata('id');
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodoAÑOSInventario($id, $dato);
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        $hoy = date("d / M / Y");
	        $fecha = date("d-m-Y");
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
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
			    <div id='img'>
				<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
		    </div><p style='font-weight: bold; text-align:right;'> FECHA DE CREACIÓN:  $fecha</p>
		    <div class='textoCentral'>REPORTE DE INVENTARIO ".strtoupper($this->session->userdata('nombreNegocio'))." <br> DESDE EL AÑO ".$dato['Fecha_Balance']." AL ".$dato['Fecha_Fin']."    
		    ";
		foreach ($data->result() as $user)
	        {}
		$html .="
		  <br><strong style='font-weight: bold; text-align:center;'>PROPIETARIA: ".strtoupper($this->session->userdata('nombre'))." ".strtoupper($user->Apellido )."</strong></div>
		</div></div>
			   
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
		         foreach ($data->result() as $fila)
		        {
		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->cantidad;
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
		 
		         $pdfFilePath = "resumen_inventario_por_año.pdf";
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



	}