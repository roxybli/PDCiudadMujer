     function mostrar(){
        document.getElementById('div_1').style.display = 'none';
        document.getElementById('div_2').style.display = 'block';
        document.getElementById('DivDatos').style.display = 'block';
		document.getElementById('DivDescripcion').style.display = 'none';
        document.getElementById('Div2Imagenes').style.display = 'none';
        document.getElementById('DivImagesGaleria').style.display = 'none';
     }
     function siguiente(){
            document.getElementById('div_1').style.display = 'none';
            document.getElementById('div_2').style.display = 'block';
            document.getElementById('DivDatos').style.display = 'none';
			document.getElementById('DivDescripcion').style.display = 'block';
            document.getElementById('Div2Imagenes').style.display = 'none'; 
            document.getElementById('DivImagesGaleria').style.display = 'none';       
     }
	 function siguiente2(){
        document.getElementById('div_1').style.display = 'none';
        document.getElementById('div_2').style.display = 'block';
        document.getElementById('DivDatos').style.display = 'none';
		document.getElementById('DivDescripcion').style.display = 'none';
        document.getElementById('Div2Imagenes').style.display = 'block';
        document.getElementById('DivImagesGaleria').style.display = 'none';
     }
	 
     function siguiente3(){
        document.getElementById('div_1').style.display = 'none';
        document.getElementById('div_2').style.display = 'block';
        document.getElementById('DivDatos').style.display = 'none';
		document.getElementById('DivDescripcion').style.display = 'none';
        document.getElementById('Div2Imagenes').style.display = 'none';
        document.getElementById('DivImagesGaleria').style.display = 'block';
     }
     function Verificar(){
        document.getElementById('div_1').style.display = 'none';
        document.getElementById('div_2').style.display = 'block';
        document.getElementById('DivDatos').style.display = 'block';
		document.getElementById('DivDescripcion').style.display = 'block';
        document.getElementById('Div2Imagenes').style.display = 'block';
        document.getElementById('DivImagesGaleria').style.display = 'block';
     }
     function Atras(){
        document.getElementById('div_1').style.display = 'block';
        document.getElementById('div_2').style.display = 'none';
		document.getElementById('DivDescripcion').style.display = 'none';
        document.getElementById('DivDatos').style.display = 'none';
        document.getElementById('Div2Imagenes').style.display = 'none';
     }
	 
     function SubirImgPerfil(){
    document.getElementById('imagenPerfil').click();
    }
    function SubirImg(v){
      if(v==1){
        document.getElementById('imagen1').click();
      }
      if(v==2){
        document.getElementById('imagen2').click();
      }
      if(v==3){
        document.getElementById('imagen3').click();
      }
    
    }
//Subida de Imagenes
$(document).ready(function(){
    $('#imagenPerfil').change(function(){
    fotoPerfil(this); });
     $('#imagen1').change(function(){
    ValidarImagen(this, 1); 
    });
    $('#imagen2').change(function(){
    ValidarImagen(this, 2); 
    });
    $('#imagen3').change(function(){
    ValidarImagen(this, 3); 
    });
    $('#telefono').mask("503-9999-9999");

    $("#FormPerfil").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    nombreN: "required",
                    rubro: "required",
					          desN: "required",
				          	servicio1: "required",
                    descripcionN: "required",
                    telefono: "required",
                    correo: "required",
                },
                messages: {
                    nombreN: "Inserte un nombre para su negocio",
                    rubro: "Seleccione un rubro para su negocio",
                    descripcionN: "Inserte un slogan para su negocio",
					desN: "Inserte una descripcion para su negocio",
                    correo: "Ingrese un correo para su negocio", 
					servicio1: "Ingrese al menos un servicio"
					
                },     
            });
    $("#btnEnviar").click(function(){
        document.getElementById('div_1').style.display = 'none';
        document.getElementById('div_2').style.display = 'block';
		document.getElementById('DivDescripcion').style.display = 'block';
        document.getElementById('DivDatos').style.display = 'block';
    });
});
function fotoPerfil(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarPerfil').innerHTML='<div class="ImgPerfil round-img"><img  src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/></div>';
            document.getElementById('botonesImage').style.display='block';
            document.getElementById('botonesImage2').style.display='block';
    }
    }
}
//este es el metodo para la segunda foto

function foto1(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarfoto1').innerHTML='<img class=" img-responsive radius"  src="'+e.target.result+'" id="vista1" alt="Imagen a publicar"/>';           
    }
    }
}
function foto2(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarfoto2').innerHTML='<img class=" img-responsive radius" src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
    }
    }
}

function foto3(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarfoto3').innerHTML='<img class=" img-responsive radius" src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
    }
    }
}

function ValidarImagen(obj, v){
    var uploadFile = obj.files[0];
    if (!window.FileReader) {
      sweetAlert("Accion no permitida", "El navegador no soporta la lectura de archivos", "error");
        
        return;
    }

    if (!(/\.(jpg|png|gif|jpeg)$/i).test(uploadFile.name)) {
        sweetAlert("Accion no permitida", "El archivo que intenta subir no es una imagen", "error");
    }
    else {
        var img = new Image();
        img.onload = function () {
            if (this.width.toFixed(0) != 720 && this.height.toFixed(0) != 540) {
                //alert('Las medidas deben ser: 200 * 200');
                sweetAlert("Accion no permitida", "Tamaño de la imagen no permitida", "error");
                // $("#imagen1").val('');
                 if(v==1){
                    $("#imagen1").val('');
                 }
                 if(v==2){
                    $("#imagen2").val('');
                 }
                 if(v==3){
                    $("#imagen3").val('');
                 }
                 //document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';

            }
            else if (uploadFile.size < 20000)
            {
                sweetAlert("Accion no permitida", "El tamaño de la imagen no puede exeder los 200kb", "error");
                //document.getElementById('mostrarI').innerHTML='<img src="<?=base_url()?>plantilla/images/picture.png">';
               //$("#imagen1").val('');
                 if(v==1){
                    $("#imagen1").val('');
                 }
                 if(v==2){
                    $("#imagen2").val('');
                 }
                 if(v==3){
                    $("#imagen3").val('');
                 }
            }
            else {

                 if(v==1){
                    document.getElementById('mostrarfoto1').innerHTML='<img class=" img-responsive radius" src="'+URL.createObjectURL(uploadFile)+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
                 }
                 if(v==2){
                    document.getElementById('mostrarfoto2').innerHTML='<img class=" img-responsive radius" src="'+URL.createObjectURL(uploadFile)+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
                 }
                 if(v==3){
                    document.getElementById('mostrarfoto3').innerHTML='<img class=" img-responsive radius" src="'+URL.createObjectURL(uploadFile)+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
                 }



                //document.getElementById('mostrarI').innerHTML='<img  src="'+URL.createObjectURL(uploadFile)+'"  width="200" height="200" id="vista" alt="Imagen a publicar"/>';                
            }
        };
        img.src = URL.createObjectURL(uploadFile);

        
    }                 
}