<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cloud.tinymce.com/stable/tinymce.min.js" ></script>
<script type="text/javascript" src="<?= base_url()?>plantilla/componentes/js/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({ selector:'textarea' });
</script>
<?php
?>
<!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"><a href="<?= base_url()?>Anuncios/">Inicio</a></h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url()?>Anuncios/">Inicio</a></li>
                        <li class="breadcrumb-item active">Publicar Noticias</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
                           <div class="card TituloUser" style="height: 60px">
                                <h3 class="responsive" style="color:white; font-weight:bold;">Publicar Noticias</h3>
                                </div>
                        <div class="card">
                                <div class="form-validation">
                                     <p class="text-danger"><b>Indicaciones</b><br>(*) Todos los campos son requeridos.</p>
                                        <!-- Bread crumb -->
                                                    <form class="form-valide" method="POST" action="<?= base_url() ?>Anuncios/guardar" enctype="multipart/form-data" form="formAnuncio" id="formAnuncio">                                    
                                                        <div class="row ">

                                                         <div class="col-md-12">
                                                                <div class="form-group"  id='datetimepicker9' >
                                                                    <label style="color: #000000"> Fecha de publicación:</label>
                                                                   <div class='input-group' >           
                                                                    <input type='date' class="form-control" id="fecha" name="fecha" placeholder="Seleccione una fecha"  required />
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar">
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         <div class="col-md-12">
                                                                <div class="form-group">
                                                                     <label style="color: #000000">Titulo de la Noticia:</label>
                                                                    <div class="input-group">
                                                                        <input  type="text" id="val-name " name="titulo" placeholder="Titulo de la Noticia" class="form-control" onkeyup="this.value=NumText(this.value)" required></input> 
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
                                                                                   <option value="<?= $institucion->Pk_Id_Institucion ?>">
                                                                                       <?= $institucion->Nombre_Institucion ?>
                                                                                   </option>
                                                                               <?php } ?>
                                                                           </select>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                     <label style="color: #000000"> Descripción de la Noticia:</label>
                                                                    <div class="input-group">
                                                                        <input type="text"  id="val-name " name="Descripcion_Noticia" placeholder="Descripcion de la Noticia" class="form-control" onkeyup="this.value=NumText(this.value)" required></input> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-12">
                                                                <div class="form-group">
                                                                     <label style="color: #000000">Contenido de la Noticia:</label>
                                                                    <div class="input-group">
                                                                        <textarea rows="8" cols="80" class=" form-control  form-control" rows="15" style="height:300px" type="text" class="form-control" id="val-name " name="contenido" placeholder="Contenido"     onkeypress="this.value=NumText(this.value)" required></textarea> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="col-md-4">
                                                                   <label style="color: #000000">Seleccionar una imagen de 720*540 px</label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                    <a onclick="SubirImg()" class="btn btn-info btn-medium" style="color:white; padding:0 25 0 25;"><i class="fa fa-upload fa-2x" style="margin-right:10px;"></i>Subir Imagen</a>
                                                                    <input  hidden type="file" name="imagenN" id="imagenN" change="filePeview(this)">
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
                                                        <div class="col-md-12" align="right" >
                                                        <a style="color:white;" href="<?= base_url()?>Anuncios/" class="btn btn-secondary"><i class="fa fa-times-circle f-s-20" style="margin:10px;"></i>Regresar</a>  
                                                        <button type="submit" onclick="AccionBoton2('<?= base_url() ?>Anuncios/guardarBorrador')" class="btn btn-primary"><i class="fa fa-pencil-square-o  f-s-20" style="margin:10px;"></i>Guardar Borrador</button>
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-share-square-o f-s-20" style="margin:10px;"></i>Publicar</button>                                                        
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
function AccionBoton(action){
    document.getElementById('formAnuncio').action= action;    
    }

    function AccionBoton2(action){
        document.getElementById('formAnuncio').action= action;
        document.getElementById('fecha').removeAttribute("required");
        document.getElementById('val-name').removeAttribute("required");
        document.getElementById('val-name2').removeAttribute("required");
        document.getElementById('val-name3').removeAttribute("required");
       } 

        function SubirImg(){
         document.getElementById('imagenN').click();
        }
        function filePreview(input){
        if(input.files && input.files[0]){
          var reader = new FileReader(); 
          reader.readAsDataURL(input.files[0]);
          reader.onload =function(e) {
            document.getElementById('mostrarI').innerHTML='<img  src="'+e.target.result+'"  width="150" height="200" id="vista"  alt="Imagen a publicar"/>';
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
        sweetAlert("Accion no permitida","El navegador no soporta la lectura de archivos","error");
        return;
    }

    if (!(/\.(jpg|png|gif|jpeg)$/i).test(uploadFile.name)) {
         sweetAlert("Accion no permitida","El archivo a adjuntar no es una imagen","error");
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
                format: 'd-m-y',
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