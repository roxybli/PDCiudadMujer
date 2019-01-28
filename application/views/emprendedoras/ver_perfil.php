<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
 <link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Acme|Gloria+Hallelujah|Indie+Flower" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Acme|Gloria+Hallelujah|Heebo|Indie+Flower|Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Acme|Gloria+Hallelujah|Heebo|Indie+Flower|Merienda|Poiret+One" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css?family=Acme|Gloria+Hallelujah|Heebo|Indie+Flower|Kalam|Merienda|Poiret+One" rel="stylesheet"> 
<!--FUnetes de rox-->
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 
  <link rel="stylesheet" href="<?= base_url()?>/plantilla/componentes/js/lightbox/css/lightbox.min.css">

    <?php
    foreach ($perfil->result() as $Perfil) {
        # code...
    }
    ?>
<div class="container-fluid contenido">
    <div class="row">
    <div class="card">
  <main class="mdl-layout__content">
    <div class="card TituloUser" style="height: 60px">
        <p  style="color:white; font-weight:bold; font-size: x-large;">Perfil Empresarial</p>  
     </div>
  <div class="page-content" style="margin-left: 60px">
   <div class="row">
    <div class="col-lg-4">
        <div class="card-two">
            <header>
                  <div class="avatar">
                <a href="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto_Perfil;?>" data-lightbox="example-set">
                <img style="height: 150px; width: 150px;"src="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto_Perfil;?>" alt="" class="img-thumbnail" style="height:200px";></a>
                 </div>
            </header>
                <div class="desc">
                  <br><br><br>  <h3 id="Negocio"><?php echo $Perfil->Nombre_Negocio?></h3>
                   <p style="font-family: 'Rubik', sans-serif;"> <?php echo $Perfil->Descripcion_Negocio?></p>
                </div>
                 <div class="contacts">
                 <?php
                 if($tipo=$this->session->userdata('login')){
                    if (sizeof($verC->result())!=0) {
                            echo '<a title="Ya me agregaste a tus contactos :)"><i class="fa fa-user"></i></a>';
                    }
                    else{
                        if (sizeof($Ver->result())!=0) {
                            echo '<a title="Ya me agregaste a tus contactos :)"><i class="fa fa-user"></i></a>';
                        }
                        else{
                            $IdContacto=$Perfil->FK_Usuaria;
                            $Nombre ="'".$Perfil->Nombre.$Perfil->Apellido."'";
                            $foto="'".$Perfil->Foto_Perfil."'";
                    ?>
                    <div id="add">
                    <a onclick="Agregar(<?php echo $IdContacto;?>, <?php echo $Nombre;?>, <?php echo $foto;?>)" title="Agregar a mis contactos"><i class="fa fa-user-plus"></i></a>
                        
                    </div>
                    <?php
                     } 
                    }
                    }
                    ?>
                    <a data-toggle="modal" data-target="#ModalMensaje" title="Enviar comentario a la emprendedora"><i class="fa fa-envelope" ></i></a>
                    <div  class="clrear">
                    </div>
                </div>
        </div>
            <div id="info">
                <div>
                    <img src="<?=  base_url()?>plantilla/images/ubicacion.png">Dirección <a style="display:inline-block; padding: 10px; color: #FF0000 "href=" <?php echo $Perfil->Direccion_Negocio?>" target="_blank"> Ver en google maps</a></div>
                    <div>
                    <img src="<?= base_url()?>plantilla/images/chica.png" style="display:inline-block; ">Propietaria:<p style="display:inline-block; padding: 5px; "> <?php echo $Perfil->Nombre.' '.$Perfil->Apellido?></p>
                    </div>
                     <div>
                    <img src="<?= base_url()?>plantilla/images/rubro.png" style="display:inline-block; ">Rubro:<p style="display:inline-block;"><?php echo $Perfil->Nombre_Rubro?></p>
                    </div>
                    <div>
                    <img src="<?= base_url()?>plantilla/images/sede.png" style="display:inline-block;">Sede: <p style="display:inline-block; padding: 5px; "> <?php echo $Perfil->Nombre_Sede?></p>
                    </div>
                    <div>
                    <img src="<?= base_url()?>plantilla/images/whatsapp.png" style="display:inline-block;">Teléfono:<p style="display:inline-block; padding: 5px; "><?php echo $Perfil->Telefono?></p>
                    </div>
                    <div>
                    <img src="<?= base_url()?>plantilla/images/sobre.png" style="display:inline-block; text-align: left; margin: 4px">Correo_electrónico:
                    <p style="display:inline-block;padding: 5px;">  <?php echo $Perfil->Correo?></p>
                    </div>
            </div>
    </div>
                <div class="col-lg-8"><br>  
        <h4 style="color:#0C853A">Descripcion del Negocio:</h3><hr>
                    <div>
                    <p style="display:inline-block; "><?php echo $Perfil->Des_Larga?></p>
                    </div><hr>
        <h4 style="color:#0C853A">Nuestras Especialidades:</h3><hr>
                    <div>
                    <p style="display:inline-block; ">- <?php echo $Perfil->Servicio1?></p>
                    </div>
<div>
                    <p style="display:inline-block; ">- <?php echo $Perfil->Servicio2?></p>
                    </div>  
<div>
                    <p style="display:inline-block; ">- <?php echo $Perfil->Servicio3?></p>
                    </div>  
<div>
                    <p style="display:inline-block; ">- <?php echo $Perfil->Servicio4?></p>
                    </div>  
<div>
                    <p style="display:inline-block; ">- <?php echo $Perfil->Servicio5?></p>
                    </div>  
<div>
                    <p style="display:inline-block; ">- <?php echo $Perfil->Servicio6?></p>
                    </div>  <hr>
            <h3 style="color:#0C853A" >Nuestro Trabajo</h1> <hr>
            <div class="container galeria">
        <articles class="row">
            <article class="col-md-3">
                <a href="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto1;?>" data-lightbox="example-set" data-title="<?php echo $Perfil->Pie1?>">
                <img src="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto1;?>" alt="" class="img-thumbnail"></a>
                <p></p>
            </article>
            <article class="col-md-3">
                <a href="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto2;?>" data-lightbox="example-set" data-title="<?php echo $Perfil->Pie2?>">
                <img src="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto2;?>" alt="" class="img-thumbnail"></a>
                <p></p>
            </article>
            <article class="col-md-3">
                <a href="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto3;?>" data-lightbox="example-set" data-title="<?php echo $Perfil->Pie3?>">
                <img src="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto3;?>" alt="" class="img-thumbnail"></a>
                <p></p>
            </article>
    </div>
        </div>  
    </div>
  </div></div></div>
    
    <script src="<?= base_url()?>plantilla/componentes/js/lightbox/js/lightbox.min.js"></script>
  <script>
      lightbox.option({
        'albumLabel': "Imagen %1 de %2"
      })
  </script>
    </main>
<!-- Modal edit -->
<div  class="modal fade" id="ModalMensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#000d5a; opacity:80;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white;">Enviame un Comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <!-- Bread crumb -->
            <form class="form-valide" action="<?=base_url()?>Mensajes/Guardar" method="POST" id="mensaje" name="mensaje">         
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                            <input type="text" hidden >   
                                <input type="text" class="form-control"  id="Emisor_Mensaje" name="Emisor_Mensaje" placeholder="Nombre" required onkeyup="this.value=NumText(this.value)">
                                <input type="text" hidden name="ID" id="ID" placeholder="contenido del mensaje" value="<?php echo $Perfil->FK_Usuaria;?>">
                            </div>
                         
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">  
                                <input type="text" class="form-control"  id="Contacto_Mensaje" name="Contacto_Mensaje" placeholder="Número de contacto"  onkeypress="return numeros(event, 'num')" required>
                            </div>
                            
                        </div>
                        </div>
                         <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group"> 
                                <textarea type="text" class="form-control" id="Contenido_Mensaje" name="Contenido_Mensaje" placeholder="Contenido" o required >
                                </textarea>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12" align="right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='<?=base_url()?>Emprendedoras'">Regresar</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" style="margin:5;" aria-hidden="true"></i> Enviar</button>
                        </div>
                </div>

            </form>
      </div>
      <div class="modal-footer" style="background-color:#acc90d; opacity:80;">
        
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
$(document).on("submit", "#mensaje", function(e){
    e.preventDefault();
    //alert($(this).serialize());
    id=$("#ID").val();
    emisor= document.getElementById("Emisor_Mensaje").value;
    contacto=$("#Contacto_Mensaje").val();
    contenido=$("#Contenido_Mensaje").val();
    guardar(id, emisor, contacto,contenido);
    /*$.ajax({
        url: "<?=base_url()?>Mensajes/Guardar",
        type: "POST",
        data: {datos:$(this).serialize()},
        success:function(data){
            alert(data);
        }
    });*/
});

function Agregar(id, nombre, foto){
    //alert(id+nombre+foto);
    $.ajax({
        url: '<?php echo base_url()?>Contactos/Guardar_Contacto',
        type: "POST",
        data: {Id:id, Nombre:nombre, Foto:foto},
        success:function(data){
            if(data==""){
               swal("Contacto agregado", "Usted agregó a este usuario a sus contactos", "success");
               document.getElementById("Emisor_Mensaje").value="";
               //$("#Contacto_Mensaje").val("");
               //$("#Contenido_Mensaje").val("");
               document.getElementById('add').innerHTML='<a title="Ya me agregaste a tus contactos :)"><i class="fa fa-user"></i></a>'
            }
            else
            {
                alert('error');
            }
        }
    });

}
    function guardar(id, emisor, contacto, contenido){
        //alert(contacto);
        $.ajax({
        url: '<?php echo base_url()?>Mensajes/Guardar',
        type: "POST",
        data: {Emisor_Mensaje:emisor, Contacto_Mensaje:contacto, Contenido_Mensaje:contenido, ID:id},
        success:function(data){
            if(data==""){
               swal("Mensaje enviado con exito", "Me comunicare contigo a tu número de contacto!!", "success");
               document.getElementById("Emisor_Mensaje").value="";
               $("#Contacto_Mensaje").val("");
               $("#Contenido_Mensaje").val("");
            }
            else
            {
                alert('error');
            }
        }
    });
    }
    function MostrarW(valor){
    swal("Contactanos en WhatsApp envia un mensaje al: ",valor)
    }
   
</script>