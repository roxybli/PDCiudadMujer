<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>

     <div class="col-md-5 align-center">
        
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Recetas de productos</a></li>
            <li class="breadcrumb-item active">Ingresar</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="col-lg-12">
 <div class="card TituloUser" style="height: 60px">
                                    <h3 class="responsive" style="color:white; font-weight:bold;"> Ingresar receta de producto</h3>
                                </div>
        <div class="card">
            <div class="card-title">
                <p class="text-danger"><b>Indicaciones</b><br>(*) Todos los campos son requeridos.</p>
            </div>
            <div class="card-body">
                <div id="cabeceraReceta">
                    <form class="form-valide" method="post" action="<?= base_url() ?>inventario/guardarProcedimiento" id="">                                  
                    <!--/row-->
                    <div id="primeraParteR">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="color: #000000">Nombre del Producto</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder=""onkeyup="this.value=NumText(this.value)" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                <label style="color: #000000">Precio del producto</label>
                                    <div class="input-group">
                                        <input type="text" min="0" class="form-control" id="precioProducto" name="precioProducto" onkeypress="return numeros(event, 'num')" placeholder="" required>
                                    </div>
                                </div>
                            </div>

                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="color: #000000">Tipo de materia</label>
                                    <div class="input-group">
                                        <select name="" id="categoriaInsumos" class="form-control" required>
                                            <option value="#">Ver materia prima por</option>
                                            <option value="1">Comestible</option>
                                            <option value="2">No comestible</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->

                        <!--<button type="button" id="crearReceta" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Aceptar</button>-->
                </div>

            <!--<form class="form-valide" method="post" action="<?= base_url() ?>inventario/guardarProcedimiento" id="tablaInsumos">
                <input type="text" name="idUsuario" value="<?= $this->session->userdata($idU) ?>">
			</form>-->
                    
            </div>
            
            <div id="materiaPrimaExistente">
                <div class="table-responsive">
                    <?php 
                        if (sizeof($insumos->result())==0)
                        {
                           echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                        }
                        else
                        {


                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre del insumo</th>
                                <th>Cantidad requerida</th>
                                <th>Precio</th>
                                <th>Medida</th>
                                <th>Seleccionar</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($insumos->result() as $filaInsumos)
                            {
                                $nombre = '"'.$filaInsumos->Nombre_Insumo.'"';
                                $idInsumo = '"'.$filaInsumos->PK_Id_Insumo.'"';
                                $precioInsumo = '"'.$filaInsumos->Precio_Insumo.'"';
                                $medidaInsumo = '"'.$filaInsumos->Medida_Insumo.'"';
                                $idTipoInsumo = '"'.$filaInsumos->FK_Id_Tipo_Insumo.'"';

                                if ($filaInsumos->FK_Id_Tipo_Insumo==1)
                                {
                                    echo '<tr class="comestible">';
                                }
                                else
                                {
                                    echo '<tr class="noComestible">';
                                }
                           ?> 
                               
                                    <td>
                                        
                                    </td>
                        
                                    <td class="text-primary"><input type="text" name="nombreInsumo[]" value="<?= $filaInsumos->Nombre_Insumo ?>" disabled required >
                                                            <input type="hidden" name="idInsumos[]" value="<?= $filaInsumos->PK_Id_Insumo ?>"  required></td>
                                    <td class="text-primary"><input type="text" min="0" name="cantidadInsumo[]" onkeypress="return numeros(event, 'num')"></td>
                                    <td class="text-primary"><input type="text" name="precioInsumo[]" value="<?= $filaInsumos->Precio_Insumo ?>" disabled required></td>
                                    <td class="text-primary"><input type="text" id="medida_insumo" name="medidaInsumo[]" value="<?= $filaInsumos->Medida_Insumo ?>"  required></td>
                                    <td class="text-primary"><input type="hidden" name="tipoInsumo[]" value="<?= $filaInsumos->FK_Id_Tipo_Insumo ?>" disabled required></td>
                                    <td>                                
                                        <input type="checkbox"  class="form-control" name="materiaPrimaSeleccionada[]" value="<?= $filaInsumos->PK_Id_Insumo ?>" >
                                        <?php 
                                         //echo "<button type='button' class='btn btn-primary btn-sm' onclick='agregar($nombre, $precioInsumo, $medidaInsumo, $idInsumo, $idTipoInsumo)'><i class='fa fa-plus'></i></button>";
                                         ?>
                                    </td>
                                    <td class="text-primary"><span></span></td>
                                    
                                </tr>
                           <?php    
                                }
                            }
                         ?>
                        
                        </tbody>
                    </table>
                    <input type="hidden" name="idUsuario" value="<?= $this->session->userdata('id') ?>">
                    <div align="right">
                    <button type="submit" id="segundoPasoR" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-save f-s-30"></i> Guardar </button></div>
                    </div>
                </div>
                    </form>
                </div>
                            
                        
        </div>
    </div>
</div> 

</div>
<script>

$(document).on("ready", main);
function main()
  {
    $("#medida_insumo").prop('readonly', true);
  }
</script>

