 <script src="<?=base_url() ?>plantilla/mtl/material.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Nuevo usuaria</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card TituloUser">
                                    <h3 class="responsive" style="color:white; font-weight:bold;">Crear Reportes de Usuarias</h3>
                                </div>
                        <div class="card">
                                
                                <div class="row">
                                <div class="col-md-4">
                                 <div class="card" style="padding:0px;">
                                 <div class="encabezado1" id="Div1"style="background-color:#01579B; color:white;"   onclick="Abrir(1)">
                                 Reportes por periodo de años
                                 </div>
                                    <div id="divP" style="display:none;">
                                    <p>Este reporte genera un documento de registro de usuarias según los años seleccionados en el cual se muestra la siguiente información:</p>
                                    <ul>
                                    <li>- Nombre del negocio</li>
                                    <li>- Rubro</li>
                                    <li>- Propietaria</li>
                                    <li>- Dirección</li>
                                    <li>- Teléfono</li>
                                    </ul>
                                    <br>
                                 <form method="POST" action="<?= base_url()?>Reportes/ReportePeriodo" target="_blank">
                                     <div class="row form-validation">
                                     <?php
                                     if($this->session->userdata('id_tipo')==1)
                                     {
                                        ?>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <select style="margin:0 auto;" class="form-control" id="sede" name="sede">
                                                    <option value=''>Seleccione una Sede </option>";
                                                        <?php

                                                            foreach ($con2->result() as $fila) {

                                                                echo "<option value='".$fila->Pk_Id_Sede."'>".$fila->Nombre_Sede."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <?php

                                     }
                                     else{
                                        echo "<input hidden type='text' name='sede' value='".$this->session->userdata('id_sede')."'>";
                                     }
                                     ?>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="etiquetaa">Año de inicio</label>
                                                <div class="input-group">
                                                    <select id="Año_Ingreso" name="Año_Ingreso" class="form-control">
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
                                                    <select id="Año_Ingreso" name="Año_Fin" class="form-control">
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
                                     <a onclick="cancelar()" style="margin:0 auto; font-weight:bold; color: white" class="btn btn-secondary"><i class="fa fa-close" style="margin:10px;"></i> Cancelar</a>

                                         <button style="margin:0 auto; font-weight:bold; background-color:#FF5252; color:white;" class="btn " ><i class="fa fa-file" style="margin:10px;"></i> Generar pdf</button>
                                     </div>
                                     
                                 </form>
                                 </div>
                                </div>
                                </div>
                                <div class="col-md-4">
                                 <div class="card" style="padding:0px;">
                                 <div class="encabezado2" id="Div2" style="background-color:#1B5E20; color:white;"  onclick="Abrir(2)">
                                    Reporte por año en especifico
                                 </div>
                                 <div id="divP2"  style="display:none; padding:10px;">
                                    <p>Este reporte genera un documento de registro de usuarias segun el año seleccionado en el cual se muestra la siguiente información:</p>
                                    <ul>
                                    <li>- Nombre del negocio</li>
                                    <li>- Rubro</li>
                                    <li>- Propietaria</li>
                                    <li>- Dirección</li>
                                    <li>- Teléfono</li>
                                    </ul>
                                    <br>
                                 <form method="POST" action="<?= base_url()?>Reportes/ReportePor" target="_blank">
                                     <div class="row">
                                        
                                        <?php
                                     if($this->session->userdata('id_tipo')==1)
                                     {
                                        ?>
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <select style="margin:0 auto;" class="form-control" id="sede" name="sede">
                                                    <option value=''>Seleccione una Sede </option>";
                                                        <?php
                                                            foreach ($con2->result() as $fila) {

                                                                echo "<option value='".$fila->Pk_Id_Sede."'>".$fila->Nombre_Sede."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <?php

                                     }
                                     else{
                                        echo "<input hidden type='text' name='sede' value='".$this->session->userdata('id_sede')."'>";
                                     }
                                     ?>
                                     <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="etiquetaa">Seleccione el año</label>
                                                <div class="input-group">
                                                    <select id="Año_Ingreso" name="Año_Ingreso" class="form-control">
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
                                     <a onclick="cancelar()" style="margin:0 auto; font-weight:bold;color: white" class="btn btn-secondary"><i class="fa fa-close" style="margin:10px;"></i> Cancelar</a>
                                         <button style="margin:0 auto; font-weight:bold; background-color:#FF5252; color:white;" class="btn "><i class="fa fa-file" style="margin:10px;"></i> Generar pdf</button>
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
                                    <p>Este reporte genera un documento de registro de usuarias en general en el cual se muestra la siguiente información:</p>
                                    <ul>
                                    <li>- Nombre del negocio</li>
                                    <li>- Rubro</li>
                                    <li>- Propietaria</li>
                                    <li>- Dirección</li>
                                    <li>- Teléfono</li>
                                    </ul>
                                 <form method="POST" action="<?= base_url()?>Reportes/ReporteGeneral" target="_blank">
                                     <div class="row">
                                        <div class="col-md-12">

                                        <?php
                                     if($this->session->userdata('id_tipo')==1)
                                     {
                                        ?>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <select style="margin:0 auto;" class="form-control" id="sede" name="sede">
                                                   <option value=''>Seleccione una Sede </option>";
                                                        <?php
                                                            foreach ($con2->result() as $fila) {

                                                                echo "<option value='".$fila->Pk_Id_Sede."'>".$fila->Nombre_Sede."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <?php

                                     }
                                     else{
                                        echo "<input hidden type='text' name='sede' value='".$this->session->userdata('id_sede')."'>";
                                     }
                                     ?>
                                     <br>
                                      <div class="col-md-12" >
                                        <a onclick="cancelar()" style="margin:0 auto; font-weight:bold;color: white" class="btn btn-secondary"><i class="fa fa-close" style="margin:10px;"></i> Cancelar</a>
                                         <button style="margin:0 auto; font-weight:bold; background-color:#FF5252; color:white;" class="btn "><i class="fa fa-file" style="margin:10px;" ></i> Generar pdf</button>
                                     </div>
                                        </div>
                                       
                                     </div>
                                     
                                     
                                 </form>
                                     
                                 </div>
                                </div>
                                </div>
                                </div>
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

</script>