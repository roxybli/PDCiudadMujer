<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />

<?php
if (sizeof($Anuncios->result())==0) {
    echo '<script type="text/javascript">
                alert("No hay datos que mostrar !!!");
                self.location ="'.base_url().'Anuncios/"
                </script>';
}
?>

<main>
 <div class="page-content">
    <div class="row">
    <div class="container-fluid">
    <?php
if($this->session->userdata('login')){
?>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                         <li class="breadcrumb-item"><a href="javascript:void(0)">Noticias</a></li>
                    </ol>
                </div>
            </div>
            <div class="card TituloUser">
                <h4 class="responsive" style="color:white; font-weight:bold;"> Noticias del Módulo Autonomia Económica</h3>
                 </div> 

<?php
}
else
{
 ?> 
  <br>
 <div class="card TituloUser" style="height:60px;">
                <p class="responsive" style="color:white; font-weight:bold; font-size: x-large;"> Noticias del Módulo Autonomia Económica</p>
                 </div> 

 <?php
}
?>
                <div id="filtros" class="col-lg-22 card"> 
        <div align="right">
        <div class="col-lg-3">
                <a id="btnFecha" onclick="Fecha()" class="btn btn-warning" style="color:white;"><i class="fa fa-search" style="margin:10px;"></i>Búsqueda personalizada</a>
                </div></div>
                <div style="display:none;" id="DivFecha">
                   <form class="app-search" style="margin-left: 50px">
                    <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                        <li class=" search-box"> <a class="text-muted" href=""><i class=""></i></a>
                            <form class="app-search" ><label  ">Buscar por Titulo: </label>
                                <div class="input-group input-group-rounded has-success">
                                
                                <input  id="TituloB" name="TituloB" type="text" class="form-control" placeholder="Buscar por titulo de la publicacion"> <a class=""><i class=""></i></a></div>
                                <br> <label >Buscar por Institución: </label>
                                <div class="input-group input-group-rounded has-success">
                               
                                <select class="form-control" id="Institucion" name="Institucion" type="text" >
                                     <option value="">Búsqueda por Institución</option>
                                    <?php foreach ($Instituciones->result() as $institucion) { ?>
                                        <option value="<?= $institucion->Pk_Id_Institucion ?>">
                                            <?= $institucion->Nombre_Institucion ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            </form>
                            </li>
                        </div> </div>
                     <form class="app-search" method="POST" action="<?= base_url()?>Anuncios/BuscarFecha">
                        <div class="row">
                        <div class="col-md-60" style="margin-left: 70px" >
                            <div class="input-group input-group-rounded has-success">
                        <label>Inserte la fecha de inicio</label>
                         <div class="input-group" >
                            <input type="date" name="FechaInicial" id="fechaInicial" class="form-control">
                        </div>
                        </div></div>
                        <div class="col-md-60"style="margin-left: 70px">
                            <div class="input-group input-group-rounded has-success">
                        <label>Inserte la fecha de fin</label>
                        <div class="input-group">
                            <input type="date" name="FechaFinal" id="fechaFinal" class="form-control">
                        </div> 
                        </div> 
                         </div> </div></div>
                         
                       <div class="row" align="right">
                        <div class="col-md-12" align="right" >
                            <a onclick="Cancel()" class="btn btn-secondary" style="margin:10px; color:white; "><i style="margin:10px; color: white" class="fa fa-close"></i>Cerrar</a>
                            <button class="btn btn-primary" style="margin:10px; color:white;"><i style="margin:10px;" class="fa fa-calendar"></i>Buscar fecha</button>
                        
                        </div>
                    </div>
                </form>
                    </form>
                     </div>
                </div>
                </div>
                </div>
                </div>
    <div class="row" id="DivBody">
          <?php
            foreach ($Anuncios->result() as $publicacion) {
                $fecha = new DateTime($publicacion->Fecha);
                 $fecha = $fecha->format("d-m-Y");
            ?>
        <div class="col-lg-12" >
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                  <div class="sl-item">
                                        <div class="sl-right">
                                            <div><div  class="alert alert-success""><a href="#" class="link"><?php echo $publicacion->Titulo;?></a></div> 
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-xs-12"><img alt="user" style="height:200px;" class="img-responsive radius"  src="<?=base_url() ?>plantilla/img_anuncios/<?php 
                                                                    if($publicacion->Imagen==""){
                                                                        echo "LogoCiudadMujer.png";
                                                                    }
                                                                    else{echo $publicacion->Imagen;}?>"/></div>
                                                        <div class="col-md-9 col-xs-12 alert" >
                                                            <p style="color:#000;"> <?php echo $publicacion->Descripcion_Noticia;?></p>
                                                              
                                                            <span><p><i class="fa fa-user" style="margin:10px;"></i>Publicado por <?= $publicacion->Nombre?></p></span>
                                                            <span><p style="margin: 10px"><i class="fa fa-building"></i> Institución: <?php echo $publicacion->Nombre_Institucion;?></p></span>

                                                            <span><p><i class="fa fa-calendar" style="margin:10px;"></i>Fecha de publicacion <?= $fecha ?></p></span></p><br></span>
                                                            <a class="btn  btn-info" href="<?= base_url()?>Anuncios/VerAnuncios?id=<?= $publicacion->pk_Id_Anuncio?>" class="btn btn-info"><i class="fa fa-eye fa-2x" style="margin: 10px;"></i>Ver Publicación</a>
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
            <?php } ?>
            </div>           
            </div>
            </div>
            </div>          
            </div>
            </main>     
<hr>
<script type="text/javascript">
    
        $(document).on("ready", main);
    
    function main()
    {
        $('#TituloB').on("keyup", Buscar);
        $('#Institucion').on("change", Buscar);
    }
    function Fecha(){
        document.getElementById("DivFecha").style.display='block';
        document.getElementById("btnFecha").style.display='none';
    }
    function Cancel(){
        document.getElementById("DivFecha").style.display='none';
        document.getElementById("btnFecha").style.display='block';
        document.getElementById("fechaInicial").value='';
        document.getElementById("fechaFinal").value='';
    }
    function Buscar()
    {
        buscarNombre = $('#TituloB').val();
        buscarInstitucion = $('#Institucion').val();
        valor1=buscarNombre;
        $.ajax({
            url:"BuscarPor",
            type:"POST",
            data:{buscar:valor1, institucion: buscarInstitucion},
            success:function(respuesta){
                var registros = eval(respuesta);
                var html ="";

                 if(registros.length>0){
                    for (var i = 0; i < registros.length; i++) {

                        html+='<div class="col-lg-12"><div class="card"><div class="tab-content"><div class="tab-pane active" id="home" role="tabpanel"><div class="card-body"><div class="profiletimeline"><div class="sl-item"><div class="sl-right"><div><div  class="alert alert-success""><a href="#" class="link">'+registros[i]['Titulo']+'</a></div> <div class="m-t-20 row"> <div class="col-md-3 col-xs-12">';
                        if(registros[i]['Imagen']==""){

                            html+='<img alt="user" style="height:200px;" class="img-responsive radius"  src="<?=base_url() ?>plantilla/img_anuncios/LogoCiudadMujer.png"/>';

                        }
                       else{
                            html+='<img alt="user" style="height:200px;" class="img-responsive radius"  src="<?=base_url() ?>plantilla/img_anuncios/'+registros[i]['Imagen']+'"/>';
                        }

                       html+='</div><div class="col-md-9 col-xs-12 alert" ><p style="color:#000;"> '+registros[i]['Descripcion_Noticia']+'</p><span><p><i class="fa fa-check" style="margin:10px;"></i>Publicado por '+registros[i]['Nombre']+'<span ><p><i class="fa fa-calendar" style="margin:10px;" id="fecha"></i>Fecha de publicacion '+registros[i]['Fecha']+'</p><br></span></p><br></span><a class="btn  btn-info" href="<?= base_url()?>Anuncios/VerAnuncios?id='+registros[i]['pk_Id_Anuncio']+'" style="color:white;">Leer mas...</a></div></div></div></div></div></div></div></div></div></div></div>';
                    }
                }
                else{
                    html+='<label class="text-danger" style="margin-left:20px; font-size: Medium">No hay coicidencias</label>';
                }
                document.getElementById('DivBody').innerHTML=html;
            }
        });
    }
    $.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
                };
    $('#fecha').datepicker({
                format: 'dd-mm-y',
                language:'es',

            });
    $('#fechaInicial').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',
            });
    $('#fechaFinal').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',
            });
    </script> 