<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>
     <div class="col-md-5 align-center">
     </div>
    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Recetas de productos</a></li>
            <li class="breadcrumb-item active">Existentes</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card TituloUser" style="height: 60px">
            <h3 class="responsive" style="color:white; font-weight:bold;"> Recetas disponibles</h3>
        </div>
        <div class="card">
            <div class="card-title">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <?php 
                    if (sizeof($datos->result())==0)
                    {
                      echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>'; 
                    }
                    else
                    {

                ?>
                    <table class="table negociosD cell-border" id="inventarioRecetas">
                        <thead>
                            <tr>
                                <th class="text-center" style="color: #000000">No</th>
                                <th class="text-center" style="color: #000000">Producto</th>
                                <th class="text-center" style="color: #000000">Precio</th>
                                <th class="text-center" style="color: #000000">Lugar</th>
                                <th class="text-center" style="color: #000000">Creado Por</th>
                                <th class="text-center" style="color: #000000">Opción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $ime=1;
                            foreach ($datos->result() as $filaProcedimientos)
                            {
                        ?>
                            <tr>
                                <td class="text-center"><span><?= $ime ?></span></td>
                                <td class="text-center"><span><?= $filaProcedimientos->Nombre_Producto ?></span></td>
                                <td class="text-center"><span>$<?= $filaProcedimientos->Precio_Producto ?></span></td>
                                <td class="text-center"><span><?= $filaProcedimientos->Direccion ?></span></td>
                                <td class="text-center"><span><?= $filaProcedimientos->Nombre ?></span></td>
                                <td>
                                     <div class="dropdown" align="center">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                               <li><a href="<?= base_url() ?>Inventario/eliminarReceta?i=<?= $filaProcedimientos->PK_Id_Producto?>"><i class="fa fa-trash-o fa-lg"></i> Eliminar</a></li> 
                                                <li><a href="<?= base_url() ?>inventario/datosProducto?i=<?= $filaProcedimientos->PK_Id_Producto ?>"><i class="fa fa-edit fa-lg"></i> Editar</a></li>  
                                               <li><a href="<?= base_url() ?>inventario/detalleProcedimiento?e=<?= $filaProcedimientos->PK_Id_Producto ?>"><i class="fa fa-plus"></i> Crear Producto</a></li>                            
                                                   
                                            </ul>
                                        </div>

                                </td>


                                
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
    $('#inventarioRecetas').DataTable();
} );
</script>

