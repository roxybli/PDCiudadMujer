<script>try{Typekit.load({ async: true });}catch(e){}</script>

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>

<link rel='stylesheet prefetch' href='<?= base_url()?>plantilla/componentes/css/chatU.css'>
<div style="padding-top: 30px">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
<div class="card TituloUser" >
<h2  class="responsive" style="color:white; font-weight:bold; font-size: large;"> Chat de Emprendedoras </h2>
</div>
<div style="padding: 15px; padding-left: 5px; width: auto;">
<div id="frame" style="width: auto;">
	<div id="sidepanel">
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="<?= base_url()?>plantilla/images/chica.png" class="online" alt="" />
				<p style="color: white"><?php echo $this->session->userdata('nombre')?></p>
				
				<div id="status-options">
					<ul>
						<li id="status-online" class="active"><p style="margin: 0px">En Linea </p><span class="status-circle" style="margin: 5px"></span></li>
						<li id="status-away"><p style="margin: 0px">Ocupado  <span class="status-circle" style="margin: 5px"></span></p></li>
						<li id="status-busy"><p style="margin: 0px">Desconectado  <span class="status-circle"style="margin: 5px"></span> </p></li>
					</ul>
				</div>
			</div>
		</div>
	
		<div id="contacts" >
			<ul>
			<?php
			foreach ($conta->result() as $info) {
				# code...
				$id = $info->PK_Id_Contacto;
				$idEmi = $this->session->userdata('id');
				$idRec = $info->Id_User_Contacto;
				$NombreContacto="'".$info->Nombre_Contacto."'";
				$foto = "'".$info->Foto_Contacto."'";
			?>
				<li class="contact" >
					<a onclick="GuardarMsj(<?= $id?>, <?= $idEmi?>,<?= $idRec?>, <?= $NombreContacto?>, <?= $foto?>)">
						<div class="wrap">
							
							<img src="<?php echo base_url().'plantilla/img_perfil/'.$info->Foto_Contacto?>" alt="" />
							<div class="meta">
								<p class="name" style="color: white"><?= $info->Nombre_Contacto?></p>
								<!--<p class="preview">You just got LITT up, Mike.</p>-->
							</div>
						</div>
					</a>
				</li>
				<?php
				}
				foreach ($contaA->result() as $infoA) {
					# code...
					$id = $infoA->PK_Id_Contacto;
					$idEmi = $this->session->userdata('id');
					$idRec = $infoA->FK_Id_Usuaria;
					$NombreContacto="'".$infoA->Nombre."'";
					$foto = "'".$infoA->Foto_Perfil."'";
				?>
				<li class="contact">
					<a onclick="GuardarMsj(<?= $id?>, <?= $idEmi?>,<?= $idRec?>, <?= $NombreContacto?>, <?= $foto?>)">
						<div class="wrap">
							<span class="contact-status online"></span>
							<img src="<?php echo base_url().'plantilla/img_perfil/'.$infoA->Foto_Perfil?>" alt="" />
							<div class="meta">
								<p class="name"><?= $infoA->Nombre?></p>
							</div>
						</div>
					</a>
				</li>
				<?php
				}
			?>
			</ul>
		</div>
		<div id="bottom-bar" style="background: gray">			
		</div>
	</div>
	<div class="content">
		<div class="contact-profile" align="left" style="width: auto; text-align: left;">
			<img id="imgU" src="<?= base_url()?>plantilla/images/7.png" alt="" />
			<p id="nombreContacto">Seleccione un chat</p>
		</div>
		<div class="messages" style="width: auto;">
			<ul id="lisMsj">
			</ul>
		</div>
		<div>
			<input hidden type="text" id="Id_Contacto" name="Id_Contacto">
			<input hidden type="text" id="id_emisor" name="id_emisor">
			<input hidden type="text" id="id_receptor" name="id_receptor">
		</div>
		<div class="message-input">
			<div class="wrap">
			<input type="text" placeholder="Escriba un mensaje..."  onkeyup="this.value=NumText(this.value)" />
			<button class="submit "style="border-radius: 3px; height: 50px; padding: 0px"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script >
$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});

$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");
	
	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};
	
	$("#status-options").removeClass("active");
});

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	idC=$('#Id_Contacto').val();
	idEmi=$('#id_emisor').val();
	idRe=$('#id_receptor').val();
	if(idC==""){
		toastr.warning('Selecciona un Chat','Oooops!!!',{
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
	}
	else{
		$.ajax({
            url:"<?php echo base_url()?>Mensajes/InsertarMensajesContactos",
            type:"POST",
            data:{IdC:idC, IdEmi:idEmi, IdRe:idRe, msj:message},
            success:function(respuesta){
            	var registros = eval(respuesta);
            	if(registros.length>0)
            	{
            		document.getElementById('lisMsj').innerHTML=" ";

            		for (var i = 0; i < registros.length; i++) {
            			if(registros[i]['Id_Emisor']==idEmi){
            				$('<li class="replies"><img src="<?= base_url()?>plantilla/images/chica.png" alt="" /><p style="background-color:#1fbf7b; color:#FFF;">' + registros[i]['Mensaje'] + '</p></li>').appendTo($('.messages ul'));
							$('.message-input input').val(null);
							$('.contact.active .preview').html('<span>You: </span>' + registros[i]['Mensaje']);
							$(".messages").animate({ scrollTop: $(document).height() }, "fast");
            			}
            			else {
            				$('<li class="sent" ><img src="<?= base_url()?>plantilla/images/chica.png" alt="" /><p>' + registros[i]['Mensaje'] + '</p></li>').appendTo($('.messages ul'));
							$('.message-input input').val(null);
							$('.contact.active .preview').html('<span>You: </span>' + registros[i]['Mensaje']);
							$(".messages").animate({ scrollTop: $(document).height() }, "fast");
            			}
            			            			
            		}
            	}
            	else{
            		toastr.error('No hay ningun mensaje en el chat','Lo sentimos!!!!',{
			        "positionClass": "toast-bottom-full-width",
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
            	}
            }
        });

	}
	
};
$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});
setInterval("NM()",5000);
function NM(){
	document.getElementById('lisMsj').innerHTML=" ";
	id2=$('#Id_Contacto').val();
	idEmi=$('#id_emisor').val();
	idRe=$('#id_receptor').val();

	//setInterval("newMessage()",1000);
	//alert(id2);
	$.ajax({
            url:"<?php echo base_url()?>Mensajes/listarMensajesContactos",
            type:"POST",
            data:{Id:id2},
            success:function(respuesta){
            	var registros = eval(respuesta);
            	if(registros.length>0)
            	{
            		document.getElementById('lisMsj').innerHTML=" ";

            		for (var i = 0; i < registros.length; i++) {
            			if(registros[i]['Id_Emisor']==idEmi){
            				$('<li class="replies"><img src="<?= base_url()?>plantilla/images/chica.png" alt="" /><p style="background-color:#1fbf7b; color:#FFF;">' + registros[i]['Mensaje'] + '</p></li>').appendTo($('.messages ul'));
							//$('.message-input input').val(null);
							$('.contact.active .preview').html('<span>You: </span>' + registros[i]['Mensaje']);
							$(".messages").animate({ scrollTop: $(document).height() }, "fast");
            			}
            			else {
            				$('<li class="sent" ><img src="<?= base_url()?>plantilla/images/chica.png" alt="" /><p>' + registros[i]['Mensaje'] + '</p></li>').appendTo($('.messages ul'));
							//$('.message-input input').val(null);
							$('.contact.active .preview').html('<span>You: </span>' + registros[i]['Mensaje']);
							$(".messages").animate({ scrollTop: $(document).height() }, "fast");
            			}
            			            			
            		}
            		
            	}
            }
        });
}
//# sourceURL=pen.js
function GuardarMsj(id, idEmi, idRec, nom, foto){
	document.getElementById('lisMsj').innerHTML=" ";
	document.getElementById('nombreContacto').innerHTML=nom;
	document.getElementById('imgU').setAttribute('src', "<?= base_url()?>plantilla/img_perfil/"+foto);
	$('#Id_Contacto').val(id);
	$('#id_emisor').val(idEmi);
	$('#id_receptor').val(idRec);
	id2=id;
	//setInterval("newMessage()",1000);
	//alert(id2);
	$.ajax({
            url:"<?php echo base_url()?>Mensajes/listarMensajesContactos",
            type:"POST",
            data:{Id:id2},
            success:function(respuesta){
            	var registros = eval(respuesta);
            	if(registros.length>0)
            	{
            		for (var i = 0; i < registros.length; i++) {

            			if(registros[i]['Id_Emisor']==idEmi){
            				$('<li class="replies"><img src="<?= base_url()?>plantilla/images/chica.png" alt="" /><p style="background-color:#1fbf7b; color:#FFF;">' + registros[i]['Mensaje'] + '</p></li>').appendTo($('.messages ul'));
							$('.message-input input').val(null);
							$('.contact.active .preview').html('<span>You: </span>' + registros[i]['Mensaje']);
							$(".messages").animate({ scrollTop: $(document).height() }, "fast");
            			}
            			else {
            				$('<li class="sent"><img src="<?= base_url()?>plantilla/img_perfil/'+foto+'" alt="" /><p>' + registros[i]['Mensaje'] + '</p></li>').appendTo($('.messages ul'));
							$('.message-input input').val(null);
							$('.contact.active .preview').html('<span>You: </span>' + registros[i]['Mensaje']);
							$(".messages").animate({ scrollTop: $(document).height() }, "fast");
            			}           			
            		}
            		
            	}
            	else{
            		toastr.error('No hay ningun mensjaje en el chat','Lo sentimos!!!!',{
			        "positionClass": "toast-bottom-full-width",
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
            	}
            }
        });

}
</script>
</body></html>