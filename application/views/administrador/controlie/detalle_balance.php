<div class="row page-titles" >
    <div class="col-md-3 align-self-center">
        <a href="<?= base_url() ?>controlie/balances"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-6 align-center">
     </div>
    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Balance</a></li>
            <li class="breadcrumb-item active">detalles</li>
        </ol>
    </div>
</div>
<div class="container-fluid" >
<div class="row">
    <div class="col-lg-12">
        <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Detalle del Balance</h3>
    </div>
        <div class="card">
            <div class="card-title text-right" >
              <a style="height: 40px; font-size: medium;" href="<?= base_url() ?>controlie/detalleBalancePDF/<?= $fecha ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fa fa-file"></i> Ver en PDF</a>
          </div>
            <div class="card-body">
               <div class="table-responsive">
                <?php 
                 if (sizeof($datos->result()) == 0)
                    {
                        echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                    }
                    else
                    {
                ?>
                    <table class="table detalleB" id="resumenB">
                        <thead style="background:#bbc2d8">
                        <tr >
                             <th style="background:#bbc2d8">No</th>
                            <th style="background:#bbc2d8">Fecha</th>
                            <th style="background:#bbc2d8">Operación</th>
                            <th style="background:#bbc2d8">Egreso de dinero</th>
                            <th style="background:#bbc2d8">Ingreso</th>
                            <th style="background:#bbc2d8">Balance</th>
                            <th style="background:#bbc2d8"></th>   
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $contador=0;
                        $ime=0;
                        $imei=1;
                            foreach ($datos->result() as $filaDatos)
                            {
                                $fecha = new DateTime($filaDatos->Fecha_Balance);
                                    $fecha = $fecha->format("d-m-Y");
                                
                           ?> 
                               <tr>
                                <td ><span><?= $imei ?></span></td>
                                    <td ><span><?= $fecha ?></span></td>
                                    <td ><span><?= $filaDatos->Nombre_Operacion ?> -<?= $filaDatos->Nombre_Egreso ?></span></td>
                                    <td ><span>$<?= $filaDatos->Cantidad_Egreso ?></span></td>
                            <?php 
                                if ($contador == 0)
                                {
                                    $ime = $filaDatos->Total_Ingreso;
                                    echo '<td ><span>$ '.$filaDatos->Total_Ingreso.' </span></td>';     
                                }
                                else
                                {
                                    echo '<td ><span>$ '.$ime .'</span></td>';
                                }
                                $ime = $ime - $filaDatos->Cantidad_Egreso;
                            ?>
         
                                    <td ><span>$<?= $ime ?></span></td>
                                    <td ><span></span></td>
                                    
                                </tr>
                        <?php    
                                  $contador++;
                                  $imei++;

                            }

                    }
                         ?>
                        <tr>
                            <td colspan="4" class="text-center"><h3>Total</h3></td>
                            <td colspan="2"> <a href="#"><span class="btn btn-primary form-control">$<?= $ime?>
                            </span></a></td>
                        </tr>
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
    $('#resumenB').DataTable();
} );
</script>