<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
<div class="card">
<div><br>   
<div class="card TituloUser">   
 <h3 class="responsive" style="color:white; font-weight:bold;">Guias Multimedia</h3>  
</div> 
<div class="container-fluid">
    <?php
        foreach ($Guias_list->result() as $Guias) {
            $fecha = new DateTime($Guias->Fecha_Publicacion);
                                    $fecha = $fecha->format("d-m-Y");
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                  <div class="sl-item">
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-xs-12" style="padding: 20px;">
                                                      <iframe width="280" height="250" src="https://www.youtube.com/embed/<?php echo $Guias->Video_Multimedia?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                    </div>
                                                        <div class="col-md-9 col-xs-12 alert" style="padding-left: 30px">
                                                            <h1 style="color:#013ADF " > <?php echo $Guias->Titulo_Guia;?></h1><hr>
                                                            <p style="color:#000; text-align: justify;" ><?php echo $Guias->Descripcion_Guia;?></p>
                                                            <span><p><i class="fa fa-user" style="margin:10px;" style="color:#000;"></i>Publicado por: <?= $Guias->Nombre?><span><p><i class="fa fa-calendar" style="margin:10px;"></i>Fecha de publicacion: <?= $fecha?></p></span></p></span>
                                                            <a href="<?= base_url()?>Guias/VerGuia?id=<?php echo $Guias->pk_Id_Guia?>" class="btn btn-info"><i class="fa fa-eye fa-2x" style="margin: 10px;"></i>Ver Publicación</a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
        </div> 
        <?php } ?>
    </div>
<hr>
</div>