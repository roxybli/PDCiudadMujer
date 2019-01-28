<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>controlie/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
       
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingresos y egresos</a></li>
            <li class="breadcrumb-item active">balances</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Balances disponibles</h3>
    </div>
        <div class="card">
            <div class="card-title">
            </div>
            <div class="card-body">
               <div class="table-responsive">
                <?php 
                 if (sizeof($datos->result()) == 0)
                    {
                        echo '<h3 class="text-danger">Usted no posee ningun balance !!!</h3>';
                    }
                    else
                    {

                ?>
                    <table class="table detalleB" id="balancesR">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Fecha</th>
                                <th width="39%">Información</th>
                                <th width="20%">Operación</th>                              
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $contador=0;
                        $ime=1;
                            foreach ($datos->result() as $filaDatos)
                            {
                                $fecha = new DateTime($filaDatos->Fecha_Balance);
                                    $fecha = $fecha->format("d-m-Y");
                           ?> 
                               <tr>
                                    <td style="color: #000000"><?= $ime ?></td>
                                    <td style="color: #000000"><?= $fecha ?></td>
                                    <td style="color: #000000">Balance correspondiene a esta fecha</td>
                                    <td style="color: #000000"><a href="<?= base_url() ?>controlie/detalleBalance?f=<?= $filaDatos->Fecha_Balance ?>" style="color: #ff0000">Ver detalles</a></td>
                                </tr>
                        <?php    
                         $contador++;
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
    $('#balancesR').DataTable();
} );
</script>