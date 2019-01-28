<?php //include_once"header.php"; ?>
            <!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-home"></i> Inventario</h3></a>
    </div>

    <div class="col-md-5 align-center">
       
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Inventario</a></li>
            <li class="breadcrumb-item active">Opciones</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->     <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
<div class="card TituloUser" style="height: 60px" >
        <h3 class="responsive" style="color:white; font-weight:bold;"> Opciones disponibles </h3>
     </div>
<div class="container-fluid bg" style="height:615px">
    <!-- Start Page Content -->
    <div class="row divCentrado">
        <div class="col-md-5 contenedorInventario" >
                <a href="<?=base_url() ?>insumos/insumosExistentes ">
                    <div class="divColorVerde">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/Insumos.png" class="img img-rounded" height="140">
                    </div>
                        <div class="inventarioTitle">
                            <p><h3  class="text-center blanco"> Insumos </h3></p>
                        </div>
                </div>
                </a>
            </div>
        

        <div class="col-md-5 ">
            <a href="<?=base_url() ?>inventario/producto_receta">
                <div class="divColorVerde">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/RecetaMas.png" class="img img-rounded" height="140">
                    </div>
                    <div class="inventarioTitle">
                        <p><h3  class="text-center blanco"> Ingresar receta de producto  </h3></p>
                    </div>
            </div>
            </a>
        </div>

    </div>

     <div class="row divCentrado">

        <div class="col-md-5 ">
            <a href="<?=base_url() ?>inventario/consultar_receta">
                <div class="divColorVerde">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/RecetasBuscar.png" class="img img-rounded" height="140">
                    </div>
                    <div class="inventarioTitle">
                        <p><h3  class="text-center blanco"> Consultar recetas   </h3></p>
                    </div>
            </div>
            </a>
        </div>

        <div class="col-md-5 ">
            <a href="<?=base_url() ?>inventario/productos_disponibles">
                <div class="divColorVerde">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/Inventario.png" class="img img-rounded" height="140">
                    </div>
                    <div class="inventarioTitle">
                        <p><h3  class="text-center blanco"> Inventario </h3></p>
                    </div>
            </div>
            </a>
        </div>
    </div>
  </div>
</div></div></div>
<!-- End Container fluid  -->
