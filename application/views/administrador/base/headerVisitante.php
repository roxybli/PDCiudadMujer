
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" style="color: #fff">
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
    <link href="<?=base_url() ?>plantilla/componentes/css/style.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/estilos.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/componentes/css/datepicker.css" rel="stylesheet">
    <link href="<?=base_url() ?>plantilla/mtl/material.min.css" rel="stylesheet">
        <link href="<?=base_url() ?>plantilla/componentes/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    </head>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="<?=base_url() ?>plantilla/componentes/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url() ?>plantilla/componentes/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url() ?>plantilla/componentes/js/lib/sweetalert/sweetalert.min.js"></script>
    <script src="<?=base_url() ?>plantilla/componentes/js/lib/sweetalert/sweetalert.init.js"></script>
    <!-- scripit init-->
    <script src="<?=base_url() ?>plantilla/mtl/material.min.js"></script>

<div style="background: #fff;color:white">
<!-- Always shows a header, even in smaller screens. -->
<body class="fix-header fix-sidebar" style="color: #fff;  background: #fff">
<div  class="mdl-layout mdl-js-layout mdl-layout--fixed-header" style="background: #fff">
  <header class="mdl-layout__header" style="background:#333232; color: #fff" >
    <div class="mdl-layout__header-row" style="background:#333232; color: #fff">
      <!-- Title -->
      <img src="<?=base_url() ?>plantilla/images/LogoCM.jpg"  style="height:50%; margin:10;" alt="homepage" class="dark-logo">
      <span class="mdl-layout-title letra-menu" style="font-size:30px;">Ciudad Mujer</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav id="menu" class="mdl-navigation mdl-layout--large-screen-only">
      <a id="ln" class="mdl-navigation__link" href="<?=base_url() ?>"><span class="letra-menu"><i class="fa fa-shopping-bag" style="margin:10;" aria-hidden="true"></i>Bolsa de emprendedoras</span></a>
        <a id="ln" class="mdl-navigation__link" href="<?=base_url() ?>Anuncios/"><span class="letra-menu"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
Noticias</span></a>
 <a id="ln" class="mdl-navigation__link" href="<?=base_url() ?>Ayuda/" ><span class="letra-menu"><i style="margin:10;" class="fa fa-question" aria-hidden="true"></i>Ayuda</span></a>              
        <a id="ln" class="mdl-navigation__link" href="<?= base_url()?>Login"><span class="letra-menu"><i style="margin:10;" class="fa fa-user-circle" aria-hidden="true"></i>Iniciar sesión</span></a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer" style="color: #000;">
        <img src="<?=base_url() ?>plantilla/images/LogoCiudadMujer.png"  style="height:20%; margin:10;" alt="homepage" class="dark-logo">
    <span class="mdl-layout-title" >Menu</span>
    <nav class="mdl-navigation"> 
     <a  class="mdl-navigation__link" style="color: #000" href="<?=base_url() ?>Emprendedoras/"><span sty><i style="margin:10; " class="fa fa-shopping-bag" aria-hidden="true" ></i>Bolsa de Emprendedoras</span></a>
     <a class="mdl-navigation__link" style="color: #000" href="<?=base_url() ?>Anuncios/"><span><i style="margin:10;" class="fa fa-newspaper-o" aria-hidden="true"></i>Noticias</span></a>
      <a class="mdl-navigation__link"  style="color: #000" href="<?= base_url()?>Login"><span sty><i style="margin:10;" class="fa fa-user-circle" aria-hidden="true"></i>Iniciar sesión</span></a>
    </nav>
  </div>
  


  