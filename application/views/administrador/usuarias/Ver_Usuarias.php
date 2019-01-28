<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
<?php 
foreach ($registro->result() as $info2) {
}
?>
 <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Nuevo usuaria</li>
                    </ol>
                    <a onclick=""></a>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
<div class="container-fluid">
    <div class="row">
                    <div class="col-lg-12"><div class="card TituloUser" style="height: 60px">
                        <h3 class="responsive" style="color:white; font-weight:bold;">Usuarias Registradas</h3></div>
                    <div class="card">
                            <div class="card-body">
                                <h1 style="margin:5px;"><?php echo $info2->Nombre_Sede?></h5>
                                <div class="table-responsive m-t-40">
                                    <h2  style="color: #000000; font-size: medium;">Usted puede descargar los datos en los siguientes formatos copiar, CSV, Excel, PDF & Print</h6>
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead >
                                            <tr style="background'color:#0005da; color:white;">
                                                <th style="background'color:#0005da; color:white;"> No.</th>
                                                <th>Nombre completo</th>
                                                <th>Dirección</th>
                                                <th>Tipo de usuaria</th>
                                                <th>Teléfono</th>
                                                <th>Periodo de inactividad</th>
                                                <th>Operación</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nombre completo</th>
                                                <th>Dirección</th>
                                                <th>Tipo de usuaria</th>
                                                <th>Teléfono</th>
                                                <th>Periodo de inactividad</th>
                                                <th>Operación</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                        $ime=1;
                                                foreach ($registro->result() as $info) { 
                                                    echo "<tr>";  
                                                    echo "<td id='ni' style='color: #000000'>".$ime."</td> ";
                                                    echo "<td id='nom' style='color: #000000'>".$info->Nombre." ".$info->Apellido."</td>";
                                                    echo "<td id='cat' style='color: #000000'>".$info->Direccion."</td>";
                                                    echo "<td id='cat' style='color: #000000'>".$info->Tipo."</td>";
                                                    echo "<td id='cat' style='color: #000000'>".$info->Telefono."</td>";
                                                    $ime++;
                                                    $fechaActual = date("Y-m-d");
                                                    $fecha2=$info->Fecha_Actividad;
                                                     
                                                    $id=$info->pk_Id_Usuaria;
                                                    $inicio = strtotime($fechaActual);
                                                     $fin = strtotime($fecha2);
                                                     $dif = $inicio - $fin;
                                                     $diasFalt = (( ( $dif / 90 ) / 90 ) / 24);
                                                     if($fecha2==null)
                                                     {
                                                        echo "<td id='cat' ><span style='display:block;' class='alert alert-warning'>Nueva usuaria</span></td>";
                                                        echo '<td><div class="dropdown" align="center">
                                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li onclick="NoDelete()"><a title="Este usuario esta activo no se puede eliminar" ><i  class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a> </li>
                                                                    <li><a href="'.base_url().'/Emprendedoras/editar?id='.$id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></li></ul>
                                                                </div></td>';

                                                     }
                                                     else{
                                                     if($diasFalt>90){
                                                        echo "<td id='cat' ><span style='display:block;' class='alert alert-danger'>Dias inactivo: ".round($diasFalt,0)."</span></td>";
                                                        echo '<td><div class="dropdown" align="center">
                                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a onclick="Eliminar($id)" class="btn btn-danger m-b-10 m-l-5"><i class="fa fa-trash-o" aria-hidden="true"></i>Eliminar</a></li>
                                                                    <li><a href="'.base_url().'/Emprendedoras/editar?id='.$id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></li></ul>
                                                                </div></td>';  
                                                     }
                                                     else{
                                                        echo "<td id='cat' ><span style='display:block; color:#000000;' class='alert alert-success'>Dias inactivo: ".round($diasFalt,0)."</span></td>";
                                                        echo '<td><div class="dropdown" align="center">
                                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li onclick="NoDelete()"><a  title="Este usuario esta activo no se puede eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a> </li>
                                                                    <li><a href="'.base_url().'/Emprendedoras/editar?id='.$id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></li></ul>
                                                                </div></td>';
                                        
                                                     }
                                                     }
                                                }
                                            ?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
                <!-- End PAge Content -->
</div>
<script type="text/javascript">
    function Eliminar(id){
        var idU =id;
         swal({
            title: "Esta seguro que desea eliminar este registro ?",
            text: "Usted eliminara todos los registros pertenecietes a esta usuaria !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, Eliminar !!",
            cancelButtonText: "No, Cancelar !!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal("Eliminada!!", "Registro eliminado con exito !!", "success");
                document.location= '<?= base_url()?>Emprendedoras/eliminarUsuaria?id='+idU;
            }
            else {
                swal("Cancelado !!", "Proceso cancelado !!", "error");
            }
        });
    }
    function NoDelete(){
        toastr.warning('Esta usaria esta activa no se puede eliminar','Aviso',{
        "positionClass": "toast-bottom-full-width",
        timeOut: 5000,
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "tapToDismiss": false

    })
        //alert("Hola");
    }
</script>
