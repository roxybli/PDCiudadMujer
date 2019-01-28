<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans+Condensed:300|Oswald|Sawarabi+Mincho" rel="stylesheet">
<div class="container-fluid">
    <?php
        foreach ($Guia->result() as $GuiaU) {
            $fecha = new DateTime($GuiaU->Fecha_Publicacion);
                                    $fecha = $fecha->format("d-m-Y");
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-title TituloUser">
                            <h3 class="responsive" style="color:white; font-weight:bold;">
                                <?php echo $GuiaU->Titulo_Guia;?></h3>       
                        </div>
                        
                        <div class="card-body">

                            <div class="profiletimeline">

                                  <div class="sl-item">
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                        <div class="col-md-11 col-xs-12 contenido ">
                                                        <div class="DivDescarga row">
                                                             <p><?php echo $GuiaU->Descripcion_Guia;?></p>
                                                        </div><br><br>
                                                        <div class="row" align="center"> 
                                                            <img  style="width:720px; margin-left: 150px" align="center" src="<?= base_url()?>plantilla/Documentos/<?= $GuiaU->Imagen?>">
                                                        </div><br><br>
                                                            <div class="DivDescarga row contenido" >
                                                             <?php echo $GuiaU->Contenido;?></div><br>
                                                        <div class="DivDescarga row" align="center">
                                                        <?php
                                                        if($GuiaU->Tipo_publicacion=="Documento"){
                                                            echo '<a href="'.base_url().'plantilla/Documentos/'.$GuiaU->Documento_Guia.'" class ="btn btn-info btn-md " style="color:white; padding:25px; padding-top:30px; target="_blank""><i class="fa fa-download fa-2x" ></i> Descargar Documento</a>';

                                                        }
                                                        else if($GuiaU->Tipo_publicacion=="Video"){
                                                           
                                                            echo "<iframe style='margin-left:200px' width='570' height='415' src='https://www.youtube.com/embed/". $GuiaU->Video_Multimedia."?rel=0' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";

                                                        }

                                                        ?>
                                                       
                                                        </div><br><br>
                                                         <div>
                                                            <div>
                                                                 <span ><p ><i class="fa fa-user" style="margin:10px; "></i>Publicado por: <?= $GuiaU->Nombre?>
                                                                 <span><p ><i class="fa fa-calendar" style="margin:10px; "></i>Fecha de publicacion: <?= $fecha?></p><br></span></p><br></span>
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