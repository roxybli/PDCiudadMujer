<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
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
	public function ReporteGeneral(){
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReporteGeneral($dato);
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');
	        //$data = [];
	        $hoy = date("d/m/Y");
	         foreach ($data->result() as $datos)
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
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}
			 </style>
			 <div class='container'>
			    <div id='cabecera'>
					<div id='img'>
						<img src='".base_url()."plantilla/images/LogoCiudadMujer.png'>
				    </div>
				    <div class='textoCentral'>";
				    if($dato['sede']==""){
						$html.="
							    CIUDAD MUJER, EL SALVADOR<br>
							     SEDE: ".strtoupper($datos->Nombre_Sede)."<br>
								    REPORTE GENERAL DE USUARIAS
								    <br>FECHA DE CREACION: ".$hoy."</p>";

					}
					else{
						$html .="
							    CIUDAD MUJER, EL SALVADOR<br>
							    SEDE: ".strtoupper($datos->Nombre_Sede)."<br>
								    REPORTE GENERAL DE USUARIAS
								    <br>FECHA DE CREACION: ".$hoy."</p>";
					}

				    $html.="</div>
			    			</div>";
			$html .= "
			    <strong style='font-weight: bold;'></strong>
			</div><br>
			
			<div class='table-responsive container'>
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr>
			        	<th>No.</th>
	                    <th>Nombre del negocio</th>
	                    <th>Rubro</th>
	                    <th>Propietaria</th>
	                    <th>DUI</th>
	                    <th>Direccion</th>
	                    <th>Telefono</th>
	                    
	                </tr>
			        </thead>
			        <tbody>";
                        $contador=0;
                        $ime=1;
                        foreach ($data->result() as $filaDatos)
                        {

                           $html.="<tr>
                           	<td>".$ime."</td>
                           	<td>".$filaDatos->Nombre_Negocio."</td>
                           	<td>".$filaDatos->Nombre_Rubro."</td>
                           	<td>".$filaDatos->Nombre." ".$filaDatos->Apellido."</td>
                           	<td>".$filaDatos->Dui."</td>
                           	<td>".$filaDatos->Direccion."</td>
                           	<td>".$filaDatos->Telefono."</td>
                          
                           </tr>";
                           $ime++;
                            }

                      $html .=  "</tbody>";

				$html .= "</table></div>";

		 

		         $pdfFilePath = "resumen_general_usuarias.pdf";
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
					self.location ="'.base_url().'Reportes/"
					</script>';
			}

	}
	public function ReportePor(){
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorAño($dato);
		//echo json_encode($data->result());
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');

	        //$data = [];

	        $hoy = date("d/m/ Y");
	         foreach ($data->result() as $datos)
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
						<img src='".base_url()."plantilla/images/LogoCiudadMujer.png'>
				    </div>
				   <div class='textoCentral'>";
				    if($dato['sede']==""){
						$html.="
							    CIUDAD MUJER, EL SALVADOR<br>
							    SEDE: ".strtoupper($datos->Nombre_Sede)."<br>
								    REPORTE GENERAL DE USUARIAS DEL AÑO ".$dato['Año_Ingreso']."
								    <br>FECHA DE CREACION: ".$hoy."</p>";

					}
					else{
						$html .="
							    CIUDAD MUJER, EL SALVADOR<br>
							    SEDE: ".strtoupper($datos->Nombre_Sede)."<br>
								    REPORTE GENERAL DE USUARIAS DEL AÑO ".$dato['Año_Ingreso']."
								    <br>FECHA DE CREACION: ".$hoy."</p>";
					}

				    $html.="</div>
			    </div>";
			$html .= "
			    <strong style='font-weight: bold;'></strong>
			</div>
			<br> 
			<div class='table-responsive container'>
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr>
			        	<th>No.</th>
	                    <th>Nombre del negocio</th>
	                    <th>Rubro</th>
	                    <th>Propietaria</th>
	                    <th>DUI</th>
	                    <th>Direccion</th>
	                    <th>Telefono</th>
	                   
	                </tr>
			        </thead>
			        <tbody>";
                        $contador=0;
                        $ime=1;
                        foreach ($data->result() as $filaDatos)
                        {
                           $html.="<tr>
                           	<td>".$ime."</td>
                           	<td>".$filaDatos->Nombre_Negocio."</td>
                           	<td>".$filaDatos->Nombre_Rubro."</td>
                           	<td>".$filaDatos->Nombre." ".$filaDatos->Apellido."</td>
                           	<td>".$filaDatos->Dui."</td>
                           	<td>".$filaDatos->Direccion."</td>
                           	<td>".$filaDatos->Telefono."</td>
                           	
                           </tr>";
                           $ime++;
                            }

                      $html .=  "</tbody>";

				$html .= "</table></div>";

		 

		         $pdfFilePath = "resumen_anual_usuarias.pdf";
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
					self.location ="'.base_url().'Reportes/"
					</script>';
			}
	}
	public function ReportePeriodo()
	{
		$dato = $this->input->POST();
		$this->load->model('Reportes_Model');
		$data=$this->Reportes_Model->ReportePorPeriodo($dato);
		//echo json_encode($data->result());
		if (sizeof($data->result())!=0) 
		{
			$this->load->library('M_pdf');

	        //$data = [];

	        $hoy = date("d/m/Y");
	         foreach ($data->result() as $datos)
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
						<img src='".base_url()."plantilla/images/LogoCiudadMujer.png'>
				    </div>
				     <div class='textoCentral'>";
				    if($dato['sede']==""){
						$html.="
							    CIUDAD MUJER, EL SALVADOR<br>
							    SEDE: ".strtoupper($datos->Nombre_Sede)."<br>
								REPORTE GENERAL DE USUARIAS DEL AÑO ".$dato['Año_Ingreso']." HASTA ".$dato['Año_Fin']."
								<br>FECHA DE CREACION: ".$hoy."</p>";

					}
					else{
						$html .="
							    CIUDAD MUJER, EL SALVADOR<br>
							    SEDE: ".strtoupper($datos->Nombre_Sede)."<br>
								REPORTE GENERAL DE USUARIAS DEL AÑO ".$dato['Año_Ingreso']." HASTA ".$dato['Año_Fin']."
								<br>FECHA DE CREACION: ".$hoy."</p>";
					}

				    $html.="</div>
			    </div>";
			$html .= "
			    <strong style='font-weight: bold;'></strong>
			</div>
			<br> 
			<div class='table-responsive container'>
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr>
			        	<th>No.</th>
	                    <th>Nombre del negocio</th>
	                    <th>Rubro</th>
	                    <th>Propietaria</th>
	                    <th>DUI</th>
	                    <th>Direccion</th>
	                    <th>Telefono</th>
	                </tr>
			        </thead>
			        <tbody>";
                        $contador=0;
                        $ime=1;
                        foreach ($data->result() as $filaDatos)
                        {
                           $html.="<tr>
                          	<td>".$ime."</td>
                           	<td>".$filaDatos->Nombre_Negocio."</td>
                           	<td>".$filaDatos->Nombre_Rubro."</td>
                           	<td>".$filaDatos->Nombre." ".$filaDatos->Apellido."</td>
                           	<td>".$filaDatos->Dui."</td>
                           	<td>".$filaDatos->Direccion."</td>
                           	<td>".$filaDatos->Telefono."</td>
                           	
                           </tr>";
                           $ime++;
                            }

                      $html .=  "</tbody>";

				$html .= "</table></div>";
		         $pdfFilePath = "resumen de inventario.pdf";
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
					self.location ="'.base_url().'Reportes/"
					</script>';
			}
	}
}
?>