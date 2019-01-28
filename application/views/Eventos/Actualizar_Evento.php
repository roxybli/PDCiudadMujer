<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<?php 
foreach ($eventos->result() as $event) {
    # code...
}
?>
<div class="container-fluid" id="DivEventList">
  <div class="row">
     <div class="col-md-12"><br>
      <div class="card TituloUser" style="height: 60px">
              <h3 class="responsive" style="color:white; font-weight:bold;">Editar Eventos</h3>  
        </div>
       <div class="card">
          <div class="card-body">
             
           <form class="form-valide" action="<?= base_url()?>Eventos/ActualizarEvento" method="post">         
                <div class="row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <p  style="color: #000000">Seleccione la fecha de inicio.</p>
                            <input type="text" class="form-control input-rounded" placeholder="Seleccione la fecha de inicio" name="fecha_inicio" id="fecha_inicio" value="<?= $event->fecha_inicio?>" >
                            <input type="text" hidden class="form-control input-rounded" placeholder="Seleccione la fecha de inicio" name="id_evento" id="id_evento" value="<?= $event->id_evento?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <p  style="color: #000000">Seleccione la fecha de fin.</p>
                            <input type="text" class="form-control input-rounded" placeholder="Seleccione la fecha de fin" name="fecha_fin" id="fecha_fin" value="<?= $event->fecha_fin?>">
                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p style="color: #000000">Inserte un tittulo para el evento</p>  
                            <input type="text" class="form-control input-rounded" id="titulo_evento" name="titulo_evento" onkeyup="this.value=NumText(this.value)" placeholder="Titulo del evento" value="<?= $event->titulo_evento?>"> 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p  style="color: #000000">Inserte la ubicacion del evento.</p>
                             <input type="text" class="form-control input-rounded"" id="ubicacion" name="ubicacion" onkeyup="this.value=NumText(this.value)" placeholder="Ubicacion del evento" value="<?= $event->ubicacion?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p  style="color: #000000">Inserte la descripcion del evento.</p>
                            <textarea  class="form-control" style="height:150px;"  id="contenido_evento" name="contenido_evento" onkeypress="this.value=NumText(this.value)" placeholder="Descripcion del evento"><?= $event->contenido_evento?></textarea>
                        </div>
                    </div>
                   <div class="row" align="right" style="margin-left: 830px">
                        <div class="col-md-12" align="right" >
                        <a  class="btn btn-secondary" style="color:white;margin:10px;" data-dismiss="modal" onclick="location.href='<?=base_url()?>Eventos/'"><i class="fa fa-close" ></i>Regresar</a>
                        <button class="btn btn-primary" style="color:white;margin:10px;"><i class="fa fa-pencil-square-o"></i>Editar</button>
                </div>
            </div>
            </div>
            </form>
          </div>
      </div> 
    </div>  
  </div>
</div>

<script type="text/javascript">
    $.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
                };
    $('#fecha_inicio').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',

            });
    $('#fecha_fin').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',

            });
</script>