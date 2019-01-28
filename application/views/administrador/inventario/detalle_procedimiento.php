<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?=base_url() ?>inventario/consultar_receta"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Receta de productos</a></li>
            <li class="breadcrumb-item active">detalles</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    
    <div class="col-lg-12">
        <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Crear Productos</h3>
    </div>
        <div class="card">
            <div class="card-title">
            	<?php
                if (sizeof($datos->result())== 0)
                {
                    echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                }
                else
                {
            		foreach ($datos->result() as $filaProcedimientos)
                            {}
            	?>
                    <h4> Producto: <strong class="text-warning"><?= $filaProcedimientos->Nombre_Producto ?> $<?= $filaProcedimientos->Precio_Producto ?> C/U </strong></h4> 
                <div class="row">
                    <div class="col-md-6">
                        <label style="color: #000000">Cuantos Productos creará  </label>
                        <input type="text" onkeypress="return numeros(event, 'num')" class="form-control" name="cantidadProducto" placeholder="¿Cuántos Productos creará ?"  value="1" id="cantidadProducto" required>
                    </div>
                    <div class="col-md-6">
                        <label style="color: #000000">fecha de creación  </label>
                        <input type="text" name="fechaProducto" class="form-control" id="fechaIE" required="true" name="" placeholder="Fecha">
                    </div>
                </div>
            </div>
            <div class="card-body">

            <form id="detalleProcedimiento" method="post" action="<?= base_url() ?>inventario/guardarProducto">               
            
            <input type="hidden" value="" id="CP" name="cantidadProducto" >
            <input value="" type="hidden" id="FP" name="fechaProducto">
            <?php 
                foreach ($datos->result() as $fila)
                    {

                    }
            ?>
            <input type="hidden" id="" name="idProducto" value="<?= $fila->PK_Id_Producto ?>">

                
                    <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Materia Prima</th>
                                <th>Precio</th>
                                <th>Existencia</th>
                                <th>Requerida</th>
                                <th>Medida</th>
                                <th>Direccion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($datos->result() as $filaProcedimientos)
                            {
                        ?>
                            <tr>
                                <td style="color: #000000"><span><?= $filaProcedimientos->Nombre_Insumo ?></span></td>
                                <td style="color: #000000"><span><?= $filaProcedimientos->Precio_Insumo ?></span></td>
                                <td><input type="text" name="existenciaInsumo[]"  value="<?= $filaProcedimientos->Existencia_Insumo ?>" id ="existencia" min="1" readonly>
                                 <input type="hidden" name="idInsumos[]" id ="existencia" value="<?= $filaProcedimientos->PK_Id_Insumo?>"> </td>
                                <td><span><input type="text" name="cantidadInsumo[]" value="<?= $filaProcedimientos->Cantidad_Insumo ?>" class="calc" id="crear" maxlength="" readonly></span></td>
                                <td  style="color: #000000"><span><?= $filaProcedimientos->Medida_Insumo ?></span></td>
                                <td  style="color: #000000"><span><?= $filaProcedimientos->Direccion ?></span></td>
                            </tr>
                        
                        <?php       
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                      <div class="form-group" id="botonC" align="right">
                        <p></p>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i><span class="fa fa-share-square-o f-s-20 oculto" id="btnCrear"></span> Crear Producto nuevo</button> 
                </div>
 

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
 function Validar(){

    var existenciaInsumo = get.documentbyid
 }
$("#crear").change(function() {
        existencia = $("#existencia").val();
        cantidad = $(this).val();

if (cantidad> existenciaInsumo)
{
 sweetAlert("Accion no permitida", "Tamaño de la imagen tiene que ser de 720*540px", "error");
}
else
        {
         $("#botonCrear").fadeIn(); 
        }

}

</script>
