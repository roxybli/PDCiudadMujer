<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
    <a href="<?=base_url() ?>capital/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>
     <div class="col-md-5 align-center">
       
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingresar nuevo negocio</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
<div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Capital inicial</h3>
    </div>
        <div class="card">
            <div class="card-title">
                  <p class="text-danger"><b>Indicaciones</b><br>(*) Todos los campos son requeridos.</p>
            </div>
            <div class="card-body" >
                <div id="capitalRubros">
                    <form method="" action="">
                        <div class="row">
                            <div class="col-md-10">
                            <label for="" style="color: #000000">Selecciona una opción para agregar un nuevo negocio al rubro</label>
                                <select name="" class="form-control" id="idRubro" required>

                                    <option value="">Elija uno de los siguientes rubros </option>
                                <?php 
                                    foreach ($datos->result() as $filaDatos) {
                                       
                                    ?>
                                    <option value="<?= $filaDatos->PK_Id_Rubro?>"><?= $filaDatos->Nombre_Rubro ?></option>

                                <?php } ?>
                                </select>   
                                
                            </div>
                            <div class="col-md-2">
                            <label for=""></label>
                                <div class="form-group">
                                    <button type="button" id="btnCapitalRubros" class="btn btn-primary">Siguiente <i class="fa fa-angle-double-right f-s-20"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                 <div id="capitalSubrubro">
                    <form class="form-valide" method="" action="">                                    
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="" style="color: #000000">Nombre del negocio</label>
                                    <div class="input-group">
                                        <input type="text" list="negocios" class="form-control" id="nombreSubrubro" name="" placeholder="Nombre de la actividad" onkeyup="this.value=NumText(this.value)" required>
                                        <datalist id="negocios">
                                            <option value="Panaderia y Pasteleria">
                                            <option value="Restaurantes">
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="" style="color: #000000">Cantidad de Insumos</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="materiaComestible" min="0" name="" placeholder="Número de Insumos" onkeypress="return numeros(event, 'num')" max="20" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                <label for="" style="color: #000000">Cantidad de Maquinaria</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="maquinaria" name="" min="0" placeholder="Número de maquinaria" onkeypress="return numeros(event, 'num')" max="20" required>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                            <label for=""></label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="button" class="btn btn-primary" id="btnProcesarElemntosSubrubro" name="" value="Aceptar">
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>


                <div id="elementosSubrubro">
                    <form action="<?= base_url() ?>capital/guardarDatosNegocio" method="post" id="elementoSR">
                         <div class="row">
                             <div class="col-md-12">
                                     <input type="hidden" value="" id="idRubroC" name="idRubroC">
                                    <p><h3 id="nombreRubroN" class="text-primary text-center"></h3></p>
                                    <input type="hidden" value="" id="nombreRubroE" name="nombreRubroE">
                             </div>
                         </div> 
                         <div class="row" id="pm" style="display:none">
                             <div class="col-md-12 text-right">
                             <label style="color: #000000">Producción estimada </label>
                            <input type="text" value="" id="" name="produccionMensual" onkeypress="return numeros(event, 'num')" required>
                            <hr>
                         </div>
                         </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div> 
</div>