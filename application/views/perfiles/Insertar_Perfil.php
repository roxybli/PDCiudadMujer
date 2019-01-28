 <script src="<?=base_url() ?>plantilla/componentes/js/CrearPerfil.js"></script>
 <!-- Bread crumb -->
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Nuevo Perfil</li>
                    </ol>
                </div>
            </div>
             <div class="container-fluid" id="div_1">
                <!-- Start Page Content -->
            <div class="card TituloUser">
            <div class="card-title">
            <img class="ImageInicio"  src="<?= base_url()?>plantilla/images/triste.png">
               <div><h4 style="color:white; font-weight:bold;">Usted no ha creado un perfil empresarial</h4></div>
            </div>
             <a style="background-color:#448AFF; font-weight:bold; padding:10px;" class="btn" onclick="mostrar()"> <i class="fa fa-plus-circle"></i> Crear Perfil Empresarial</a>
            </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid" id="div_2" style="display:none;">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12"> 
                                <div >
                                        <!-- Bread crumb -->
					                                <form class="FormPerfil" enctype="multipart/form-data" action="<?=base_url()?>Perfiles/registroPerfil" method="post" id="FormPerfil">  
                                                    <!--INICIO DEL DIV1DATOS--> 
                                                    <div id="DivDatos" class="card" style="background-color:#0097a7; display:none">
                                                    <h3 class="encabezados" >Registro de datos del negocio</h3>
                                                     <div class="row">
                                                          <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte el nombre de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="nombreN" name="nombreN" placeholder="Nombre del Negocio"  onkeyup="this.value=NumText(this.value)" required>
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Seleccione el rubro de su negocio</label>
                                                                    <div class="input-group">
                                                                        <select class="form-control" name="rubro" id="rubro" >
                                                                            <?php
                                                                                echo "<option value=''>Seleccione el rubro de su negocio</option>";
                                                                                foreach ($rubros->result() as $fila) {

                                                                                  echo "<option value=".$fila->PK_Id_Rubro.">".$fila->Nombre_Rubro."</option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row ">
                                                           <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte el link de la dirección de su negocio en Google Maps</label>
														
                                                                    <div class="input-group">
                                                          
																	   <input type="text" class="form-control" id="direccionN" name="direccionN" placeholder="Dirección del negocio"  onkeyup="this.value=NumText(this.value)" required>
																	  
                                                                    </div>
																	<a class="etiqueta2 text-danger" href="https://www.google.com/maps" target="_blank" >Ingrese a google maps haciendo click aqui.</a>
                                                                </div>
																
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte el slogan de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="descripcionN" name="descripcionN" placeholder="Descripción del negocio"  onkeyup="this.value=NumText(this.value)" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte numero de teléfono de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="telefono" name="telefono"  placeholder="Inserte su número de WhatsApp"  onkeypress="return numeros(event, 'num')" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte el correo electronico de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese un correo electrónico de contacto" onkeyup="this.value=NumText(this.value)" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 btnCenter">
                                                                 <a onclick="Atras()" class="btn btn-secundary" id="anterior" ><i class="fa fa-arrow-left"></i> Regresar</a> 
                                                             </div>
                                                        <div class="col-md-6 btnCenter">
                                                             <a onclick="siguiente()" class="btn btn-info" id="siguiente">Siguiente  <i class="fa fa-arrow-right"></i></a>
                                                        </div>
                                                        </div>
                                                        </div>
                                                    <!--FINAL DEL DIV1 -->   
													<!--INICIO DEL DIV DESCRIPCION LARGA Y SERVICIOS PRESTADOS-->               
                                                       <div id="DivDescripcion" class="card row" style="background-color:#00BCD4; display:none;">
                                                             <h3 class="encabezados">Registro de datos del negocio</h3>
                                                             <div class="row">
                                                                    <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Agregue una descripción de su negocio</label>
                                                                    <div class="input-group">
																	<textarea rows="3" cols="50"class="form-control" id="desN" name="desN" placeholder="Descripcion del negocio"" onkeypress ="this.value=NumText(this.value)" required maxlength="120"></textarea>
                                                  
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
															</div>  
															<div class="row">
                                                          <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Escriba los servicios/especialidades de su negocio</label>
                                                
                                                            <!--/span-->
                                                       
																</div>
															</div>
														</div>
														
														  <div class="row">
                                                          <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                  
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="servicio1" name="servicio1" placeholder="Servicio/Especialidad" onkeyup="this.value=NumText(this.value)" maxlength="80" required>
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                          
                                                                    <div class="input-group">
																	               <input type="text" class="form-control" id="servicio2" name="servicio2" placeholder="Servicio/Especialidad" onkeyup="this.value=NumText(this.value)" maxlength="80" required>
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                    
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <!--/row-->
														
														  <div class="row">
                                                          <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                  
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="servicio3" name="servicio3" placeholder="Servicio/Especialidad" onkeyup="this.value=NumText(this.value)" maxlength="80" required>
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                          
                                                                    <div class="input-group">
																	               <input type="text" class="form-control" id="servicio4" name="servicio4" placeholder="Servicio/Especialidad" onkeyup="this.value=NumText(this.value)" maxlength="80" >
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                    
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <!--/row-->
														
														  <div class="row">
                                                          <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                  
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="servicio5" name="servicio5" placeholder="Servicio/Especialidad" onkeyup="this.value=NumText(this.value)" maxlength="80">
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                          
                                                                    <div class="input-group">
																	               <input type="text" class="form-control" id="servicio6" name="servicio6" placeholder="Servicio/Especialidad" onkeyup="this.value=NumText(this.value)" maxlength="80">
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                    
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                        <!--/row-->
														<div class="row">
                                                            <div class="col-md-6 btnCenter">
                                                                 <a onclick="mostrar()" class="btn btn-info" id="anterior" ><i class="fa fa-arrow-left"></i> Atras</a> 
                                                             </div>
                                                        <div class="col-md-6 btnCenter">
                                                             <a onclick="siguiente2()" class="btn btn-info" id="siguiente">Siguiente  <i class="fa fa-arrow-right"></i></a>
                                                        </div>
                                                        </div>
                                                            </div>

                                                            <!--FIN DEL DIV DESCRIPCION LARGA Y SERVICIOS PRESTADOS-->													
                                                    <!--INICIO DEL DIV2IMAGEN DE PERFIL -->               
                                                       <div id="Div2Imagenes" class="card row" style="background-color:#00BCD4; display:none;">
                                                             <h3 class="encabezados">Seleccione el Logo de su negocio</h3>
                                                             <div class="row">
                                                                    <input hidden class="btn btn-success" type="file" name="imagenPerfil" id="imagenPerfil">
                                                                    <a onclick="SubirImgPerfil()" style="color:white" class="btn subirImg"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                                                                </div>  
                                                             <div class="row" id="mostrarPerfil"></div>

                                                             <div class="row btnCenter" >
                                                                <div class="col-md-6 btnCenter" style="display:none" id="botonesImage">
                                                                     <a onclick="siguiente()" class="btn btn-info" id="anterior" ><i class="fa fa-arrow-left"></i> Cancelar</a> 
                                                                 </div>
                                                                <div class="col-md-6 btnCenter" style="display:none" id="botonesImage2">
                                                                 <a onclick="siguiente3()" class="btn btn-info" id="siguiente">Siguiente  <i class="fa fa-arrow-right"></i></a>
                                                                </div>
                                                            
                                                            </div>
                                                            </div>

                                                            <!--FIN DEL DIV PARA LA IMAGENES-->
                                                         <div id="DivImagesGaleria" class="card" style="display:none; background-color:#00BCD4;">
                                                              <h3 class="encabezados">Agregue imagenes para mostrar en su perfil</h3>
                                                              <p class="indicaciones"><b>Indicaciones:</b> Por politicas de la organizacion solo se permiten tres imagenes por lo que ya se muestran los espacios establecidos para cada una,  estas las puede cambiar cuando desee despues de creado su perfil</p>
                                                              <div class="row">
                                                                  <div class="col-md-4 btnCenter">
                                                                  <a onclick="SubirImg(1)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                                                                  <input hidden type="file" name="imagen1" id="imagen1" change="filePeview(this)">
                                                                  </div>
                                                                  <div class="col-md-4 btnCenter">
                                                                  <a onclick="SubirImg(2)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                                                                  <input hidden type="file" name="imagen2" id="imagen2" change="filePeview(this)">
                                                                    
                                                                  </div>
                                                                  <div class="col-md-4 btnCenter">
                                                                  <a onclick="SubirImg(3)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                                                                  <input hidden type="file" name="imagen3" id="imagen3" change="filePeview(this)">
                                                                    
                                                                  </div>
                                                                
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-4 ImgPerfil" id="mostrarfoto1">
                                                                  <img src="<?=base_url()?>plantilla/images/picture.png">
                                                                  </div>
                                                                  <div class="col-md-4 ImgPerfil" id="mostrarfoto2" >
                                                                      <img  src="<?=base_url()?>plantilla/images/picture.png">
                                                                  </div>
                                                                 <div class="col-md-4 ImgPerfil" id="mostrarfoto3">
                                                                    <img src="<?=base_url()?>plantilla/images/picture.png">
                                                                  </div>
                                                                
                                                              </div>
															  
															   <div class="row ">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Agregue una descripcion a su imagen</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="descripcion1" name="descripcion1"  placeholder="Pie de foto" onkeyup="this.value=NumText(this.value)" maxlength="50">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Agregue una descripcion a su imagen</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="descripcion2" name="descripcion2" placeholder="Pie de foto" onkeyup="this.value=NumText(this.value)" maxlength="50">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
															  <div class="col-md-4">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Agregue una descripcion a su imagen</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="descripcion3" name="descripcion3" placeholder="Pie de foto" onkeyup="this.value=NumText(this.value)" maxlength="50">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
															
                                                        </div>
															  
                                                              <div class="row">
                                                                  <div class="col-md-6 btnCenter">
                                                                     <a onclick="Verificar()" class="btn btn-danger" id="anterior" ><i class="fa fa-arrow-left"></i> Verificar</a> 
                                                                  </div>
                                                                 <div class="col-md-6 btnCenter" >
                                                                    <button id="btnEnviar" type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
                                                                  </div>
                                                                
                                                              </div>
                                                              </div>
                                                              </div>
                                                              </div>
                                                               </div>
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                        
                                                        </div>
                                                        </div>
                                                    </form>
							            <!-- End Bread crumb -->
                                </div>
                                
                        </div>
                    </div>