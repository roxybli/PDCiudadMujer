<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/consultar_receta"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
     </div>

     <div class="col-md-5 align-center">
      
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Recetas</a></li>
            <li class="breadcrumb-item active">actualizar</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
                <!-- Start Page Content -->
    <div class="row ">
        <div class="col-sm-12">
            <div class="card TituloUser" style="height: 60px">
            <h3 class="responsive" style="color:white; font-weight:bold;"> Datos de la receta</h3>
        </div>
            <div class="card">
                    <div class="card-title">
                        <h4>Datos de la Receta</h4>
                    </div>
                    <div class="form-validation">
                            <!-- Bread crumb -->
                            <?php 
                                foreach ($datos->result() as $filaDato) {
                                }
                             ?>
                                        <form class="form-valide" action="<?= base_url() ?>/inventario/actualizarReceta" method="post">                           
                                            <!--/row-->
                                            <div class="row ">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="Usuario: <?= $filaDato->Nom_User?>" name="" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Nombre de la Receta:</label>
                                                        <div class="input-group"> 
                                                            <input type="text" class="form-control" value="<?= $filaDato->Nombre_Producto?>" name="nombreProducto" onkeyup="this.value=NumText(this.value)" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group"><label style="color: #000000"> Precio de la Receta:</label>
                                                        <div class="input-group">               
                                                            <input type="text" class="form-control" onkeypress="return numeros(event, 'num')" value="<?= $filaDato->Precio_Producto?>" name="precioProducto" >
                                                            <input type="hidden" class="form-control" value="<?= $filaDato->PK_Id_Producto ?>" name="idProducto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <!--/row--><div class="row" align="right">
                                                        <div class="col-md-12" align="right" >
                                                <a style="color:white;" href="<?=base_url() ?>inventario/consultar_receta" class="btn btn-secondary"><i class="fa fa-times-circle f-s-20" style="margin:4px;"></i>Regresar</a>
                                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Actualizar </button></div></div>
                                        </form>
                            <!-- End Bread crumb -->

                    </div>
                    </div>
            </div>
        </div>
    </div>


