<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>insumos/insumosExistentes"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
     </div>

     <div class="col-md-5 align-center">
      
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Insumos</a></li>
            <li class="breadcrumb-item active">actualizar</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
                <!-- Start Page Content -->
    <div class="row ">
         <div class="card TituloUser" style="height: 60px">
                                    <h3 class="responsive" style="color:white; font-weight:bold;"> Datos del insumo</h3>
                                </div>
        <div class="col-sm-12">
            <div class="card">
                    <div class="card-title">
                        <h4>Datos del insumo</h4>
                    </div>
                    <div class="form-validation">
                            <!-- Bread crumb -->
                            <?php 
                                foreach ($datos->result() as $filaDato) {
                                }
                             ?>
                                        <form class="form-valide" action="<?= base_url() ?>/insumos/actualizarInsumo" method="post">                                    
                                            <div class="row ">
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="Insumo de tipo: <?= $filaDato->Nombre_Tipo?>" name="" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="Usuario: <?= $filaDato->Nom_User?>" name="" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Nombre del Insumo:</label>
                                                        <div class="input-group"> 
                                                            <input type="text" class="form-control" value="<?= $filaDato->Nombre_Insumo?>" name="nombreInsumo" onkeyup="this.value=NumText(this.value)" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Precio del Insumo:</label>
                                                        <div class="input-group">                                                      
                                                            <input type="text" class="form-control"   onkeypress="return numeros(event, 'num')" value="<?= $filaDato->Precio_Insumo?>" name="precioInsumo" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Existencia del Insumo:</label>
                                                        <div class="input-group">
                                                            <input type="text"  onkeypress="return numeros(event, 'num')" class="form-control" value="<?= $filaDato->Existencia_Insumo?>" name="existenciaInsumo" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Medida del Insumo:</label>
                                                        <div class="input-group">
                                                            <input type="text"  onkeypress="return numeros(event, 'num')" class="form-control" value="<?= $filaDato->Medida_Insumo?>" name="" readonly>
                                                            <input type="hidden" class="form-control" value="<?= $filaDato->PK_Id_Insumo ?>" name="idInsumo">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row" align="right">
                                            <div class="col-md-12" align="right" >
                                                <a style="color:white;" href="<?=base_url() ?>inventario/consultar_receta" class="btn btn-secondary"><i class="fa fa-times-circle f-s-20" style="margin:4px;"></i>Regresar</a>
                                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Editar </button></div></div>
                                        </form>
                            <!-- End Bread crumb -->

                    </div>
                    </div>
            </div>
        </div>
    </div>


