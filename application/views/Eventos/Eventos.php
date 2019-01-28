<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

<style>
thead tr{
  background: #ffffff;
}

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-body">
                    <h1 class="card-title TituloUser">Calendario de Eventos Ciudad Mujer El Salvador</h1><br>
                    <h1 class="card-title" style="color: #000000" ></h1>
                    <div class="row">
                    <?php 
                    if($this->session->userdata('id_tipo')==1 or $this->session->userdata('id_tipo')==2){
                      echo '<div class="col-md-12" align="right">
                            <a class="btn btn-primary" style="color:white;" data-toggle="modal" data-target="#ModalInsert"><b><i class="fa fa-calendar" ></i> Insertar evento</b></a>
                            </div>';
                    }
                    ?>
                    </div>
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Lista de eventos-->
<div class="container-fluid" id="DivEventList">
  <div class="row">
     <div class="col-md-12">
       <div class="card">
          <div class="card-body">
           <h1>No hay fechas seleccionadas</h1>
          </div>
      </div> 
    </div>  
  </div>
</div>
<!-- Modal insert -->
<div class="modal fade" id="ModalInsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#a4cb3a;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white;">Insertar un nuevo evento</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <div class="modal-body">
       <div class="form-validation">
            <!-- Bread crumb -->
            <form class="form-valide" action="<?= base_url()?>Eventos/InsertarEvento" method="post">         
                <div class="row ">
                <div class="col-md-6">
                  <div class="form-group">
                      <div class="form-group">
                            <p class=" m-b-15 f-s-16 etiquetas">Seleccione la fecha de inicio.</p>
                            <input type="text" class="form-control input-rounded" placeholder="Seleccione la fecha de inicio" name="fecha_inicio" id="fecha_inicio">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <div class="form-group">
                            <p class="m-b-15 f-s-16 etiquetas">Seleccione la fecha de fin.</p>
                            <input type="text" class="form-control input-rounded" placeholder="Seleccione la fecha de fin" name="fecha_fin" id="fecha_fin">
                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p class="m-b-15 f-s-16 etiquetas">Inserte un títtulo para el evento</p>  
                            <input type="text" class="form-control input-rounded" id="titulo_evento" name="titulo_evento" onkeyup="this.value=NumText(this.value)" placeholder="Titulo del evento" required> 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p class="m-b-15 f-s-16 etiquetas">Inserte la ubicación del evento.</p>
                             <input type="text" class="form-control input-rounded"" id="ubicacion" name="ubicacion" onkeyup="this.value=NumText(this.value)" placeholder="Ubicacion del evento" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <p class="m-b-15 f-s-16 etiquetas">Inserte la descripción del evento.</p>
                            <textarea  class="form-control" style="height:150px;"  id="contenido_evento" name="contenido_evento" onkeypress="this.value=NumText(this.value)" placeholder="Descripcion del evento, requisitos de asistencia, hora de inicio, documentación necesarias, entre otros." required></textarea>
                        </div>
                    </div> <div class="col-md-12"  align="right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='<?=base_url()?>Eventos/'"><i class="fa fa-close" ></i>Regresar</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" ></i>Guardar</button></div>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
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
  $(document).ready(function() {

    $('#calendar').fullCalendar({
      defaultView: 'month',
      locale: 'es',
      defaultView: 'month',


    dayClick: function(date, jsEvent, view) {
    //alert('Pressionando un evento!' + date.format());
     consultarEvento(date.format());
      },
     events: function(start, end, timezone, callback) {
            $.ajax({
                url: '<?php echo base_url() ?>Eventos/listarEventos',
                dataType: 'json',
                data: {},
                success: function(msg) {
                    var events = [];
                    $(msg).each(function() {
                    //alert($(this).attr('titulo_evento'))
                    events.push({
                    title: $(this).attr('titulo_evento'),
                    start: $(this).attr('fecha_inicio'), // will be parsed
                    end:$(this).attr('fecha_fin'),
                    });
                  });
                  callback(events);
                }
            });
       }
      
      
    });//FIN DEL CALENDARIO

  });
    function consultarEvento(fecha){
      var id ="<?php echo $this->session->userdata('id_tipo')?>";
      //alert('eviamos la fecha '+fecha+" ----<?= base_url()?>Eventos/prueba?Fecha="+fecha);
      var newfecha= '"'+fecha+'"';
     // alert('El tipo es '+id);
      $.ajax({
        url: '<?= base_url()?>Eventos/prueba?Fecha='+newfecha,
        Type: 'GET',
        data: {},
        success: function(respuesta) {
         // alert('aqui esta la fecha');
          var registro  = eval(respuesta);
          var registros = eval(respuesta);
          var html ="";

      
          if(registros.length>0){
        
            //alert('hay');
            for (var i = 0; i < registro.length; i++) {

              html+=' <div class="row" ><div class="col-md-12 "><div class="card"  style=" background:#CEF6CE"; color:#000> <div class="card-body"> <p style="font-size:large; font-style: bold">'+registro[i]['titulo_evento']+'</p>'
              if(registro[i]['fecha_inicio']==registro[i]['fecha_fin']){
                html+='<p style="color: #000000"> Fecha del evento:'+registro[i]['fecha_inicio']+'</p>';
              }
              else{
                html+='<p style="color: #000000">Fecha del evento: '+registro[i]['fecha_inicio']+' hasta el: '+registro[i]['fecha_fin']+'</p>';
              }
              html+='<p style="color: #000000">Descripción: '+registro[i]['contenido_evento']+'</p><p style="color: #000000">Dirección: '+registro[i]['ubicacion']+'</p>'+ '<br></div></div><div></div>';
              if(id ==1 || id==2){
               // alert(registro[i]['id_evento']);
                html+= "<div align='right' style='background: #fff; padding: 10px; ' ><a class='btn btn-danger'' href='<?= base_url()?>Eventos/Eliminar?IdE="+registro[i]['id_evento']+"''><i  class='fa fa-trash-o'></i>Elminar </a> "
                html+=" <a class='btn btn-primary' href='<?= base_url()?>Eventos/Actualizar?IdE="+registro[i]['id_evento']+"'><i class='fa fa-pencil-square-o'></i> Editar</a></div> </div></div> </div></div></div>"
              }
              }
            document.getElementById('DivEventList').innerHTML=html;
          }
          else{
            html ='<h1>No hay evetentos en la fecha que seleeciono</h1>';
          }
        }
      });//fin del succes
    }
</script>
                                
  

