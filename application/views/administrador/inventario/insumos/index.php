<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>insumos/insumosExistentes"> <h3 class="text-primary"> <i class="fa fa-chevron-left"></i> Volver</h3></a>
     </div>

     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Ingresar nuevos insumos</h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Recetas de productos</a></li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <p class="text-danger"><b>Indicaciones</b><br>(*) Todos los campos son requeridos.</p>
            </div>
            <div class="card-body">
                <div id="cabeceraReceta">
                    <form class="form-valide" action="#">                                    
                    <!--/row-->
                        <div class="row ">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" ><h4 style="color: #000000">Cantidad de insumos </h4></label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" min="1" max="10" id="cantidadInsumos" onkeypress="return numeros(event, 'num')" name="" placeholder="Cantidad de insumos"  required>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div align="right">
                        <button type="button" id="numeroInsumos" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20" ></i> Aceptar</button>
                    </div></form>
                </div>

            <form class="form-valide" method="post" action="<?= base_url() ?>insumos/guardarInsumos" id="tablaInsumos">
			</form>
                    
            </div>
        </div>
    </div>
</div> 
</div>
<script type="text/javascript">
</script>