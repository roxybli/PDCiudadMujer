<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Mensajes</a></li>
                        <li class="breadcrumb-item active">Historial de mensajes</li>
                    </ol>
                    <a onclick=""></a>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <?php 
            foreach ($Mensajes as $msj) {}


            ?>
<div class="container-fluid">
    <div class="row">   <div class=" card TituloUser" style="height: 60px">
<h3  class="responsive" style="color:white; font-weight:bold;"><b> Historial de Mensajes</b></h3>
</div>
        <div class="col-lg-12" style="padding-top: 30px"> 
            <?php 
            $idE=$this->session->userdata('id');
            foreach ($Mensajes as $msj) {
                if($msj->Id_Emisor==$idE){

                    ?>
                    <!--EMISOR-->
                    <div class="row">
                        <div class=" card col-md-4 emisor" style="margin-left: 10px">
                            <?= $msj->Mensaje?>
                        </div>
                    </div>
                    <?php
                }
                else{
            ?>
                <div class="row">
                <div class="col-md-4"> 
                </div>
                <div class="col-md-4">
                 
                </div>
                <div class="card col-md-4 receptor">
                     <?= $msj->Mensaje?>
                </div> 
                </div>
                <?php
            }
                     }
                ?>
            </div>
        </div>
    </div>
</div>
