<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cloud.tinymce.com/stable/tinymce.min.js" ></script>
<script type="text/javascript" src="<?= base_url()?>plantilla/componentes/js/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({ selector:'textarea' });
</script>
<?php

foreach ($Noticia->result() as $Noti) {
    # code...
}
?>
<!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url()?>Anuncios/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url()?>Anuncios/GestionarNoticias">Gestionar Noticias</a></li>
                        <li class="breadcrumb-item active">Editar Noticia</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card-title TituloUser" style="height: 60px">
                                    <h3 style="color:white; font-weight:bold;">Editar Noticia</h3>
                                </div>
                        <div class="card " >
                                
                                <div class="form-validation">
                                        <!-- Bread crumb -->
                                                    <form class="form-valide" method="POST" action="<?= base_url() ?>Anuncios/Editar" enctype="multipart/form-data" form="formAnuncio" id="formAnuncio">                                    
                                                        <div class="row ">

                                                         <div class="col-md-12">
                                                          <label style="color: #000000">Fecha de Pubicación</label>
                                                                <div class="form-group"  id="fecha1" >
                                                                   <div class='input-group' >
                                                                   <!--CAMPOS OULTOS-->
                                                                   <input hidden type="text" name="Imagen" value="<?= $Noti->Imagen?>">
                                                                   <input hidden type="text" name="Id" value="<?= $Noti->pk_Id_Anuncio?>">

                                                                        <input type='date' class="form-control" id="fecha" name="fecha" placeholder="Seleccione una fecha" required value="<?= $Noti->Fecha?>" />
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar">
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         <div class="col-md-12">
                                                                <label style="color: #000000">Titulo de Pubicación</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-name " name="titulo" placeholder="Titulo de la Noticia" onkeyup="this.value=NumText(this.value)" required value="<?= $Noti->Titulo?>"> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label style="color: #000000">Descripción de Pubicación</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-name " name="Descripcion_Noticia" placeholder="Descripcion de la Noticia" onkeyup="this.value=NumText(this.value)" required value="<?= $Noti->Descripcion_Noticia?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                   <label style="color: #000000">Institución</label>
                                                                   <div class="form-group">
                                                                       <div class="input-group">
                                                                           <select id="Institucion" name="Institucion" type="text" class="form-control" required>
                                                                               <option value="">Seleccionar Institución</option>
                                                                               <?php foreach ($Instituciones->result() as $institucion) { ?>
                                                                                   <option value="<?= $institucion->Pk_Id_Institucion ?>" <?= $Noti->Fk_Id_Institucion == $institucion->Pk_Id_Institucion ? 'selected' : '' ?>>
                                                                                       <?= $institucion->Nombre_Institucion ?>
                                                                                   </option>
                                                                               <?php } ?>
                                                                           </select>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                             <div class="col-md-12">
                                                                <label style="color: #000000">Contenido de Pubicación</label>
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <textarea rows="8" cols="80" class=" form-control  form-control" rows="15" style="height:300px" type="text" class="form-control" id="val-name " name="contenido"  onkeypress="this.value=NumText(this.value)"placeholder="Descripción o contenido" required>
                                                                            <?= $Noti->Contenido?>
                                                                        </textarea> 
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                            <div>
                                                            <label style="color: #000000">Imagen de Pubicación</label>

                                                           
                                                            </div>
                                                                <img style="margin:10px;" src="<?= base_url()?>plantilla/img_anuncios/<?= $Noti->Imagen?>">
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="col-md-4">
                                                                   <label style="color: #000000">Cambiar imagen(opcional)</label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                    <a onclick="SubirImg()" class="btn btn-info btn-medium" style="color:white; padding:0 25 0 25;"><i class="fa fa-upload fa-2x" style="margin-right:10px;"></i>Subir Imagen</a>
                                                                    <input  hidden type="file" name="imagenN" id="imagenN" change="filePeview(this)" >
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                             <div class="col-md-4" id="mostrarI">
                                                             <img src="<?=base_url()?>plantilla/images/picture.png">
                                                            </div>
                                                            </div>
                                                            <!--/span-->
                                                            <!--/span--> 
                                                        </div>
                                                        <div class="row" align="right">
                                                        <div class="col-md-12">
                                                        <a style="color:white;" href="<?=base_url() ?>Anuncios/GestionarNoticias" class="btn btn-secondary"><i class="fa fa-times-circle f-s-20" style="margin:10px;"></i>Regresar</a>  
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-share-square-o f-s-20" style="margin:10px;"></i>Editar</button>
                                                            
                                                        </div>
                                                        </div>
                                                        
                                                       
                                                    </form>
                                        <!-- End Bread crumb -->
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
<script type="text/javascript">
function SubirImg(){
    document.getElementById('imagenN').click();
}
function filePreview(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
           
            document.getElementById('mostrarI').innerHTML='<img  src="'+e.target.result+'"  width="200" height="200" id="vista" alt="Imagen a publicar"/>';
    }
    }
}
$('#imagenN').change(function(){
    //filePreview(this);
    ValidarImagen(this);
});

function ValidarImagen(obj){
    var uploadFile = obj.files[0];
    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|png|gif|jpeg)$/i).test(uploadFile.name)) {
        alert('El archivo a adjuntar no es una imagen');
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 720 && this.height.toFixed(0) != 540) {
                //alert('Las medidas deben ser: 200 * 200');
                sweetAlert("Accion no permitida", "Tamaño de la imagen tiene que ser de 720*540px", "error");
                 $("#imagenN").val('');
                 document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';

            }
            else if (uploadFile.size < 20000)
            {
                sweetAlert("Accion no permitida", "El tamaño de la imagen no puede exeder los 200kb", "error");
                document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';
               
            }
            else {
                 sweetAlert("Imagen Correcta", "haz subido una Imagen", "success");
                document.getElementById('mostrarI').innerHTML='<img  src="'+URL.createObjectURL(uploadFile)+'"  width="200" height="200" id="vista" alt="Imagen a publicar"/>';                
            }
        };
        img.src = URL.createObjectURL(uploadFile);

        
    }                 
}
$.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
                };
    $('#fecha').datepicker({
                format: 'yyyy-mm-dd',
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
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
            $( "#datepicker" ).datepicker( "option", "dateFormat", 'dd/mm/yy');    // Le pasamos el formato de la fecha
    });
</script>