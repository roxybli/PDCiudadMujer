<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/productos_disponibles"><h3 class="text-primary"> <i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>

     <div class="col-md-5 align-center">
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Inventario</a></li>
            <li class="breadcrumb-item active">Ventas realizadas</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Ventas Realizadas</h3>
    </div>
        <div class="card">
            <div class="card-title text-right">
                     <a target="_blank" style="height: 40px; font-size: medium;"  href="<?= base_url() ?>inventario/reporteVentas" class="btn btn-danger"><i class="fa fa-file"></i>  Ver en PDF</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                 <?php 
                    if (sizeof($datos->result())== 0) {
                        echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                    }
                    else
                    {
                ?>
                    <table class="table negociosD" id="ventasRealizadas">
                        <thead>
                            <tr>
                                <th style="color: #000000">No</th>
                                <th style="color: #000000">Producto</th>
                                <th style="color: #000000">Cantidad</th>
                                <th style="color: #000000">Precio</th>
                                <th style="color: #000000">Total</th>
                                <th style="color: #000000">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $ime=1;

                            foreach ($datos->result() as $filaProducto)
                            {$fecha = new DateTime($filaProducto->Fecha_Venta);
                        $fecha = $fecha->format("d-m-Y");
                        ?>
                            <tr>
                                <td><?= $ime ?></td>
                                <td><?= $filaProducto->Nombre_Producto ?></td>
                                <td><?= $filaProducto->Cantidad_Venta ?></td>
                                <td>$<?= $filaProducto->Precio_Producto ?></td>
                                <td>$<?= $filaProducto->Cantidad_Venta * $filaProducto->Precio_Producto ?></td>
                                <td><?=  $fecha ?></td>
                                
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
    $('#ventasRealizadas').DataTable();
} );
</script>