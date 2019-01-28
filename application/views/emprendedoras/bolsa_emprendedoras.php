 
 <script src="<?=base_url() ?>plantilla/mtl/material.min.js"></script>
 <link href="<?=base_url() ?>plantilla/mtl/material.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url()?>/plantilla/componentes/js/lightbox/css/lightbox.min.css">
<style type="text/css">
    #div12{
        margin: 40px;
            }
</style>
  <main class="mdl-layout__content">
    <div class="page-content">
     <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1" data-interval="2000"></li>
        <li data-target="#carousel-example-2" data-slide-to="2" data-interval="2000"></li>
       
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" height=h-100 src="<?= base_url()?>plantilla/Imagenes_Slider/ae_1.jpg" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" height=h-100 src="<?= base_url()?>plantilla/Imagenes_Slider/ae_11.jpg" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
           
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" height=h-300 src="<?= base_url()?>plantilla/Imagenes_Slider/ae_7.jpg" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>


         
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
</div>
<!--/.Carousel Wrapper-->
       <div id="filtros" class="col-lg-22 card">
       <div align="right">
        <div class="col-lg-3">
            <a onclick="Mostrar()" style="color:white; margin:10px;" class="btn btn-warning m-b-10 m-l-5"><i class="fa fa-filter" aria-hidden="true"></i>
              Filtros personalizados</a>
       </div></div>
           <div id="Filtros"  class="form-group has-success" style=display:none>                  
                 <div class="bordes">
                    <div class="row">
             <div class="col-lg-4">
                             <div class="input-group input-group">
                                <div class="form-group">
                                     <label class="control-label">Buscar por nombre del negocio</label>
                   <div class="input-group input-group-rounded has-success">
                  <input id="NombreB" name="NombreB" type="text" placeholder="Nombre del negocio" class="form-control" onkeyup="this.value=NumText(this.value)">
                  <span class="input-group-btn"><span class="btn btn-primary btn-group-right" type="submit"><i class="ti-search"></i></span></span>
                  </div>
                                </div>
                              </div>
                        </div>
                         <div class="col-lg-4">
                             <div class="input-group input-group">
                                <div class="form-group">
                                     <label class="control-label">Buscar por sede</label>
                                        <select class="form-control " name="Ssedes" id="Ssedes">
                                              <?php
                                                  echo "<option value=''>Seleccione una sede</option>";
                                                  foreach ($sedes->result() as $Sede) {

                                                   echo "<option value=\"".$Sede->Nombre_Sede."\">".$Sede->Nombre_Sede."</option>";
                                                  }
                                               ?>
                                            </select>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group input-group">
                                <div class="form-group">
                                     <label class="control-label">Buscar por rubro</label>
                                        <select class="form-control" name="Srubro" id="Srubro">
                                              <?php
                                                  echo "<option value=''>Seleccione un rubro</option>";
                                                  foreach ($rubros->result() as $rubro) {

                                                   echo "<option value=\"".$rubro->Nombre_Rubro."\">".$rubro->Nombre_Rubro."</option>";
                                                    }
                                               ?>
                                            </select>
                                </div>
                            </div>
                            
                        </div>
                       
                        
                    </div>
                     <div align="right">
                     <div class="row" align="right"style="margin-left: 1030px">
                            <a class="btn btn-secondary" id="close" style="color:white;"><i class="fa fa-close"></i> Cerrar filtros</a>
                        </div>
                     </div>
                 </div>
            </div>
        </div>

        <div class="container-fluid">
                
                <div class="row" id="DivRejillas">

                    <?php
                    $i=0;
                    //$arreglo = $Perfiles->fetch_assoc();
                    foreach ($Perfiles->result() as $perfil) {
                            //print_r($perfil);
                        //echo "{$clave}=>{$perfil}";
                         //echo "\$Perfiles[$i] => $perfil.\n";
                         //$i++;
                    ?>
                    <div id='div12' class='col-md-3'>
                    <p style='color:#000d5a;'></p>
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                          <div class="mdl-card__title">
                            <a href="<?php echo base_url()?>plantilla/img_perfil/<?= $perfil->Foto_Perfil?>" data-lightbox="example-set">
                          <img class="img-responsive radius img-thumbnail" style="height:250px;" src="<?= base_url()?>plantilla/img_perfil/<?= $perfil->Foto_Perfil?>"></a>
                          </div>
                          <div class="mdl-card__supporting-text">
                            <h2 class="mdl-card__title-text" style=""><?php echo $perfil->Nombre_Negocio?></h2>
                          </div>
                          <div class="mdl-card__actions mdl-card--border">
                          <span><i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo $perfil->Num_Visitas;?></span>
                            <a id="perfil" href="<?= base_url()?>Emprendedoras/ver_Perfil?id=<?php echo $perfil->FK_Usuaria?>&cantidad=<?php echo $perfil->Num_Visitas?>"  class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                             Ver perfil
                            </a>

                          </div>
                        
                        </div>

                    </div>
                    
                    <?php
                            }
                    ?>
                </div>
                </div>
                </div>
                

       
  </main>


<script type="text/javascript">
    //$(document).on("ready", Buscar(" "));
    $(document).on("ready", main);
    
    function main()
    {
        $('#NombreB').on("keyup", buscarN);
        $('#Ssedes').on("change", buscarN);
        $('#Srubro').on("change", buscarN);
        $("#close").on("click", function(){
            document.getElementById("Filtros").style.display='none';

        });
    }
    function Mostrar(){
        document.getElementById("Filtros").style.display='block';
    }
    function buscarN(){
        buscarNombre = $('#NombreB').val();
        buscarSede = $('#Ssedes').val();
        buscarRubro = $('#Srubro').val();
        //alert(buscarSede+buscarRubro);
        //alert(buscar);
        Buscar(buscarNombre, buscarSede, buscarRubro);
    }
    function Buscar(valor1, valor2, valor3)
    {
        $.ajax({
            url:"<?= base_url()?>Emprendedoras/BuscarPor",
            type:"POST",
            data:{buscar:valor1, buscarS:valor2, buscarR:valor3},
            success:function(respuesta){
                var registros = eval(respuesta);
                var html ="";
                if(registros.length>0){
                    for (var i = 0; i < registros.length; i++) {
                    //var r = "''<?= base_url()?>planilla/imagen"+registros[i]["Foto_Perfil"]+"''"
                    var imagen = registros[i]["Foto_Perfil"];
                    //alert(imagen)
                    var img2=imagen.split("/");
                    var imgN=img2[0]+"\\"+img2[1];
                    /*
                    rutaF=nueva+imgN;*/
                    //alert(rutaF);
                    html+='<div id="div12" class="col-lg-3"> <p style="color:#000d5a;"></p> <div class="demo-card-wide mdl-card mdl-shadow--2dp"><div class="mdl-card__title"><img class="images"  src="<?= base_url()?>plantilla/img_perfil/'+imagen+'"></div><div class="mdl-card__supporting-text"><h2 class="mdl-card__title-text">'+registros[i]["Nombre_Negocio"]+'</h2></div><div class="mdl-card__actions mdl-card--border"><span><i class="fa fa-eye" aria-hidden="true">'+registros[i]['Num_Visitas']+'</i></span><a id="perfil" href="<?= base_url()?>emprendedoras/ver_Perfil?id='+registros[i]['FK_Usuaria']+'&cantidad='+registros[i]['Num_Visitas']+'" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Ver perfil</a></div></div></div>';
                    imagen="";
                }
            }
                else{
                    html ='<div class="card alert alert-danger" ><div class"row"><label>No se encontraron coincidencias</label></div></div>'
                }
                document.getElementById('DivRejillas').innerHTML=html;
            }
        });
    }
</script>
