<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>

     <div class="col-md-5 align-center">
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Productos en Inventario</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Productos en Inventario</h3>
    </div>
        <div class="card"> 
            <div class="card-title" align="right">
           
                <p><a href="<?= base_url() ?>/inventario/productosProceso" class="btn btn-info"><i class="fa fa-bars"></i> Ver productos en proceso</a>
                <a href="<?= base_url() ?>/inventario/ventasRealizadas" class="btn btn-info"><i class="fa fa-bars"></i> Ventas realizadas</a>
                <a target="_blank" href="<?= base_url() ?>inventario/reporteInventario" class="btn btn-danger"><i class="fa fa-file"></i> Ver en PDF</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                <?php 
                    if (sizeof($datos->result()) == 0) 
                    {
                        echo '<h3 class="text-danger">No hay productos que mostrar !!!</h3>';
                    }
                    else
                    {
                ?>
                    <table class="table negociosD cell-border" id="inventarioProductos">
                        <thead>
                            <tr>
                                <th style="color: #000000">No</th>
                                <th style="color: #000000">Producto</th>
                                <th style="color: #000000">Cantidad</th>
                                <th style="color: #000000">Precio</th>
                                <th style="color: #000000">Lugar</th>
                                <th style="color: #000000">Estado</th>
                                <th style="color: #000000">Creado Por</th>
                                <th style="color: #000000">Opción</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $ime=1;
                            foreach ($datos->result() as $filaProducto)
                            {
                        ?>
                            <tr>
                                <td class="text-center"><span><?= $ime ?></span></td>
                                <td><?= $filaProducto->Nombre_Producto ?></td>
                                <td><?= $filaProducto->Existencia_Producto ?></td>
                                <td>$<?= $filaProducto->Precio_Producto ?></td>
                                <td><?= $filaProducto->Lugar_Existencia?></td>
                                <td><?= $filaProducto->Estado?></td>
                                <td><?= $filaProducto->Nombre. " ". $filaProducto->Apellido?></td>
                                <td><a href="<?= base_url() ?>inventario/vender_producto/<?= $filaProducto->PK_Id_Inventario ?>" class="text-primary">Vender</a></td>
                            </tr>

                        <?php 
                        $ime++;
                            }
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
    $('#inventarioProductos').DataTable();
} );
</script>