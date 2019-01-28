<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>
     <div class="col-md-3 align-center"> 
     </div>
    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Negocios</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card Titulouser">
        <h3 class="responsive" style="color:white; font-weight:bold;">Negocios disponibles </h3>
     </div>
            <div class="card-title">

            </div>
            <div class="card-body">
                <div class="table-responsive">
                <div class="text-right">
                <a href="<?= base_url() ?>capital/" title="Agregar Insumo"><button class="btn btn-primary"><i class="fa fa-plus f-s-20"></i> Agregar nuevo Negocio</button></a>
                <?php 
                 if (sizeof($capital->result()) == 0)
                    {
                        echo '</div><h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                    }
                    else
                    {

                ?>
                <a target="_blank" href="<?= base_url() ?>capital/detalleNegocioPDF" class="btn btn-danger"> Ver en PDF</a>
                </div>
                
                    <table class="table negociosD text-cell" id="inventarioInsumos">
                        <thead>
                            <tr>
                                <th style="color: #000000">Nombre del Negocio</th>
                                <th style="color: #000000">Operación</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($capital->result() as $filaCapital)
                            {
                                if (($filaCapital->Cantidad_Minima + 2) < $filaCapital->Existencia_Capital)
                                {
                                    
                                    echo '<tr>';
                                }
                                else
                                {
                                    echo '<tr style="background-color: rgba(255, 0, 0, 0.2);">';
                                }
                           ?> 
                               
                                    <td><span><?= $filaCapital->Nombre_Capital ?></span></td>
                                    
                                    <td><span><?= $filaCapital->Nombre_Tipo ?></span></td>
                                    <td>                                
                                        <div class="dropdown" align="center">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?= base_url() ?>capital/datosCapital?i=<?= $filaCapital->PK_Id_Elemento_Subrubro?>"><i class="fa fa-edit fa-lg"></i> Editar</a></li>
                                                <li><a href="<?= base_url() ?>capital/eliminarCapital?i=<?= $filaCapital->PK_Id_Insumo?>"><i class="fa fa-trash-o fa-lg"></i> Eliminar</a></li>
                                            </ul>
                                        </div>
                                    </td>                                  
                                </tr>
                        <?php    
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
   // $('#inventarioInsumos').DataTable();
} );
</script>