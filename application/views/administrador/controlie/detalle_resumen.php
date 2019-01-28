<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>controlie/resumenIE"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">

     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingresos y egresos</a></li>
            <li class="breadcrumb-item active">detalles</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
         <div class="col-lg-12">
            <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Ingresos y egresos</h3>
    </div>
            <div class="card">
                <div class="card-title">
                </div>
                <div class="card-body">
                <?php 
                    if (sizeof($ingresos->result())==0)
                    {
                       echo '<h3 class="text-danger text-center">No hay datos que mostrar</h3>';
                    }
                    else
                    {
                ?>
                    <table class="table table-bordered negociosD">
                        <tr>
                            <td colspan="2" class="text-right"><a href="<?= base_url() ?>controlie/resumenMensualIEPDF/<?= $mes ?>" style="height: 40px; font-size: medium;"  target="_blank" class="btn btn-danger btn-sm"><i class="fa fa-file"></i>Ver en PDF</a></td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-center" style="color:#000; background-color: rgba(0, 13, 90, 0.2)">INGRESOS</th>
                        </tr>
                        <tr >
                            <td class="text-center">NOMBRE</td>
                            <td class="text-center">MONTO</td>
                        </tr>

                        <?php 
                        $totalI=0;
                            foreach ($ingresos->result() as $ingresos)
                            {
                        ?>
                            <tr>
                                <td class="text-center"><?= $ingresos->Nombre_Ingreso?></td>
                                <td class="text-center">$<?= $ingresos->Cantidad_Ingreso ?></td>
                            </tr>
                        <?php $totalI = $totalI + $ingresos->Cantidad_Ingreso;  } ?>
                        <tr style="font-style: bold; background: #f8efef; color: #060606">
                            <td class="text-center"><strong>Total de ingresos</strong></td>
                            <td class="text-center"><strong>$<?= $totalI ?></strong></td>
                        </tr>

                        <tr>
                            <th colspan="2" class="text-center" style="color:#000; background-color: rgba(0, 13, 90, 0.2)">EGRESOS</th>
                        </tr>
                        <?php 
                        $totalE=0;
                            foreach ($egresos->result() as $egresos)
                            {
                        ?>
                            <tr>
                                <td class="text-center"><?= $egresos->Nombre_Egreso?></td>
                                <td class="text-center">$<?= $egresos->Cantidad_Egreso ?></td>
                            </tr>
                        <?php $totalE = $totalE + $egresos->Cantidad_Egreso;  } ?>
                        <tr style="font-style: bold; background: #f8efef; color: #060606">
                            <td class="text-center"><strong>Total de egresos</strong></td>
                            <td class="text-center"><strong>$<?= $totalE ?></strong></td>
                        </tr>

                        

                    </table>    
                    <?php } ?>

                </div>
            </div> 
        </div>
    </div>
</div>


