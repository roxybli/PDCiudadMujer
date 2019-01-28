<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
 <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Instituciones</a></li>
                        <li class="breadcrumb-item active">Gestionar Instituciones</li>
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
                                    <h3 class="responsive" style="color:white; font-weight:bold;">Gestión de Instituciones</h3>  
                                </div>
                        <div class="card">



<!-- Modal insert -->
<div class="modal fade" id="ModalInsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #a4cb3a">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff; font-style: bold">Insertar una nueva Institución</h5>
      </div>
      <div class="modal-body">
       <div class="form-validation">

            <!-- Bread crumb -->
            <form class="form-valide" action="<?=base_url()?>Instituciones/Guardar" method="post">         
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">   
                                <input type="text" class="form-control" id="val-name" name="Nombre_Institucion" placeholder="Nombre de la Institución">
                            </div>
                        </div>
                        <div align="right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"onclick="location.href='<?=base_url()?>Instituciones/'"><i class="fa fa-close" aria-hidden="true"></i>Regresar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Guardar</button>
                    </div>
                </div>
             </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!-- Modal edit -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #a4cb3a">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff; font-style: bold">Editar Información de las Instituciones</h5>
      </div>
      <div class="modal-body">
       <!-- Bread crumb -->
            <form class="form-valide" action="<?=base_url()?>Instituciones/Editar" method="post">         
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">   
                                <input type="text" class="form-control" id="val-name" id="Nombre_Institucion2" name="Nombre_Institucion2" placeholder="Nombre de la Institución">
                                <input type="text" hidden name="ID" id="ID">
                            </div>
                        </div>
                        <div align="right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='<?=base_url()?>Instituciones/'"><i class="fa fa-close" aria-hidden="true"></i>Regresar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</button>
                    </div>
                </div>
            </div>

            </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
  <div align="right" style="margin:0 ,0,0; padding: 0,0,0; height: 60px">
                                    <a class="btn btn-success" style="color:white; padding:10px; margin: 20px;  background-color:#1A237E" data-toggle="modal" data-target="#ModalInsert" ><i class="fa fa-plus-circle" style="margin:10px;" aria-hidden="true"></i>Crear nueva institución</a>
                                </div> 

                            <div class="card-body">
                                <div class="table-responsive m-t-40">
                                     <h2  style="color: #000000; font-size: medium; padding-top: 0px">Usted puede descargar los datos en los siguientes formatos copiar, CSV, Excel, PDF & Print</h2>   
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" >
                                        <thead>
                                            <tr>
                                                <th >No</th>
                                                <th >Nombre de la Institución</th>
                                                <th >Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                           $ime=1;
                                                foreach ($Institucion ->result() as $Instituciones){ 
                                                    echo "<tr>";  
                                                    echo "<td id='ni' style='color: #000000'>".$ime."</td>";  
                                                    echo "<td id='nom' style='color: #000000'>".$Instituciones->Nombre_Institucion."</td>";
                                                    $nombre = "'".$Instituciones->Nombre_Institucion."'";
                                                    $ime++;
                                                     echo '<td><div class="dropdown" align="center">
                                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a onclick="Eliminar('.$Instituciones->Pk_Id_Institucion.')" ><i class="fa fa-trash fa-lg"></i></a>Eliminar</li>
                                                                     <li><a onclick="editar('.$Instituciones->Pk_Id_Institucion.','.$nombre.')" ;" data-toggle="modal" data-target="#ModalEdit"><i class="fa fa-edit fa-lg"></i></a> Editar</li> 
                                                                        </ul>
                                                                </div></td>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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
            title: "¿Esta seguro que desea eliminar esta Institución?",
            text: "Eliminando Institución",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Eliminar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal("Eliminada!!", "Registro eliminado con exito", "success");
                document.location= '<?= base_url()?>Instituciones/Eliminar?id='+idU;
            }
            else {
                swal("Cancelado !!", "Proceso cancelado !!", "error");
            }
        });
    }
    function editar(id, nombre){
        //alert(id);
        document.all('Nombre_Institucion2').value=nombre;
        document.all('ID').value=id;
        //document.getElementById('Nombre_Institucion').value=nombre;



    }
</script>
