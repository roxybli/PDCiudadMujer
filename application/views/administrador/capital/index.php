<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
    <a href="<?=base_url() ?>capital/"><h3 class="text-primary"><i class="fa fa-home"></i></h3></a>
    </div>
     <div class="col-md-5 align-center">
       
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
<div class="card TituloUser" style="height: 60px" >
        <h3 class="responsive" style="color:white; font-weight:bold;"> Capital Inicial</h3>
     </div>
<div class="container-fluid bg" style="height:615px">
    <!-- Start Page Content -->
    <div class="row divCentrado">
        <div class="col-md-4 contenedorInventario" style="margin-top:50px">
                <a href="<?= base_url() ?>capital/negocios">
                    <div class="divColorVerde">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/Insumos.png" class="img img-rounded" height="140">
                    </div>
                        <div class="inventarioTitle">
                            <p><h3  class="text-center blanco"> Ver negocios disponibles </h3></p>
                        </div>
                </div>
                </a>
            </div>
        

        <div class="col-md-4 " style="margin-top:50px">
            <a href="<?=base_url() ?>capital/ingresarNegocio">
                <div class="divColorVerde">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/RecetaMas.png" class="img img-rounded" height="140">
                    </div>
                    <div class="inventarioTitle">
                        <p><h3  class="text-center blanco"> Ingresar nuevo negocio </h3></p>
                    </div>
            </div>
            </a>
        </div>
    
    <?php 
        if ($this->session->userdata('id_tipo') == 1 || $this->session->userdata('id_tipo') == 2) {
    ?>
        <div class="col-md-4" style="margin-top:50px">
            <a href="<?=base_url() ?>capital/gestionarNegocio">
                <div class="divColorVerde">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/Inventario.png" class="img img-rounded" height="140">
                    </div>
                    <div class="inventarioTitle">
                        <p><h3  class="text-center blanco"> Gestionar negocios </h3></p>
                    </div>
            </div>
            </a>
        </div>

        <?php } ?>

    </div>
  </div></div></div>
</div>