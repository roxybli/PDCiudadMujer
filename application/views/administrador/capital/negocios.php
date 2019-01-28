<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>capital"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>

     <div class="col-md-5 align-center">
       
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">Negocios</li>
        </ol>
    </div>
</div>
<div class="container-fluid"> 
    <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Capital Inicial</h3>
    </div>
        <div class="card">            
            <div class="card-body">
                <div id="">
                    <form method="post" action="<?= base_url() ?>capital/detalleCapital">
                        <div class="row">
                            <div class="col-md-10">
                                <div>
                   <h5 style="color: #000" align="justify"> Selecciona un Rubro para más información sobre los insumos y equipos necesarios para iniciar un negocio</h5><br>
                </div>
                                <select name="rubro" class="form-control" required>

                                    <option value="">Elija uno de los siguientes rubros </option>
                                <?php 

                                    foreach ($datos->result() as $filaDatos) {
                                       
                                    ?>
                                    <option value="<?= $filaDatos->PK_Id_Rubro?>"><?= $filaDatos->Nombre_Rubro ?></option>

                                <?php } ?>
                                </select>   
                                
                            </div>
                            
                        </div>
                        <div class="col-md-12" align="right">
                                <button type="submit" class="btn btn-primary">Siguiente <i class="fa fa-angle-double-right f-s-20"></i></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
</div>

