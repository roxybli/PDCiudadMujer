 <?php
if($this->session->userdata('login'))
{
?>
 <script src="<?=base_url() ?>plantilla/mtl/material.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
 <!-- Bread crumb -->
            <div class="row page-titles">
              <div class="col-md-3 align-self-center">
        <a href="<?= base_url() ?>ReportesEU/ReportesPDF"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
         </div>
                <div class="col-md-9 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Reportes de Inventario</a></li>
                        <li class="breadcrumb-item active">Detalles</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="card TituloUser" style="height: 60px">
                                    <h3 class="responsive" style="color:white; font-weight:bold;">Crear reportes de Inventario</h3>
                                </div>
                    <div class="card col-sm-12">
                        <div class="card">
                                
                                <div class="row">
                                <div class="col-md-4">
                                 <div class="card" style="padding:0px;">
                                 <div class="encabezado1" id="Div1" style="background-color:#01579B; color:white;"  onclick="Abrir(1)">
                                 Reportes por Fechas
                                 </div>
                                    <div id="divP" style="display:none;">
                                    <p>Este reporte genera un documento de registro de productos en inventario según la fecha seleccionada en el cual se muestra la siguiente información:</p>
                                    <ul>
                                    <li>- Producto </li>
                                    <li>- Precio del Producto </li>
                                    <li>- Cantidad</li>
                                    <li>- Monto de la venta</li>
                                    <li>- Total de productos en inventario</li>
                                    </ul>
                                    <br>
                                 <form method="POST" action="<?= base_url()?>ReportesEU/ReportePeriodoInventario" target="_blank">
                                     <div class="row form-validation">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="etiquetaa">Fecha de inicio</label>
                                                <div class="input-group">
                                                    <input type="date" id="Fecha_Creacion" name="Fecha_Creacion" class="form-control">
                                                        
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                                <label class="etiquetaa">Fecha de Fin</label>
                                                <div class="input-group">
                                                    <input type="date" id="Fecha_Fin" name="Fecha_Fin" class="form-control">                                              
                                                    </input>
                                                </div>
                                            </div>
                                            
                                        </div>
                                     </div>
                                     <div class="row" >
                                     <a onclick="cancelar()" style="margin:0 auto; font-weight:bold; color: white;" class="btn btn-secondary"><i class="fa fa-close" style="margin:10px;"></i> Cancelar</a>
                                         <button style="margin:0 auto; font-weight:bold; background-color:#FF5252; color:white;" class="btn " ><i class="fa fa-file" style="margin:10px;"></i> Generar pdf</button>
                                     </div> 
                                 </form>
                                 </div>
                                </div>
                                </div>
                                
                                <div class="col-md-4">
                                 <div class="card" style="padding:0px;">
                                 <div class="encabezado2" id="Div2" style="background-color:#1B5E20; color:white;" onclick="Abrir(2)">
                                 Reportes por Años
                                 </div>
                                    <div id="divP2" style="display:none;padding:10px;">
                                    <p>Este reporte genera un documento de registro de ventas según el año seleccionada en el cual se muestra la siguiente información:</p>
                                    <ul>
                                    <li>- Producto </li>
                                    <li>- Precio del Producto </li>
                                    <li>- Cantidad</li>
                                    <li>- Monto de la venta</li>
                                    <li>- Total de productos en inventario</li>
                                    </ul>
                                    <br>
                                 <form method="POST" action="<?= base_url()?>ReportesEU/ReportePorInventario" target="_blank">
                                     <div class="row form-validation">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="etiquetaa">Año de inicio</label>
                                                <div class="input-group">
                                                    <select id="Fecha_Creacion" name="Fecha_Creacion" class="form-control">
                                                        <?php
                                                            for ($i=2011; $i < 2071 ; $i++) { 
                                                        ?>
                                                            <option><?= $i?></option>
                                                        <?php   
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                                <label class="etiquetaa">Año de Fin</label>
                                                <div class="input-group">
                                                    <select id="Fecha_Fin" name="Fecha_Fin" class="form-control">
                                                        <?php
                                                            for ($i=2011; $i < 2071 ; $i++) { 
                                                        ?>
                                                            <option><?= $i?></option>
                                                        <?php   
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                     </div>
                                     <div class="row" >
                                     <a onclick="cancelar()" style="margin:0 auto; font-weight:bold; color: white;" class="btn btn-secondary"><i class="fa fa-close" style="margin:10px;"></i> Cancelar</a>
                                         <button style="margin:0 auto; font-weight:bold; background-color:#FF5252; color:white;" class="btn " ><i class="fa fa-file" style="margin:10px;"></i> Generar pdf</button>
                                     </div> 
                                 </form>
                                 </div>
                                </div>
                                </div>
                                 <div class="col-md-4">
                                 <div class="card" style="padding:0px;">
                                 <div class="encabezado3" id="Div3" style="background-color:#546E7A; color:white;"  onclick="Abrir(3)">
                                    Reportes general
                                 </div>

                                 <div id="divP3"  style="display:none; padding:10px;">
                                     <p>Este reporte genera un documento de registro de ventas general en el cual se muestra la siguiente información:</p>
                                    <ul>
                                    <li>- Producto </li>
                                    <li>- Precio del Producto </li>
                                    <li>- Cantidad</li>
                                    <li>- Monto de la venta</li>
                                    <li>- Total de productos en inventario</li>
                                    </ul>
                                 <form method="POST" action="<?= base_url()?>Inventario/reporteInventario" target="_blank">
                                     <div class="row">
                                        <div class="col-md-12">
                                        <a onclick="cancelar()" style="margin:0 auto; font-weight:bold; color: white;" class="btn btn-secondary""><i class="fa fa-close" style="margin:10px;"></i> Cancelar</a>
                                         <button style="margin:0 auto; font-weight:bold; background-color:#FF5252; color:white;" class="btn "><i class="fa fa-file" style="margin:10px;" ></i> Generar pdf</button>
                                     </div>
                                        </div>
                                       
                                     </div>
                                     
                                     
                                 </form>

                                
                                
                                </div>
                        </div>
                    </div>
                </div>
<script type="text/javascript">
    $(document).on("ready", function(){

    });
    function Abrir(i){
        //alert('aaaa');
        if(i==1){
            document.getElementById('divP').style.display="block";
            document.getElementById('divP2').style.display="none";
            document.getElementById('divP3').style.display="none";

        }
         if(i==2){
            document.getElementById('divP').style.display="none";
            document.getElementById('divP2').style.display="block";
            document.getElementById('divP3').style.display="none";

        }
         if(i==3){
            document.getElementById('divP').style.display="none";
            document.getElementById('divP2').style.display="none";
            document.getElementById('divP3').style.display="block";

        }
    }
    function cancelar(){
        document.getElementById('divP').style.display="none";
        document.getElementById('divP2').style.display="none";
        document.getElementById('divP3').style.display="none";

    }
    <?php
} ?>
</script>