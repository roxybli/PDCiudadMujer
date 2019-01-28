<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url() ?>plantilla/images/favicon.png">
    <title>Ciudad Mujer</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/dropzone/dropzone.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url() ?>plantilla/componentes/css/lib/html5-editor/bootstrap-wysihtml5.css">
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/helper.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/style.css" rel="stylesheet">
    <script src="<?=base_url() ?>plantilla/componentes/js/jquery-1.11.0.min.js"></script>
    <link href="<?=base_url() ?>plantilla/componentes/css/estilos.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/datepicker.css" rel="stylesheet">
</head>
<script>
     setInterval("NMensajes()",1000);
    function NMensajes(){
      
      $.get("<?=base_url() ?>Mensajes/VerMensajes","",function(data){
      //console.log(res);
      var json = JSON.parse(data);
      var param=1;
      //console.log(json);
      //alert(json.length);
      document.getElementById('Num').innerHTML=json.length;
      if(json==""){
        document.getElementById('noti1').style.display='none';
         document.getElementById('noti2').style.display='none';
        document.getElementById('Mensaje').innerHTML='<p>No tienes nuevos mensajes</p>';
      }
      else{
        html=""
         document.getElementById('noti1').style.display='block';
         document.getElementById('noti2').style.display='block';
       for (res in json){
            //var cont='"'+json[res].nombre+'"';
            //var us = json[res].nomUsuario;
           /*document.getElementById('notificacion').innerHTML='<p>'+json[res].nombre+'</p><p>'+json[res].nomUsuario+'</p>'+
            '<p><a href="<?php echo base_url();?>solicitud/detalleSolicitud?d='+json[res].id_solicitud+'&param='+param+'&e='+json[res].id_equipo+'">Ver Detalles</a></p>';
              }*/
                html+='<a onclick="ver('+json[res].PK_Id_Mensaje+')"><div class="btn btn-info btn-circle m-r-10"><i class="fa fa-envelope"></i></div><div class="mail-contnet"><h5>'+json[res].Emisor_Mensaje+'</h5><span class="mail-desc">'+json[res].Contacto_Mensaje+'</span> <span class="time">9:02 AM</span></div></a>';
               }
               document.getElementById('Mensaje').innerHTML=html;
      }
    });
  }
  function ver(id_m){
        $.ajax({
        url: '<?php echo base_url()?>Mensajes/EstadoMensajes',
        type: "POST",
        data: {id:id_m},
        success:function(data){
        }
    });

  }


  
  //Notificacion de eventos
      setInterval("NEventos()",1000);
    function NEventos(){
      
      $.get("<?=base_url() ?>Eventos/VerUltimoEvento","",function(data){
      var json = JSON.parse(data);
      var param=1;
      document.getElementById('Num2').innerHTML=json.length;
      if(json==""){
     document.getElementById('noti3').style.display='none';
         document.getElementById('noti4').style.display='none';
        document.getElementById('Evento').innerHTML='<p>No hay nuevos eventos</p>';
      }
      else{
        html=""
     document.getElementById('noti3').style.display='block';
         document.getElementById('noti4').style.display='block';
       for (res in json){
                html+='<a onclick="ver2('+json[res].id_evento+')"><div class="btn btn-info btn-circle m-r-10"><i class="fa fa-calendar-o"></i></div><div class="mail-contnet"><h5>'+json[res].titulo_evento+'</h5><span class="mail-desc">'+json[res].contenido_evento+'</span> <span class="time"></span></div></a>';
               }
               document.getElementById('Evento').innerHTML=html;
      }
    });
  }
  function ver2(id_m){
        $.ajax({
        url: '<?php echo base_url()?>Eventos/EstadoEvento',
        type: "POST",
        data: {id:id_m},
        success:function(data){
        }
    });
  }
  
  //Notificaciones Contactos/
  setInterval("NMensajes()",1000);
    function NMensajes(){
      
      $.get("<?=base_url() ?>Mensajes/VerMensajesC","",function(data){
      //console.log(res);
      var json = JSON.parse(data);
      var param=1;
      //console.log(json);
      //alert(json.length);
      document.getElementById('Num3').innerHTML=json.length;
      if(json==""){
        document.getElementById('noti5').style.display='none';
         document.getElementById('noti6').style.display='none';
        document.getElementById('MensajeC').innerHTML='<p>No tienes nuevos mensajes de contactos</p>';
      }
      else{
        html=""
         document.getElementById('noti5').style.display='block';
         document.getElementById('noti6').style.display='block';
       for (res in json){
                html+='<a onclick="ver3('+json[res].PK_Id_Mensaje_Contacto+')"><div class="btn btn-info btn-circle m-r-10"><i class="fa fa-address-book"></i></div><div class="mail-contnet"><h5>'+json[res].Mensaje+'</h5></div></a>';
               }
               document.getElementById('MensajeC').innerHTML=html;
      }
    });
  }
  function ver3(id_m){
        $.ajax({
        url: '<?php echo base_url()?>Mensajes/EstadoMensajesC',
        type: "POST",
        data: {id:id_m},
        success:function(data){
        }
    });
  }
  
  
  
</script>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?=base_url() ?>Anuncios/">
                        <!-- Logo icon -->
                        <b><img src="<?=base_url() ?>plantilla/images/LogoCM.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="<?=base_url() ?>plantilla/images/LogoText.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  " href="<?=base_url() ?>Ayuda/"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-question"></i></a>   
                    </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
               
             <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-comments"></i>
                                <div class="notify"> <span id="noti1" style="display:none;" class="heartbit"></span> <span id="noti2" style="display:none;" class="point"></span> 
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">Tienes <span id="Num"></span> comentarios nuevos</div>
                                    </li>
                                    <li>
                                        <div class="message-center" id="Mensaje" name="Mensaje">
                                            <!-- Message -->
                                            <!--CONTENIDO DEL MENSAJE-->
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="<?= base_url()?>Mensajes/ListarMensajes"> <strong>Ver todos los comentarios</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
            <!-- Eventos-->
             <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-calendar-o"></i>
                                <div class="notify"> <span id="noti3" style="display:none;" class="heartbit"></span> <span id="noti4" style="display:none;" class="point"></span> 
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">Hay <span id="Num2"></span> Eventos Nuevos</div>
                                    </li>
                                    <li>
                                        <div class="message-center" id="Evento" name="Evento">
                                            <!-- Message -->
                                            <!--CONTENIDO DEL MENSAJE-->
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="<?= base_url()?>Eventos/"> <strong>Ver todos los eventos</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
            
            
          
                        <!-- End Comments -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
                                <div class="notify"> <span id="noti5" style="display:none;" class="heartbit"></span> <span id="noti6" style="display:none;" class="point"></span> 
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">Tienes <span id="Num3"></span> Mensajes nuevos</div>
                                    </li>
                                    <li>
                                        <div class="message-center" id="MensajeC" name="Mensaje">
                                            <!-- Message -->
                                            <!--CONTENIDO DEL MENSAJE-->
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="<?=base_url() ?>Contactos/"> <strong>Ver todos los mensajes</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                     
                        <!-- End Messages -->
                        <!-- Profile -->
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url()?>plantilla/images/chica.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                   <!-- <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>-->
                                    <li><a href="<?= base_url()?>login/cerrar_sesion"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </li>
                     
                    </ul>
                </div>
            </nav>
            </div>
   
        <!-- End header header -->
        <?php
        //$id=$this->session->userdata('id');
        $tipo=$this->session->userdata('id_tipo');
        if($tipo==1){
             include_once"sidebar.php";
        }
        else if($tipo==2){
             include_once"sidebarAdministradora.php";
        }
        else if($tipo==3){
             include_once"sidebarUsuaria.php";
        }
        else{
            include_once"sidebarVisitante.php";
        }
         ?>
        <!-- Page wrapper  -->
<div class="page-wrapper">