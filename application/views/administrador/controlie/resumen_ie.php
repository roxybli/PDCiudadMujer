        <!-- Bread crumb -->
<div class="row page-titles">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>controlie"><h3 class="text-primary"> <i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>

    <div class="col-md-5 align-center">
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingreso y egresos</a></li>
            <li class="breadcrumb-item active">Resumen</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-12"><div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Resumen de ingresos y egresos</h3>
    </div>
        <div class="card">
            <div class="card-title">
            </div>
            <div class="card-body" >
                <div>
                    <form class="form" method="post" action="<?= base_url() ?>controlie/resumenMensualIE">
                        <div class="row ">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <strong><label  style="color: #000000">Seleccione un mes</label></strong>
                                </div>
                            </div>
                            <div class="col-md-8">
                                   <select name="mesResumen" class="form-control" id="departamentoResumen" required>
                                        <option value=""></option>
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>  
                            </div>
                            <!--/span-->
                            <div class="col-md-2">
                                    <button class="btn btn-primary">Aceptar</button>
                            </div>

                            <!--/span-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- End Container fluid  -->

