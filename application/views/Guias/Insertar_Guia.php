
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<!-- Include Editor style. -->
           <!-- Container fluid  -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" ><div class="card TituloUser">
                                <h3 class="responsive" style="color:white; font-weight:bold;">Insertar Nueva Publicación</h3>
                                </div>
                                <form method="post"  action="<?= base_url() ?>Guias/guardar_multimedia" enctype="multipart/form-data" form="formAnuncio" id="formAnuncio">
                                    <div class="form-group">
                                    <div class="form-body">
                                        <div class="card">
                                            <div class="card-title">
                                                Selecione una opción
                                            </div>
                                            <div class="card-body">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group  has-success">
                                                    <input type="radio"  id="Rvideo" name="tipo" onclick="MostrarDiv()"  value="Video">
                                                    <label class="control-label" >Video</label>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group  has-success">
                                                    <input type="radio" name="tipo" onclick="MostrarDiv()" id="Rdocumento" value="Documento">
                                                    <label class="control-label">Documento</label>
                                                </div>
                                            </div>  
                                        </div>     
                                        </div>
                                        </div>
                                        <div class="card"  id="DivForm" style="display:none;">
                                            <div class="card-title">
                                                <h4 class="card-title">Inserte los siguientes campos</h4>
                                                <hr>
                                            </div>
                                            <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                <label class="control-label">Inserte el titulo de la publicación</label>
                                                    <input type="text" name="Titulo" class="form-control" required="true">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                <label class="control-label">Inserte una descripción para la publicación</label>
                                                    <input type="text" name="Descripcion" class="form-control" required="true">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                <label class="control-label">Seleccione una fecha de publicación</label>
                                                    <input type="text" id="fecha1" name="Fecha1" class="form-control" required="true">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row" id="DivVideo">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="control-label ">Inserte el enlace del video</label>
                                                    <input type="text" id="txtVideo" name="Video" class="form-control" placeholder="Ej: https://www.youtube.com/watch?v=mfJhMfOPWdE">
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row" id="DivDoc">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                <a onclick="Documentos()" class="btn btn-flat btn-success" ><i class=" fa fa-file" style="color:white; margin:0 5px 0 0;"></i><span style="color:white;">Subir Documento</span></a>
                                                    <input type="file" hidden id="documento" name="Documento" class="form-control" >
                                                    <div id="descripcion" class="form-group  has-warning"> 
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Seleccionar una imagen de 720*540 </label>
                                            </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <a onclick="SubirImg()" class="btn btn-info btn-medium" style="color:white; padding:0 25 0 25;"><i class="fa fa-upload fa-2x" style="margin-right:10px;"></i>Subir Imagen</a>
                                                                <input required  hidden type="file" name="imagenN" id="imagenN" change="filePeview(this)">
                                                        </div>
                                                    </div>  
                                                </div>
                                            <div class="col-md-4" id="mostrarI">
                                                <img src="<?=base_url()?>plantilla/images/picture.png">
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                        <label class="control-label">A continuación se muestra una area para digitar el contenido que acompañe la publicación</label>
                                         <textarea id="Contenido" name='Contenido' class=" form-control textarea_editor form-control" rows="15" placeholder="Enter text ..." style="height:450px">
                                         </textarea>
                                         </div>
                                         </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                   <button hidden name="BotonEnv" class="btn-md  btn btn-success" value="Publicar" id="Publicar" name="Publicar">Publicar</button>
                                                </div>

                                            </div>   
                                                
                                            </div> 
                                             <div class="row" align="right">
                                                        <div class="col-md-12" align="right" >
                                                        <a href="<?= base_url()?>Guias/Gestionar" style="color:white;" class="btn btn-secondary"><i class="fa fa-times-circle f-s-20" style="margin:10px;"></i>Cancelar</a>  
                                                        <a style="color:white;" id="Enviar" name="Enviar"  class="btn btn-primary"><i class="fa fa-share-square-o f-s-20" style="margin:10px;"></i>Publicar</a>
                                                            
                                                        </div>
                                                        </div> 
                                        </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
<script type="text/javascript">
    $.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
                };
    $('#fecha1').datepicker({
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
function MostrarDiv(){

    if(document.getElementById('Rvideo').checked==true){
        //alert('Hola');
        toastr.success('Formulario habilitado para registrar video','Video',{
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-left",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": true
    })
        document.getElementById('DivForm').style.display= 'block';
        document.getElementById('DivVideo').style.display= 'block';
        document.getElementById('DivDoc').style.display= 'none';
        
    }
    else if (document.getElementById('Rdocumento').checked==true){
        //alert('HOla 2');
         toastr.info('Formulario habilitado para publicar documentos','Documentos',{
        "positionClass": "toast-bottom-right",
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    })
        document.getElementById('DivForm').style.display= 'block';
        document.getElementById('DivVideo').style.display= 'none';
        document.getElementById('DivDoc').style.display= 'block';
        //document.getElementById('Rvideo').checked=false;


    }
}
function Documentos(){
    document.getElementById('documento').click();
}
document.getElementById('documento').addEventListener('change', seleccionArchivo, false);
function seleccionArchivo(evt){
    var file = evt.target.files;
    var salida = [];
    var archivo = $("#documento").val();
    //extensionesPermitidas = new Array(".pdf", ".docx", ".pptx");
    extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();
    if(extension==".docx"|| extension== ".pdf" || extension== ".pptx" || extension== ".xls" || extension== ".doc"){
         // alert('la es'+extendion);
    for (var i = 0 , f; f = file[i]; i++) {
        
             salida.push('<label class="control-label">Nombre del archivo: '+f.name+'</label>');

         }
          document.getElementById('descripcion').innerHTML=salida;
    }
    else {
        //alert('error');
         sweetAlert("Accion no permitida", "Extension de archivo incompatible", "error");
         document.getElementById('descripcion').innerHTML='';
         $("#documento").val('');
    }
}
$('#Enviar').click(function(){
    var doc = $('#Documento').val();
    var video = $('#Video').val();
    if(doc ==""){
        if(video == ""){
             sweetAlert("Accion no permitida", "Debe agregar un documento o video", "error");
        }
        else {
            document.getElementById('Publicar').click();
        }
        }
    else{
        document.getElementById('Publicar').click();  
    }
});
/*
$('#BotonEnv').click(function(){
    alert('Error');
});*/

function SubirImg(){
    document.getElementById('imagenN').click();
}
$('#imagenN').change(function(){
    //filePreview(this);
    ValidarImagen(this);
});

function ValidarImagen(obj){
    var uploadFile = obj.files[0];
    if (!window.FileReader) {
        sweetAlert("Accion no permitida", "El navegador no soporta la lectura de archivos", "error");
      
        return;
    }

    if (!(/\.(jpg|png|gif|jpeg)$/i).test(uploadFile.name)) {
        sweetAlert('Accion no permitida','El archivo a adjuntar no es una imagen','error');
        $("#imagenN").val('');
        document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';

    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 720 && this.height.toFixed(0) != 540) {
                //alert('Las medidas deben ser: 200 * 200');
                sweetAlert("Accion no permitida", "Tamanio de la imagen no permitida, el temaño permitido es de 720 pixeles de ancho y 540 de alto por favor verificar", "error");
                 $("#imagenN").val('');
                 document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';

            }
            else if (uploadFile.size < 20000)
            {
                sweetAlert("Accion no permitida", "El tamaño de la imagen no puede exeder los 200kb", "error");
                document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';
               
            }
            else {
                weetAlert("Imagen Correcta", "haz subido una Imagen", "success");
                document.getElementById('mostrarI').innerHTML='<img  src="'+URL.createObjectURL(uploadFile)+'"  width="200" height="200" id="vista" alt="Imagen a publicar"/>';                
            }
        };
        img.src = URL.createObjectURL(uploadFile);

        
    }                 
}

</script>