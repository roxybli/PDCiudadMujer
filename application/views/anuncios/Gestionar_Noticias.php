<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
<?php 
foreach ($Anuncios->result() as $noti) {
}
?>
 <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url()?>Anuncios/">Inicio</a></li>
                        <li class="breadcrumb-item active">Gestión de Noticias</li>
                    </ol>
                    <a onclick=""></a>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
<div class="container-fluid">
    <div class="row">
                    <div class="col-lg-12">
                        <div class="card TituloUser" style="height: 60px">
                                    <h3 class="responsive" style="color:white; font-weight:bold;">Gestión de Noticias</h3>  
                                </div>
                    <div class="card">
                            <div class="card-body">
                                  
                                
                                <div class="table-responsive m-t-40">
                                    <h2  style="color: #000000; font-size: medium; padding-top: 0px">Usted puede descargar los datos en los siguientes formatos copiar, CSV, Excel, PDF & Print</h2>
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead >
                                            <tr>
                                                <th>No</th>
                                                <th>Título</th>
                                                <th>Institución</th>
                                                <th>Publicada por</th>
                                                <th>Fecha de publicación</th>
                                                <th>Operación</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $ime=1;
                                                foreach ($Anuncios->result() as $info){ 
                                                    $fecha = new DateTime($info->Fecha);
                                                    $fecha = $fecha->format("d-m-Y");
                                                    echo "<tr>";  
                                                   echo "<td id='ni' style='color: #000000'>".$ime."</td>";  
                                                    echo "<td id='nom' style='color: #000000'>".$info->Titulo."</td>";
                                                    echo "<td id='cat' style='color: #000000'>".$info->Nombre_Institucion."</td>";
                                                    echo "<td id='cat' style='color: #000000'>".$info->Nombre."</td>";
                                                    echo "<td id='cat' style='color: #000000'>".$fecha."</td>";
                                                    $ime++;
                                                    $id=$info->pk_Id_Anuncio;
                                                    //INformacion para editar Noticia
                                                    $idUser1=$info->FK_Id_Usuaria;
                                                    $idEdit=$info->pk_Id_Anuncio;
                                                    $idTipo=$this->session->userdata('id_tipo');
                                                    $idUser2=$this->session->userdata('id');

                                                    echo '<td><div class="dropdown" align="center">
                                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a  onclick="Eliminar('.$idUser1.', '.$idUser2.','.$idTipo.','.$idEdit.')"><i class="fa fa-trash-o"></i> Eliminar</a></li>
                                                                     <li><a onclick="Editar('.$idUser1.', '.$idUser2.','.$idTipo.','.$idEdit.')" ><i class="fa fa-pencil-square-o"></i> Editar</a> </li> 
                                                                      <li><a href="'.base_url().'Anuncios/VerAnuncios?id='.$id.'" ><i class="fa fa-eye"></i> Ver Noticia</a> </li>                                 </ul>
                                                                </div></td>';
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
    function Eliminar(idUser1, idUser2, idTipo,idEdit){
        var idU =idEdit;

        if(idUser1==idUser2 || idTipo==1 ){
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
                document.location= '<?= base_url()?>Anuncios/eliminarAnuncio?id='+idU;
            }
            else {
                swal("Cancelado !!", "Proceso cancelado !!", "error");
            }
        });
        }
        else{
            sweetAlert("Accion no permitida", "Usted no posee permisos para Eliminar esta publicacion", "error");
        }
           }
    function Editar(idUser1, idUser2, idTipo,idEdit){

        if(idUser1==idUser2 || idTipo==1 ){
            document.location= '<?= base_url()?>Anuncios/EditarNoticias?id='+idEdit;
        }
        else{
            sweetAlert("Accion no permitida", "Usted no posee permisos para editar esta publicacion", "error");
        }
    }
</script>
