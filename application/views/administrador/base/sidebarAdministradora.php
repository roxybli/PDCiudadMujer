     <script type="text/javascript">
         function mensaje(){
            alert('Pendiente de revision');
         }
     </script>
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Inicio</li>
                        <li> <a class="has-arrow-inicio  " href="<?=base_url() ?>Login/home" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Mi Perfil</span></a></li>
                        <li class="nav-label">Menu</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user-circle"></i><span class="hide-menu">Usuarios</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url()?>Emprendedoras/InsertarUsuaria">Nuevo usuario</a></li>
                                <li><a href="<?=base_url()?>Emprendedoras/verUsuarias">Usuarios registrados</a></li>
                                <li><a href="<?=base_url()?>Reportes">Reportes de usuarios registrados</a></li> 
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="<?=base_url() ?>Rubros/" aria-expanded="false"><i class="fa fa-building"></i><span class="hide-menu">Gestionar Rubros</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="<?=base_url() ?>Emprendedoras/" aria-expanded="false"><i class="fa fa-shopping-bag"></i></i><span class="hide-menu">Bolsa de Emprendedoras </span></a>
 
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Mensajes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url() ?>Contactos/">Chat</a></li>
                                <li><a href="<?=base_url() ?>Contactos/listarContacto">Historial de mensajes</a></li> 
                                
                            </ul>
                        </li>
                         <li> <a class="has-arrow  " href="<?=base_url() ?>Eventos/" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Calendario de Eventos</span></a>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">Noticias </span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="<?=base_url() ?>Anuncios/">Ver noticias</a></li>
                                    
                                </li>
                                <li><a href="<?=base_url() ?>Anuncios/publicar_anuncios">Publicar Noticias</a>
                                <li><a href="<?=base_url() ?>Anuncios/GestionarNoticias">Gestionar noticias</a></li>
                                <li><a href="<?=base_url() ?>Anuncios/GestionarBorradores">Gestionar borradores</a></li>
                                </li>
                        </li>
                            </ul>
                             </li>
                               <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-file-movie-o"></i><span class="hide-menu">Guias Multimedia</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#" class="has-arrow">Ver Guias Multimedia</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?=base_url() ?>Guias/Cargar_Guias?v=1">Documentos</a></li>
                                        <li><a href="<?=base_url() ?>Guias/Cargar_Guias?v=2">Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=base_url() ?>Guias">Publicar Guia Multimedia</a>

                                </li>
                                <li><a href="<?=base_url() ?>Guias/Gestionar">Gestionar Guia Multimedia</a>
                                                         
                                </li>
                        </li>
                            </ul>
                             </li>
                          <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-window-restore"></i><span class="hide-menu">Aplicaciones Empresariales</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url() ?>capital/">Capital inicial</a></li>
                                <li><a href="<?=base_url() ?>inventario/">Inventario</a></li>
                                 <li><a href="<?=base_url() ?>controlie/">Control de Ingresos y Egresos </a></li>
                            </ul>
                            </li>
                            </ul>
        <!-- End Left Sidebar  -->

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->