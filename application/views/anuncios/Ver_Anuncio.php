<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans+Condensed:300|Oswald|Sawarabi+Mincho" rel="stylesheet">
<div class="container-fluid">
    <?php
if($this->session->userdata('login')){


?>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"><a class="text-primary" href="<?= base_url()?>Anuncios/">Inicio</a></h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url()?>Anuncios/">Inicio</a></li>
                         <li class="breadcrumb-item"><a href="javascript:void(0)">Noticias</a></li>
                    </ol>
                </div>
            </div>

<?php
}
   
        foreach ($Noticia->result() as $noti) {
            $fecha = new DateTime($noti->Fecha);
                                    $fecha = $fecha->format("d-m-Y");
    ?>
    <div class="row">
        <div class="col-lg-12"> 

            <div class="card TituloUser " style="height: 80px; margin-top: 20px">
                            <p class="responsive" style="color:white; font-weight:bold; font-size: x-large;">
                                <?php echo $noti->Titulo;?></p>
                        </div>
            <div class="card">
                            <div class="profiletimeline">
                                                        <div class="col-md-11 col-xs-12 contenido" style="margin-top: 20px">
                                                       <div> <p><?php echo $noti->Descripcion_Noticia;?></p></div><br>
                                                        <div class="DivDescarga">
                                                        <img  style="width:720px; margin-left: 150px" align="center" src="<?= base_url()?>plantilla/img_anuncios/<?php echo $noti->Imagen;?>">
                                                         </div><br>
                                                            <div >   <?php echo $noti->Contenido;?>
                                                        </div> <div><br><br>
                                                        <div> 
                                                            <span ><p  text-align: left;" ><i class="fa fa-user"></i> Publicado por: <?= $noti->Nombre?></p></span>        
                                                            <span> <p  ><i class="fa fa-building" ></i> Institución: <?= $noti->Nombre_Institucion?></p>
                                                         <span><p  text-align: left; "><i class="fa fa-calendar" ></i> Fecha de publicación: <?= $fecha?></p></span>  
                                                         </div></div>
                                                </div>
                                           
                                    </div>
                                </div>
        </div>
<script type="text/javascript">
    $(document).ready(function(){
    });
</script>
            
        <?php } ?>
    </div>
<hr>
