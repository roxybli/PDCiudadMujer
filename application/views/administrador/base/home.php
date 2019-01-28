<?php 
foreach ($num_user->result() as $n) {
}
foreach ($num_rubro->result() as $r) {
}
foreach ($TotalU->result() as $t) {
}
foreach ($Nus->result() as $ns) {
}
 ?>
<style type="text/css">
    .iconImage{
        display: inline-block;
    }
    .textIcon{
        display: inline-block;
        color: white;
        margin: 10px;
        font-weight: bold;
    }
    .CardItem a:hover{
        display: block;
        margin: 0px 40px;
       
    }
</style>
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Perfil</a></li>
                        <li class="breadcrumb-item active">Mi Perfil</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                            <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h5> <?= $r->Num?></h5>
                                    <p class="m-b-0">Rubro con más usuarias: <?= $r->Nombre_Rubro?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?= $t->Registro?></h2>
                                    <p class="m-b-0">Total de usuarias</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?= $ns->Registro?></h2>
                                    <p class="m-b-0">usuarias <?= $ns->Nombre_Sede?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2><?= $n->Numero_Usuarias_Nuevas?></h2>
                                    <p class="m-b-0">Nuevas usuarias</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Page Content -->
                <div class="row" id="MenuCard">
                    <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#1B5E20; color:white; height:100px;">
                                <a href="<?=base_url()?>Emprendedoras/verUsuarias">
                                <div>
                                    <img class="iconImage"  src="<?= base_url()?>plantilla/images/usuario.png">
                                    <h3 class="textIcon">Gestionar usuarias</h3>
                                </div>
                                </a> 
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#01579B; color:white; height:100px;">
                                <a href="<?=base_url() ?>capital/gestionarNegocio">
                                <div>
                                    <img class="iconImage" height="65px" src="<?= base_url()?>plantilla/images/tienda.png">
                                    <h3 class="textIcon">Gestionar Capital Inicial</h3>
                                </div>
                                </a>
                                
                            </div>
                    </div>
                    <div class="col-md-6">
                        
                            <div  class="CardItem card" style="background-color:#424242; color:white; height:100px;">
                                    <a href="<?=base_url() ?>Guias/Gestionar">
                                    <div>
                                        <img class="iconImage"  src="<?= base_url()?>plantilla/images/participacion.png">
                                        <h3 class="textIcon">Gestionar Guias Multimedia</h3>
                                    </div>
                                    </a>
                                    
                                </div>
                        
                            
                    </div>
                     <div class="col-md-6">
                            <div class="CardItem card" style="background-color:#546E7A; color:white; height:100px;">
                                <a href="<?=base_url() ?>Anuncios/GestionarNoticias">
                                <div>
                                    <img class="iconImage"  src="<?= base_url()?>plantilla/images/navegador.png">
                                    <h3 class="textIcon">Gestionar Noticias</h3>
                                </div>
                                </a>
                                
                            </div>
                    </div>
                </div>
            
            </div>
            <!-- End Container fluid  -->
