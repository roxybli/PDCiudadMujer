<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>capital"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>
     <div class="col-md-5 align-center">
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">Gestionar negocios</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Negocios disponibles</h3>
    </div>
    <div class="card">
        <div class="card-title">
        </div>
        <div class="card-body">
           <?php 
        if (sizeof($datos->result()) == 0 )
        {
          echo '<h3 class="text-danger text-center">No hay datos que mostrar</h3>';
        }
        else
        {
        ?>
            <table class="table negociosD" id="resumenSubrubros">
                <thead>
                    <tr>
                        <th  class="text-center" style="color: #000000" >No</th>
                        <th  class="text-center" style="color: #000000" >Nombre del negocio</th>
                        <th  class="text-center" style="color: #000000">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ime=1;
                        foreach ($datos->result() as $subrubros) {
                    ?>
                    <tr>
                        <td class="text-center"><?= $ime ?></td>
                        <td class="text-center"><?= $subrubros->Nombre_Subrubro ?></td>
                        <td>                                
                            <div class="dropdown" align="center">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    
                                    <li><a href="<?= base_url() ?>capital/eliminarNegocio/<?= $subrubros->PK_Id_Subrubro ?>"><i class="fa fa-trash fa-lg"></i> Eliminar</a></li>
                                    <li><a href="<?= base_url() ?>capital/actualizarNegocio/<?= $subrubros->PK_Id_Subrubro ?>"><i class="fa fa-edit fa-lg"></i> Editar</a></li>
                                </ul>
                            </div>
                        </td>   
                    </tr>
                    <?php 
                     $ime++;
                } }?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
    $('#resumenSubrubros').DataTable();
} );
</script>
