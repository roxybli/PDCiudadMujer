<?php //include_once"header.php"; ?>
            <!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href=""><h3 class="text-primary"><i class="fa fa-home"></i></h3></a>
    </div>

    <div class="col-md-5 align-center">
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingresos y egresos</a></li>
            <li class="breadcrumb-item active">Opciones</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
<div class="card TituloUser" style="height: 60px" >
        <h3 class="responsive" style="color:white; font-weight:bold;"> Opciones disponibles </h3>
     </div>
<div class="container-fluid bg" style="height:615px">
    <!-- Start Page Content -->
    <div class="row divCentrado" style="padding-top: 40px">
        <div class="col-md-4 contenedorInventario" >
                <a href="<?=base_url() ?>controlie/procesarIE ">
                    <div class="divColorVerde" style="height:240px">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/ingreso_egresos.png" class="img img-rounded" height="140">
                    </div>
                        <div class="inventarioTitle" style="height:70px">
                            <p><h3  class="text-center blanco"> Procesar Ingresos y egresos </h3></p>
                        </div>
                </div>
                </a>
            </div>
        

        <div class="col-md-4 ">
            <a href="<?=base_url() ?>controlie/balances">
                <div class="divColorVerde" style="height:240px">
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/verBalancesV2.png" class="img img-rounded" height="140">
                    </div>
                    <div class="inventarioTitle" style="height:70px">
                        <p><h3  class="text-center blanco"> Ver balances  </h3></p>
                    </div>
            </div>
            </a>
        </div>

    

   
        <div class="col-md-4 ">
            <a href="<?=base_url() ?>controlie/resumenIE">
                <div class="divColorVerde" style="height:240px" >
                    <div class="inventarioIMG">
                        <img  src="<?= base_url()  ?>plantilla/images/card/balancesV.png" class="img img-rounded" height="140">
                    </div>
                    <div class="inventarioTitle" style="height:70px" >
                        <p><h3  class="text-center blanco"> Resumen de Ingresos y egresos  </h3></p>
                    </div>
            </div>
            </a>
        </div>
</div>
 </div></div></div>      
    
  
</div>
<!-- End Container fluid  -->
