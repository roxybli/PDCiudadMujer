
<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
    <a href="<?=base_url() ?>controlie/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>
     <div class="col-md-5 align-center">
      
     </div>
    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingresos y egresos</a></li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Control de ingresos y egresos</h3>
    </div>
         
        <div class="card">
            <div class="card-title">
                <p class="text-danger"><b>Indicaciones</b><br>(*) Todos los campos son requeridos.</p>
            </div>
            <div class="card-body">
                <div id="cabeceraIE">
                    <form class="form-valide">                                    
                    <!--/row-->
                        <div class="row ">
                            <div class="col-md-3">
                                <div class="form-group">
                                <label style="color: #000000">Fecha</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="fechaIE" name="fechaIE" placeholder="Fecha" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                <label  style="color: #000000">Acción</label>
                                    <div class="input-group">
                                        <button type="button" id="procesarIE" class="btn btn-primary btn-flat "><i class="fa fa-share-square-o f-s-20"></i> Empezar</button>
                                         <p> &nbsp; </p><button type="button" id="agregarIE" class="btn btn-primary btn-flat "><i class="fa fa-plus f-s-20"></i> Agregar Nuevos</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="Ingresos">
                                <div class="form-group">
                                    <strong><label>Cantidad de Ingresos</label></strong>
                                    <div class="input-group">
                                        <input type="number" value="0" max="10" class="form-control" id="cantidadIngresos" name="" min="0" placeholder="Cantidad de ingresos" onkeypress="return numeros(event, 'num')"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="Egresos">
                                <div class="form-group">
                                <label>Cantidad de egresos</label>
                                    <div class="input-group">
                                        <input type="number" value="0" class="form-control" id="cantidadEgresos" name="" min="0" max="10" placeholder="Cantidad de egresos" onkeypress="return numeros(event, 'num')"  required>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                        <!--/row-->

                        
                    </form>
                    <hr>
                </div>

            <form class="form-valide" method="post" action="<?= base_url() ?>controlie/guardarDatos" id="tablaIE" >  
            <?php
                //Ingresos Existentes
            if (sizeof($ingresos->result()) > 0)
            {
                echo '<p class="text-warning" >Ingresos</p>';
                foreach ($ingresos->result() as $ingresosF)
                {
                ?>
                        <div class="row ">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" value="<?= $ingresosF->Nombre_Ingreso ?>" class="form-control" id="" name=""  readonly style="color: #000000">
                                            <input type="hidden" value="<?= $ingresosF->Nombre_Ingreso ?>" class="form-control" id="" name="ingresosN[]"   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="" name="ingresosD[]" value=""  onkeypress="return numeros(event, 'num')"  required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                 <?php
                }
            }    
                //Egresos Existentes
            if (sizeof($ingresos->result()) > 0)
            {
                echo '<p class="text-warning" >Egresos</p>';
                foreach ($egresos->result() as $egresosF)
                {

                    echo '<div class="row ">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">';
                     echo  '               <input type="text" value="'.$egresosF->Nombre_Egreso.'" class="form-control" id="" name="" style="color:#000000" readonly>';
                     echo  '               <input type="hidden" value="'.$egresosF->Nombre_Egreso.'" class="form-control" id="" name="egresosN[]" placeholder="">';

                     echo '             </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">';
                    echo  '               <input type="text" value=" " class="form-control" id="" name="egresosD[]" onkeypress="return numeros(event, \'num\')"  placeholder="">';
                    echo '                  </div>
                                    </div>
                                </div>
                        </div>';
                }
            } 
            
            ?>
            <div align="right">
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" id="btnIE"><i class="fa fa-share-square-o f-s-20"></i> Iniciar proceso</button></div>
                <input type="hidden" name="fechaIE" value="" id="fechaIngresosEgresos">
			</form>
                    
            </div>
        </div>
    </div>
</div> 
</div>

<script>
    $(function() {
        $("#agregarIE").click(function() {
            $(this).slideUp();
            $("#Ingresos").slideDown(100);
            $("#Egresos").slideDown(100);
            $("#procesarIE").slideDown(100);
            $("#btnIE").slideUp(100);
        });
    });
</script>
