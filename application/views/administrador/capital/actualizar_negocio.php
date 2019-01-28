<?php 
    foreach ($datos->result() as $filaCabecera)
    {}
?>
<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>capital/gestionarNegocio"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">detalle negocio</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Detalle del negocio <?= $filaCabecera->Nombre_Subrubro   ?></h3>
    </div><br><br>

<form action="<?= base_url() ?>capital/actualizarDatosNegocio" method="post">
    <table class="table table-bordered negociosD" >
    <tr>
        <th colspan="2" class="text-center" style="color:#000; background: #fff"> Rubro: <?= $filaCabecera->Nombre_Rubro ?></th>
        <th colspan="2" class="text-center" style="color:#000; background: #fff"> Producción estimada: <?= $filaCabecera->Produccion_Mensual  ?></th>
    </tr>
    <tr>
        <td class="text-center"><strong>Nombre</strong></td>
        <td class="text-center"><strong>Cantidad</strong></td>
        <td class="text-center"><strong>Precio unitario</strong></td>
        <td class="text-center"><strong>Opción</strong></td>
    </tr>

    <tr>

    <?php 
        foreach ($datos->result() as $filaCuerpoE)
        {
            $i = '"'.$filaCuerpoE->Pk_Id_Elemento_Subrubro.'"'; 
           
    ?>
    <tr>
        <td class="text-center"><?= $filaCuerpoE->Nombre_Elemento  ?></td>
        <td class="text-center"><input type="text"  onkeypress="return numeros(event, 'num')" value="<?= $filaCuerpoE->Cantidad_Elemento  ?>" class="form-control text-center" name="cantidadElemento[]"></td>
        <td class="text-center"><input type="text"  onkeypress="return numeros(event, 'num')" value="<?= $filaCuerpoE->Precio_Elemento ?>" class="form-control text-center" name="precioEquipamiento[]">
        <input type="hidden" value="<?= $filaCuerpoE->Pk_Id_Elemento_Subrubro ?>" class="form-control text-center" name="idEquipamiento[]">
        </td>
        <td class="text-center"><a onclick="alerta()" title="Eliminar" href="<?= base_url() ?>capital/eliminarElementoSubrubro/<?= $filaCuerpoE->Pk_Id_Elemento_Subrubro ?>/<?= $filaCuerpoE->Fk_Id_Subrubro ?>"><i class="fa fa-trash fa-lg"></i></a>
        </td>
    </tr>

    <?php } ?>

        <tr align="right">
            <td colspan="10"  align="right">
            <input type="hidden" value="<?= $filaCuerpoE->Fk_Id_Subrubro ?>" name="idSubrubro">
             <a style="color:white;" href="<?= base_url() ?>capital/gestionarNegocio" class="btn btn-secondary"><i class="fa fa-times-circle f-s-20" style="margin:4px;"></i>Regresar</a>
            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Editar</button>
            </td>
        </tr>
</table>
</form>
</div>
