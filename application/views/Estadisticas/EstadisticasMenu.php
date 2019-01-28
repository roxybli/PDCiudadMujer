<!DOCTYPE html>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
</head>

    <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Estadisticas</li>
                    </ol>
                </div>
            </div> <div class="card">
            <div class="card TituloUser" style="height: 60px">
                <h3 class="responsive" style="color:white; font-weight:bold;">  Gestión de Estadisticas</h3>  
            </div><div class="card">
                    <form class="form" method="post" action="<?= base_url() ?>controlie/estadisticaMIE" style="padding: 40px">
                    

                        <div class="row">
                        <div class="col-md-6">
                        <label>Inserte la fecha de inicio</label>
                        <div class="input-group">
                            <input type="date" name="FechaInicial" id="fechaInicial" class="form-control">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <label>Inserte la fecha de fin</label>
                        <div class="input-group">
                            <input type="date" name="FechaFinal" id="fechaFinal" class="form-control">
                        </div> 
                        </div> 
                    </div> 
                             <div class="card-title" style="padding-top: 20px; margin-left:570px " align="right" >                                      
                              <a  id="btningresos" class="btn btn-info" style="color:white;"onclick="eliminar()""><i class="fa fa-bar-chart f-s-20" style="margin:10px; width: 20px"></i>Ingresos</a>
                               <a  id="btnegresos" class="btn btn-info" style="color:white;"onclick="eliminar()""><i class="fa fa-bar-chart f-s-20" style="margin:10px; width: 20px"></i>Egresos</a>
                                 <a  id="btnInventario" class="btn btn-info" style="color:white;"onclick="eliminar()"><i class="fa fa-bar-chart f-s-20" style="margin:10px;width: 20px"></i>Inventario </a> 
                                <a  id="btnVentas" class="btn btn-info" style="color:white;" onclick="eliminar()"><i class="fa fa-bar-chart f-s-20" style="margin:10px;width: 20px; color:white;"></i>Ventas</a>
                                  </div></div>
                                 </form>

    <div class="card" > 
        <div style="padding: 40px">
            <div id="contenedor_grafico">                            
                <canvas id="myChart" width="400" height="150"></canvas>
            </div>
    </div>
</div>
                   
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnVentas').on('click', function(){
            var fechaI = $('#fechaInicial').val();
            var fechaF =$('#fechaFinal').val();
            //alert(fechaI+fechaF);
            $.ajax({
                url: "<?= base_url()?>Estadisticas/EstadisticasCargar?FechaInicial="+fechaI+"&FechaFinal="+fechaF,
                method: "GET",
                success: function(data) {
                    var registros = eval(data);
                    console.log('datos'+data);
                    var Productos = [];
                    var Cantidad = [];
                    var bgColor = [];
                    var bgBorder = [];
                    if(registros.length==0){
                        //alert("error")
                        swal("Error", "No se encontraron registros en las fechas que selecciono", "error");
                    }
                    else{
                        for (var i = 0; i < registros.length; i++) {

                        Productos.push(registros[i].Nombre_Producto);
                        Cantidad.push(registros[i].cantidad);
                        var r = Math.random() * 255;
                        r = Math.round(r);
                        var g = Math.random() * 255;
                        g = Math.round(g);
                        var b = Math.random() * 255;
                        b = Math.round(b);
                        bgColor.push('rgba('+r+','+g+','+b+', 0.7)');
                        bgBorder.push('rgba('+r+','+g+','+b+', 3)');

                        console.log(registros[i].Nombre_Producto);
                    }
                    console.log(Productos);
                    console.log(Cantidad);

                    var chartdata = {
                        labels: Productos,
                        datasets : [
                            {
                                label: 'Total de Productos Vendidos',
                                backgroundColor: bgColor,
                                borderColor: bgBorder,
                                hoverBackgroundColor: 'rgba(38, 210, 145, 1)',
                                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                data: Cantidad,
                                borderWidth: 0.3
                            }
                        ]
                    };
                    //Eliminamos y creamos la etiqueta canvas
                    //$('#myChart').remove();
                    //$('#contenedor_grafico').append("<canvas id='myChart' width='400' height='150'></canvas>");
                    var ctx = $("#myChart");

                    var barGraph = new Chart(ctx, {
                        type: 'bar',
                        data: chartdata,
                        options: {
                                scales: {
                                yAxes: [{
                                    
                                    ticks: {

                                        beginAtZero:true
                                        }
                                    }],
                                xAxes:[{

                                   
                                    barThickness : 73

                                }]
                        
                                }
                        }
            });
                    }
                    
        },
        error: function(data) {
            console.log(data);
        }
    });
        });

           //EVENTO PARA ESTADICTICAS DE INGRESOS
        $('#btningresos').on('click', function(){
            var fechaI = $('#fechaInicial').val();
            var fechaF =$('#fechaFinal').val();
            //alert(fechaI+fechaF);
            $.ajax({
                url: "<?= base_url()?>Estadisticas/EstadisticasIngresos?FechaInicial="+fechaI+"&FechaFinal="+fechaF,
                method: "GET",
                success: function(data) {
                    var registros = eval(data);
                    console.log('datos'+data);
                    var Productos = [];
                    var Cantidad = [];
                    var bgColor = [];
                    var bgBorder = [];
                    if(registros.length==0){
                        //alert("error")
                        swal("Error", "No se encontraron registros en las fechas que selecciono", "error");
                    }
                    else{
                        for (var i = 0; i < registros.length; i++) {
                            
                        Productos.push(registros[i].Nombre_Ingreso);
                        Cantidad.push(registros[i].suma);
                        var r = Math.random() * 255;
                        r = Math.round(r);
                        var g = Math.random() * 255;
                        g = Math.round(g);
                        var b = Math.random() * 255;
                        b = Math.round(b);
                        bgColor.push('rgba('+r+','+g+','+b+', 0.7)');
                        bgBorder.push('rgba('+r+','+g+','+b+', 3)');

                        console.log(registros[i].Nombre_Ingreso);
                    }
                    console.log(Productos);
                    console.log(Cantidad);

                    var chartdata = {
                        labels: Productos,
                        datasets : [
                            {

                                label: ' Total de Ingreso',
                                backgroundColor: bgColor,
                                borderColor: bgBorder,
                                hoverBackgroundColor: 'rgba(38, 210, 145, 1)',
                                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                data: Cantidad
                            }
                        ]
                    };
                    //Eliminamos y creamos la etiqueta canvas
                    //$('#myChart').remove();
                    //$('#contenedor_grafico').append("<canvas id='myChart' width='400' height='150'></canvas>");
                    var canvas = document.getElementById("myChart");
                    var ctx = canvas.getContext("2d");
                    //var ctx = $("#myChart");

                    var barGraph = new Chart(ctx, {
                        type: 'bar',
                        data: chartdata,
                        
                        options: {
                       
                         scales: {
                                yAxes: [{
                                    ticks: {

                                        beginAtZero:true
                                        }
                                    }],
                                xAxes:[{
                                    categoryPercentage: 0.1,
                                    barThickness : 70

                                }]

                                }

                        }
            });
                    }
                    
        },
        error: function(data) {
            console.log(data);
        }
    });

        });

        //EVENTO PARA ESTADICTICAS DE EGRESOS
        $('#btnegresos').on('click', function(){
            var fechaI = $('#fechaInicial').val();
            var fechaF =$('#fechaFinal').val();
            //alert(fechaI+fechaF);
            $.ajax({
                url: "<?= base_url()?>Estadisticas/EstadisticasEgresos?FechaInicial="+fechaI+"&FechaFinal="+fechaF,
                method: "GET",
                success: function(data) {
                    var registros = eval(data);
                    console.log('datos'+data);
                    var Productos = [];
                    var Cantidad = [];
                    var bgColor = [];
                    var bgBorder = [];
                    if(registros.length==0){
                        //alert("error")
                        swal("Error", "No se encontraron registros en las fechas que selecciono", "error");
                    }
                    else{
                        for (var i = 0; i < registros.length; i++) {
                            
                        Productos.push(registros[i].Nombre_Egreso);
                        Cantidad.push(registros[i].suma);
                        var r = Math.random() * 255;
                        r = Math.round(r);
                        var g = Math.random() * 255;
                        g = Math.round(g);
                        var b = Math.random() * 255;
                        b = Math.round(b);
                        bgColor.push('rgba('+r+','+g+','+b+', 0.7)');
                        bgBorder.push('rgba('+r+','+g+','+b+', 3)');

                        console.log(registros[i].Nombre_Egreso);
                    }
                    console.log(Productos);
                    console.log(Cantidad);

                    var chartdata = {
                        labels: Productos,
                        datasets : [
                            {

                                label: 'Total de Egreso',
                                backgroundColor: bgColor,
                                borderColor: bgBorder,
                                hoverBackgroundColor: 'rgba(38, 210, 145, 1)',
                                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                data: Cantidad
                            }
                        ]
                    };
                    //Eliminamos y creamos la etiqueta canvas
                    //$('#myChart').remove();
                    //$('#contenedor_grafico').append("<canvas id='myChart' width='400' height='150'></canvas>");
                      var canvas = document.getElementById("myChart");
                    var ctx = canvas.getContext("2d");
                    //var ctx = $("#myChart");

                    var barGraph = new Chart(ctx, {
                        type: 'bar',
                        data: chartdata,
                        
                        options: {
                       
                         scales: {
                                yAxes: [{
                                    ticks: {

                                        beginAtZero:true
                                        }
                                    }],
                                xAxes:[{
                                                                    
                                    categoryPercentage: 0.1,
                                    barThickness : 70
                                }]

                                }

                        }
            });
                    }
                    
        },
        error: function(data) {
            console.log(data);
        }
    });

        });

         //EVENTO PARA ESTADICTICAS DE INVENTARIO
        $('#btnInventario').on('click', function(){
            var fechaI = $('#fechaInicial').val();
            var fechaF =$('#fechaFinal').val();
            //alert(fechaI+fechaF);
            $.ajax({
                url: "<?= base_url()?>Estadisticas/EstadisticasInventario?FechaInicial="+fechaI+"&FechaFinal="+fechaF,
                method: "GET",
                success: function(data) {
                    var registros = eval(data);
                    console.log('datos'+data);
                    var Productos = [];
                    var Cantidad = [];
                    var bgColor = [];
                    var bgBorder = [];
                    if(registros.length==0){
                        //alert("error")
                        swal("Error", "No se encontraron registros en las fechas que selecciono", "error");
                    }
                    else{
                        for (var i = 0; i < registros.length; i++) {
                            
                        Productos.push(registros[i].Nombre_Producto);
                        Cantidad.push(registros[i].suma);
                        var r = Math.random() * 255;
                        r = Math.round(r);
                        var g = Math.random() * 255;
                        g = Math.round(g);
                        var b = Math.random() * 255;
                        b = Math.round(b);
                        bgColor.push('rgba('+r+','+g+','+b+', 0.7)');
                        bgBorder.push('rgba('+r+','+g+','+b+', 3)');

                        console.log(registros[i].Nombre_Producto);
                    }
                    console.log(Productos);
                    console.log(Cantidad);

                    var chartdata = {
                        labels: Productos,
                        datasets : [
                            {

                                label: ' Productos en inventario',
                                backgroundColor: bgColor,
                                borderColor: bgBorder,
                                hoverBackgroundColor: 'rgba(38, 210, 145, 1)',
                                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                data: Cantidad
                            }
                        ]
                    };
                    //Eliminamos y creamos la etiqueta canvas
                    //$('#myChart').remove();
                    //$('#contenedor_grafico').append("<canvas id='myChart' width='400' height='150'></canvas>");
                    var canvas = document.getElementById("myChart");
                    var ctx = canvas.getContext("2d");
                    //var ctx = $("#myChart");

                    var barGraph = new Chart(ctx, {
                        type: 'bar',
                        data: chartdata,
                        
                        options: {
                       
                         scales: {
                                yAxes: [{
                                    ticks: {

                                        beginAtZero:true
                                        }
                                    }],
                                xAxes:[{
                                    categoryPercentage: 0.1,
                                    barThickness : 70

                                }]

                                }

                        }
            });
                    }
                    
        },
        error: function(data) {
            console.log(data);
        }
    });

        });



    })
        $.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
                };
    $('#fecha').datepicker({
                format: 'dd-mm-y',
                language:'es',

            });
    $('#fechaInicial').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',
            });
    $('#fechaFinal').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',
            });
function eliminar() {
 document.getElementById('contenedor_grafico').innerHTML='';
 document.getElementById('contenedor_grafico').innerHTML='<div id="contenedor_grafico"> <canvas id="myChart" width="400" height="150"></canvas></div>';
}


</script>