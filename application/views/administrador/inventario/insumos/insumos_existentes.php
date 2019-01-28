<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>
     <div class="col-md-5 align-center">
       
     </div>
    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Insumos</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="card TituloUser" style="height: 60px">
                                    <h3 class="responsive" style="color:white; font-weight:bold;">Insumos disponibles </h3>
                                </div>
    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <div class="text-right">
                <a href="<?= base_url() ?>insumos/" title="Agregar Insumo"><button class="btn btn-primary"><i class="fa fa-plus f-s-20"></i> Agregar nuevo insumo</button></a>
                <?php 
                 if (sizeof($insumos->result()) == 0)
                    {
                        echo '</div><h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                    }
                    else
                    {
                ?>
                <a target="_blank" href="<?= base_url() ?>insumos/reporteInsumos" class="btn btn-danger"><i class="fa fa-file" ></i> Ver en PDF</a>
                </div>
                <strong><span style="background-color: rgba(255, 0, 0, 0.2); color: rgba(255, 0, 0, 0)"> ... </span> Has sobrepasado la cantidad minima en stock</strong>
                    <table class="table negociosD text-cell" id="inventarioInsumos">
                        <thead>
                            <tr>
                                <th style="color: #000000">No</th>
                                <th style="color: #000000">Nombre del insumo</th>
                                <th style="color: #000000">Cantidad</th>
                                <th style="color: #000000">Precio</th>
                                <th style="color: #000000">Medida</th>
                                <th style="color: #000000">Tipo</th>
                                <th style="color: #000000">Operación</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $ime=1;
                            foreach ($insumos->result() as $filaInsumos)
                            {
                                if (($filaInsumos->Cantidad_Minima + 2) < $filaInsumos->Existencia_Insumo)
                                {
                                    
                                    echo '<tr>';
                                }
                                else
                                {
                                    echo '<tr style="background-color: rgba(255, 0, 0, 0.2);">';
                                }
                           ?> 
                                    <td><span><?= $ime ?></span></td>
                                    <td><span><?= $filaInsumos->Nombre_Insumo ?></span></td>
                                    <td><span><?= $filaInsumos->Existencia_Insumo ?></span></td>
                                    <td><span><?= $filaInsumos->Precio_Insumo ?></span></td>
                                    <td><span><?= $filaInsumos->Medida_Insumo ?></span></td>
                                    <td><span><?= $filaInsumos->Nombre_Tipo ?></span></td>
                                    <td>                                
                                        <div class="dropdown" align="center">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                            <ul class="dropdown-menu">  
                                                <li><a href="<?= base_url() ?>insumos/eliminarInsumo?i=<?= $filaInsumos->PK_Id_Insumo?>"><i class="fa fa-trash-o fa-lg"></i> Eliminar</a></li>
                                                <li><a href="<?= base_url() ?>insumos/datosInsumo?i=<?= $filaInsumos->PK_Id_Insumo?>"><i class="fa fa-edit fa-lg"></i> Editar</a></li>
                                              
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
    $('#inventarioInsumos').DataTable();
} );
</script>