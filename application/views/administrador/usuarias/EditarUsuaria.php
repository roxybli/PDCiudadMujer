 <script src="<?=base_url() ?>plantilla/mtl/material.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 <!-- Bread crumb -->
<?php

foreach ($info->result() as $Info) {
    # code...
}

?>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Editar usuaria</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card TituloUser" style="height: 60px">
                                  <h3 class="responsive" style="color:white; font-weight:bold;">Editar Usuaria</h3>
                                </div>
                        <div class="card">
                                
                                <div class="form-validation" style="margin:15px;">
                                        <!-- Bread crumb -->
                                          
                                    <p class="text-danger"><b>Indicaciones</b><br>(*) Todos los campos son requeridos.</p>
					                                <form  action="<?=base_url()?>Emprendedoras/EditarUsuaria" method="post" id="FormUsuarias" class="FormUsuarias">

                                                        <div class="row ">
                                                          <!--/span-->
                                                          <div class="col-md-12">
                                                          <div class="form-group">
                                                                    <div class="input-group">
                                                                    <input type="text" hidden name="id_usuaria" value="<?= $Info->pk_Id_Usuaria?>">
                                                                        <select class="form-control" id="sede" name="sede">
                                                                        <option class="seleccionada" value="<?= $Info->FK_Sede;?>"><?= $Info->Nombre_Sede?></option>
                                                                            <?php
                                                                                
                                                                                foreach ($con2->result() as $fila) {

                                                                                  echo "<option value=".$fila->pk_Id_Sede.">".$fila->Nombre_Sede."</option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>  
                                                          </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiquetaa">Editar el nombre de la usuaria</label>
                                                                    <div class="input-group">
                                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?= $Info->Nombre?>" onkeyup="this.value=NumText(this.value)" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiquetaa">Editar el tipo de usuaria</label>
                                                                    <div class="input-group">
                                                                        <select class="form-control" id="tipo" name="tipo" required>
                                                                        <option class="seleccionada" value="<?= $Info->fk_Tipo_Usuaria?>"><?= $Info->Tipo?></option>
                                                                            <?php
                                                                                echo "";
                                                                                foreach ($con->result() as $fila) {

                                                                                  echo "<option value=".$fila->pk_Id_Tipo.">".$fila->Descripcion."</option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                          
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiquetaa">Editar el apellido de la usuaria</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?= $Info->Apellido?>" onkeyup="this.value=NumText(this.value)" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiquetaa">Editar Nombre de Usuaria para iniciar en la Plataforma</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="nomuser" name="nomuser" placeholder="Nombre de usuario" value="<?= $Info->Nom_User?>" onkeyup="this.value=NumText(this.value)" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiquetaa">Editar la contraseña para la usuaria</label>
                                                                    <div class="input-group">
                                                                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" value="<?= $Info->Pass?>" onkeyup="this.value=NumText(this.value)" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiquetaa">Editar la direccion de la usuaria</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="<?= $Info->Direccion?>" onkeyup="this.value=NumText(this.value)" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiquetaa">Editar el número de teléfono de la usuaria</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="<?= $Info->Telefono?>"  onkeypress="return numeros(event, 'num')" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiquetaa">Editar el número de DUI de la usuaria</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="dui"  name="dui" placeholder="# DUI" value="<?= $Info->Dui?>"  onkeypress="return numeros(event, 'num')" required>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="row ">

                                                     <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <div class="input-group">
                                                                                        <input type="hidden"  class="form-control"  id="pass4" name="pass4"  value="<?php  echo $Info->pk_Id_Usuaria;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                            <!--/span-->
                                                       
                                                        <!--/row-->
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-md-12" align='right'>
                                                        <a href="<?= base_url()?>Emprendedoras/VerUsuarias" style="color:white;" class="btn btn-secondary "><i class="fa fa-times-circle f-s-20" style="margin:10px;"></i>Regresar</a>  
                                                        <button id="btnGuardar" class="btn btn-primary"><i class="fa fa-floppy-o" style="margin:10px;"></i> Guardar</button>
                                                        </div>
                                                        </div>
                                                    </form>
							            <!-- End Bread crumb -->
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
<script type="text/javascript">
    $(document).on("ready", function(){
        $('#nomuser').on("change", verificar);
    });
    function verificar(){
       nombre = $('#nomuser').val();
       $.ajax({
            url:"VerificarNomUser",
            type:"POST",
            data:{buscar:nombre},
            success:function(respuesta){
                var registro = eval(respuesta);
                if(registro.length>0){
                    $('#pass').val('');
                    swal("Error","El nombre de usuario ya existe","error");
                    //alert("El nombre de usuario ya existe");
                    document.getElementById('btnGuardar').disabled=true;
                     $('#nomuser').addClass('caja');
                }
                else{
                    document.getElementById('btnGuardar').disabled=false;
                    $('#nomuser').removeClass('caja');
                }

            }
        });

    }
</script>