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
                        <li> <a class="has-arrow-inicio  " href="<?=base_url() ?>Login/home" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Mi Perfil <span class="hide-menu"></span></span></a></li>
                        <li class="nav-label">Menú</li>
                        <li> <a class="has-arrow-inicio " href="<?=base_url() ?>Emprendedoras/" aria-expanded="false"><i class="fa fa-shopping-bag"></i><span class="hide-menu">Bolsa de Emprendedoras</span></a>
                        </li> 
                          <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope">  
                          </i><span class="hide-menu">Mensajes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url() ?>Contactos/">Chat</a></li>
                                <li><a href="<?=base_url() ?>Contactos/listarContacto">Historial de mensajes</a></li>
                            </ul>
                        </li> 
                         <li> <a class="has-arrow  " href="<?=base_url() ?>Eventos/" aria-expanded="false"><i class="fa fa-calendar"></i><span class="hide-menu">Calendario de Eventos</span></a>
                        </li>
                           <li><a href="<?=base_url() ?>Anuncios/"><i class="fa fa-newspaper-o"></i><span class="hide-menu">Noticias</span></a>
                           </li>
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-file-movie-o">  
                          </i><span class="hide-menu">Guias Multimedia</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url() ?>Guias/Cargar_Guias?v=1">Documentos</a></li>
                                <li><a href="<?=base_url() ?>Guias/Cargar_Guias?v=2">videos</a></li>
                            </ul>
                        </li> 
                        <li> <a class="has-arrow-inicio "  href="<?=base_url()?>ReportesEU" aria-expanded="false"><i class="fa fa-bar-chart f-s-20"></i><span class="hide-menu">Reportes</span></a>
                          <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url() ?>ReportesEU/ReportesPDF">Reportes PDF</a></li>
                                <li><a href="<?=base_url() ?>Estadisticas">Estadisticas</a></li>
                            </ul>
                        </li> 
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-window-restore"></i><span class="hide-menu">Aplicaciones Empresariales</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?=base_url() ?>capital/negocios/">Capital inicial</a></li>
                                <li><a href="<?=base_url() ?>inventario/">Inventario</a></li>
                                 <li><a href="<?=base_url() ?>controlie/">Control de Ingresos y Egresos</a></li>
                            </ul>
                            </li>
                            </ul>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->