<?php 
    foreach ($datos->result() as $filaCabecera)
    {}
?>
<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>capital/negocios"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
        <h3 style="color: #fff">Detalle del negocio <strong><?= $filaCabecera->Nombre_Subrubro   ?></strong></h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">detalle negocio</li>
        </ol>
    </div>
</div>
<div class="container-fluid"><div>
     <div class="card TituloUser" style="height: 60px" >
        <h3 class="responsive" style="color:white; font-weight:bold;">Detalle del negocio <strong><?= $filaCabecera->Nombre_Subrubro   ?></strong></h3>
     </div></div><br><br>
<table class="table table-bordered negociosD" >
    <tr style="height: 40px">
        <td colspan="4" ><a href="<?= base_url() ?>capital/detalleNegocioPDF/<?= $filaCabecera->PK_Id_Subrubro ?>" class="btn btn-danger btn-sm"  style=" height: 40px; font-size: medium;" target="_blank"><i class="fa fa-file "></i> Ver en PDF</a></td>
    </tr>
    <tr>
        <th colspan="2" class="text-center" style="color:#000; background: #fff"> Rubro: <strong><?= $filaCabecera->Nombre_Rubro ?></strong></th>
        <th colspan="2" class="text-center" style="color:#000; background: #fff"> Producción estimada: <strong><?= $filaCabecera->Produccion_Mensual  ?></strong></th>
    </tr>
    <tr>
        <td class="text-center"><strong>Nombre</strong></td>
        <td class="text-center"><strong>Cantidad</strong></td>
        <td class="text-center"><strong>Precio unitario</strong></td>
        <td class="text-center"><strong>Costo</strong></td>
    </tr>
    <tr>
        <td colspan="4  " class="text-center"><h4 style="color: #000000">Equipamiento</h4></td>
    </tr>
    <tr>

    <?php 
    $totalE=0;
        foreach ($datos->result() as $filaCuerpoE)
        {
            if ($filaCuerpoE->Fk_Id_Categoria_Elemento == 1)
            {
                $totalE = $totalE + ($filaCuerpoE->Precio_Elemento * $filaCuerpoE->Cantidad_Elemento );
    ?>
    <tr>
        <td class="text-center"><?= $filaCuerpoE->Nombre_Elemento  ?></td>
        <td class="text-center"><?= $filaCuerpoE->Cantidad_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoE->Precio_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoE->Precio_Elemento * $filaCuerpoE->Cantidad_Elemento  ?></td>
    </tr>

    <?php }} ?>
     <tr  class="totalCapital">
        <td colspan="3" class="text-center"><h6 style="color: #000000"><strong>Total inversión en equipamiento</strong> </h6></td>
        <td class="text-center"><h6 style="color: #000000"><strong>$<?= $totalE; ?> </strong></h6></td>
    </tr>

    <tr>
        <td colspan="4" class="text-center"><h4 style="color: #000000">Insumos</h4></td>
    </tr>
    <tr>

    <?php
    $totalI=0;
        foreach ($datos->result() as $filaCuerpoI)
        {
            if ($filaCuerpoI->Fk_Id_Categoria_Elemento == 2)
            {
                $totalI = $totalI + ($filaCuerpoI->Precio_Elemento * $filaCuerpoI->Cantidad_Elemento  );
    ?>
    <tr>
        <td class="text-center"><?= $filaCuerpoI->Nombre_Elemento  ?></td>
        <td class="text-center"><?= $filaCuerpoI->Cantidad_Elemento  ?> <?= $filaCuerpoI->Medida_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoI->Precio_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoI->Precio_Elemento * $filaCuerpoI->Cantidad_Elemento  ?></td>
    </tr>

    <?php }} ?>
    <tr class="totalCapital">
        <td colspan="3" class="text-center"><h6 style="color: #000000"><strong>Total inversión en insumos </strong></h6></td>
        <td class="text-center"><h6 style="color: #000000"><strong>$<?= $totalI ; ?> </strong></h6></td>
    </tr>

    <tr class="alert-primary">
        <td colspan="3" class="text-center"><h6 style="color: #000000"><strong>Inversión Total</strong></h6></td>
        <td class="text-center"><h6 style="color: #000000"><strong>$<?= $totalE + $totalI ; ?> </strong></h6></td>
    </tr>

</table>
<br><br><h4><strong>NOTA: Los Datos de este documento solo son de refencia los precios pueden variar </strong></h4>
</div>

