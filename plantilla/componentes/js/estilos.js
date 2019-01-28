$(function(){
	$('#fechaIE').datepicker({
					format: 'yyyy-mm-dd',
					language:'es',

				});
	$("#categoriaInsumos").change(function(){
		$("#segundaParteR").slideUp();
		var tipoMateriaPrima = $("#categoriaInsumos").val();
		if (tipoMateriaPrima==0)
		{
			$("#cabeceraReceta").slideUp();
		}
		if (tipoMateriaPrima==1)
		{
			$(".noComestible").slideUp();
			$(".comestible").slideDown();
			$("#materiaPrimaExistente").slideDown();
		}
		else
		{
			$(".comestible").slideUp();
			$(".noComestible").slideDown();
			$("#materiaPrimaExistente").slideDown();
		}
		//alert($("#categoriaInsumos").val());
	});

	// Funcion para mostrar la interfaz de ingresos y egresos

	$("#procesarIE").click(function(){
		if ($("#cantidadIngresos").val() =="" || $("#cantidadEgresos").val() == "" || $("#fechaIE").val()=="")
		{
			swal("Debes ingresar todos los datos");
		}
		else
		{

			$("#cabeceraIE").slideUp();
			var fecha = $("#fechaIE").val();
			var cantidadIngresos = $("#cantidadIngresos").val();
			var cantidadEgresos = $("#cantidadEgresos").val();

			//Ingresos
				cabeceraI = "";
				cabeceraI += '<div class="card-title">';
			    cabeceraI +=     '<h4 class="text-primary">Ingresos</h4>';
			    cabeceraI += '</div>';
			    $("#tablaIE").append(cabeceraI);

			for (var i = 0; i < cantidadIngresos; i++)
			{
				var datos = '';
				datos += '<div class="row">';

		        datos += '<div class="col-md-6">';
		        datos +=    '<div class="form-group">';
		        datos +=       '<div class="input-group">';
		        datos +=           '<input type="text" class="form-control" name="ingresosN[]" placeholder="Nombre del ingreso numero '+ (i+1) +' " onkeyup="this.value=NumText(this.value)" required>';
		        datos +=       '</div>';
		        datos +=   ' </div>';
		        datos += '</div>';
		        datos += '<div class="col-md-6">';
		        datos +=    '<div class="form-group">';
		        datos +=       '<div class="input-group">';
		        datos +=           '<input type="text" min="0" class="form-control" name="ingresosD[]" placeholder="Precio del ingreso numero '+ (i+1) +' " onkeypress="return numeros(event, \'num\')" required>';
		        datos +=       '</div>';
		        datos +=   ' </div>';
		        datos += '</div>';

		        datos +='</div>';
				$("#tablaIE").append(datos);
			}

			//Egresos
				cabeceraE = "";
				cabeceraE += '<div class="card-title">';
			    cabeceraE +=   '<h4 class="text-primary">Egresos</h4>';
			    cabeceraE +=  '</div>';
			    $("#tablaIE").append(cabeceraE);

			for (var i = 0; i < cantidadEgresos; i++)
			{
				var datos = '';
				datos += '<div class="row">';

		        datos +=	 '<div class="col-md-6">';
		        datos +=	    '<div class="form-group">';
		        datos +=       		'<div class="input-group">';
		        datos +=        	   '<input type="text" class="form-control" id="" name="egresosN[]" placeholder="Nombre del egreso numero '+ (i+1) +' " onkeyup="this.value=NumText(this.value)" required>';
		        datos +=        	   '<input type="hidden" value="1" class="form-control" id="" name="estadoE[]" placeholder="">';
		        datos +=    	   '</div>';
		        datos +=  		'</div>';
		        datos +=	'</div>';
		        datos +=	 '<div class="col-md-6">';
		        datos +=	    '<div class="form-group">';
		        datos +=       		'<div class="input-group">';
		        datos +=        	   '<input type="text" min="0" class="form-control" id="" name="egresosD[]" placeholder="Precio del egreso numero '+ (i+1) +' " onkeypress="return numeros(event, \'num\')" required>';
		        datos +=    	   '</div>';
		        datos +=  		'</div>';
		        datos +=	'</div>';

		        datos +='</div>';
				$("#tablaIE").append(datos);
			}
			boton = '<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Iniciar proceso</button>';
		    	$("#tablaIE").append(boton);

	    }
	});

		// Funcion para la cantidad de insumos a insertar

	$("#numeroInsumos").click(function(){
		//alert($("#nombreProducto").val());
		if ($("#cantidadInsumos").val() != "")
		{
			$("#cabeceraReceta").slideUp();

			var cantidadInsumos = $("#cantidadInsumos").val();

			for (var i = 0; i < cantidadInsumos; i++)
			{
				var datos = '';
				datos += '<div class="row">';
		        datos += '<div class="col-md-2">';
		        datos +=    '<div class="form-group">';
		        datos +=       '<div class="input-group">';
		        datos +=           '<input type="text" class="form-control" id="" value="" name="nombreInsumos[]" placeholder="Nombre del insumo" onkeyup="this.value=NumText(this.value)" required>';
		        datos +=        '</div>';
		        datos +=   ' </div>';
		        datos +='</div>';

		        datos +='<div class="col-md-2">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<input type="text" class="form-control" id="" name="cantidaInsumo[]" placeholder="Cantidad del insumos" onkeypress="return numeros(event, \'num\')" required>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';

		        datos +='<div class="col-md-2">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<input type="text" class="form-control" id="" name="precioInsumo[]" placeholder="Precio del insumos" onkeypress="return numeros(event, \'num\')" required>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';


		        datos +='<div class="col-md-2">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<select name="medidasInsumo[]" class="form-control selectpicker" required>';
				datos +=                 '<option value="Seleccione una medida">Seleccione una medida</option>';
				datos +=				'<optgroup label="Unidades de medida de masa">';
				datos +=                 '<option value="Libras">Libras</option>';
				datos +=                 	'<option value="Onzas">Onzas</option>';
				datos +=                 	'<option value="Gramos">Gramos</option>';
				datos +=                 	'<option value="Kilogramos">Kilogramos</option>';
				datos +=                 	'<option value="Miligramos">Miligramos</option>';
				datos +=                 '</optgroup>';
				datos +=                 '<optgroup label="Unidades de medida de capacidad">';
				datos +=                 	'<option value="Litros">Litros</option>';
				datos +=                 	'<option value="Mililitro">Mililitro</option>';
				datos +=                 '</optgroup>';
				datos +=                 '<optgroup label="Unidades de medidad de longitud">';
				datos +=                 	'<option value="Centimetros">Centimetros</option>';
				datos +=                	'<option value="Pulgadas">Pulgadass</option>';
				datos +=                 	'<option value="Yardas">Yardas</option>';		
				datos +=                 	'<option value="Metros">Metros</option>';
				datos +=                 '</optgroup>';
				datos +=                 '<optgroup label="Otros tipos">';
				datos +=                 	'<option value="Unidad">Unidad</option>';
				datos +=                 '</optgroup>';
				datos +=             '</select>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';

		        datos +='<div class="col-md-2">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<input type="text" class="form-control" id="" name="cantidadMinima[]" placeholder="Minimo en stock" onkeypress="return numeros(event, \'num\')" required>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';

		         datos +='<div class="col-md-2">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<select name="tipoInsumo[]" class="form-control">';
				datos +=                 '<option value="---">---</option>';
				datos +=                 '<option value="1">Comestible</option>';
				datos +=                 '<option value="2">No comestible</option>';
				datos +=             '</select>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';
		        datos +='</div>';
				
				$("#tablaInsumos").append(datos);
			}
				
		    	boton = '<div align="right"><button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Guardar Insumos</button></div> ';
		    	//boton2 = ' <a ><button type="button" class="btn btn-primary btn-flat m-b-30 m-t-30"> <i class="fa fa-ban f-s-20"></i> Cancelar </button></a>';
		    	$("#tablaInsumos").append(boton);
		    	$("#tablaInsumos").append(boton2);
		}
		else
		{
			swal("Debes ingresar todos los datos !!!");
		}

	    	
	});

	$("#cantidadProducto").change(function ()
	{

		var num = $("#cantidadProducto").val();
		var fecha = $("#fechaP").val();
		$('#detalleProcedimiento').find(':input.calc').each(function() {
			var elemento = this;
				valor = elemento.value * num;
				elemento.value = valor;

		});
	});

	$("#fechaIE").change(function ()
	{

		var num = $("#cantidadProducto").val();
		var fecha = $("#fechaIE").val();

		$("#CP").attr('value', num);
		$("#FP").attr('value', fecha);
		$("#fechaIngresosEgresos").attr('value', fecha);

	});

	$("#cantidadProducto").change(function ()
	{

		var num = $("#cantidadProducto").val();
		var fecha = $("#fechaIE").val();

		$("#CP").attr('value', num);
		$("#FP").attr('value', fecha);

	});


	// Control de Ingresos Egresos

	$('#cantidadEgresos').click(function() 
		{
			$.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
				};
	
		});

	$('#cantidadProducto').click(function() 
		{
			$.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
				};
	$('#fechaIE').datepicker({
				format: 'yyyy-mm-dd',
				language:'es',

			});
		});


	$('#insumoB').keyup(function(){
		
	t= $(this).val()
     if(t.length>=3)
	     {
	      filtrar(t);
	     }
     if (t.length==0 || t.length<3)
	     {

	        mostrarfilas();

	     }
	});

// Funciones usadas en el keyup
	function filtrar(cadena)
	{
    $('#insumosE tbody tr').each(function(){
    $(this).removeClass('oculta resaltar');
    contenido = $(this).find('td:eq(1)').html();
    exp = new RegExp(cadena, 'gi');
    coicidencias = contenido.match(exp);
    if(coicidencias==null)
	    {
	      $(this).addClass('oculta');
	    }
    else
	    {
	      $(this).addClass('resaltar')
	    }
    });
}

function mostrarfilas(){

  $('#insumosE tbody tr').each(function(){
    $(this).removeClass('oculta resaltar');
  });
}
// finalizan funciones


$("#btnCapitalRubros").click(function() {
	id = $("#idRubro").val();
	if (id == "") 
	{
		swal("Debes seleccionar un rubro !!!");
	}
	else
	{
		$("#idRubroC").attr("value", id);
		$("#capitalRubros").slideUp();
		$("#capitalSubrubro").slideDown();
	}
});

// Agregando valores al Subruro
	$("#btnProcesarElemntosSubrubro").click(function(){
		var nombre = $("#nombreSubrubro").val() ;
		$("#nombreRubroE").attr("value", nombre); 
		//alert($("#nombreProducto").val());
		if ($("#nombreSubrubro").val() != "" && $("#materiaComestible").val() != "" && $("#maquinaria").val() != "")
		{
		$("#nombreRubroN").html(nombre); 
		$("#capitalSubrubro").slideUp();
			$("#cabeceraReceta").slideUp();

				var materiaPrima = $("#materiaComestible").val();
				var maquinaria = $("#maquinaria").val();

				materiaPrimaC="";
				materiaPrimaC += '<div class="col-md-12">';
				materiaPrimaC += '<h2 class="text-success text-center"> Insumos </h2>';
				materiaPrimaC += '</div>';

				$("#elementoSR").append(materiaPrimaC);
				$("#pm").slideDown();
			for (var i = 0; i < materiaPrima; i++)
			{

				var datos = '';
				datos += '<div class="row">';
		        datos += '<div class="col-md-3">';
		        datos +=    '<div class="form-group">';
		        datos +=       '<div class="input-group">';
		        datos +=           '<input type="text" class="form-control" id="" value="" name="nombreElemento[]" placeholder="Nombre del elemento" onkeyup="this.value=NumText(this.value)" required>';
		        datos +=        '</div>';
		        datos +=   ' </div>';
		        datos +='</div>';

		        datos += '<div class="col-md-3">';
		        datos +=    '<div class="form-group">';
		        datos +=       '<div class="input-group">';
		        datos +=           '<input type="text" class="form-control" id="" value="" name="cantidadElemento[]" placeholder="Cantidad del elemento"  onkeypress="return numeros(event, \'num\')" required>';
		        datos +=        '</div>';
		        datos +=   ' </div>';
		        datos +='</div>';

		        datos +='<div class="col-md-2">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<select name="medidasElemento[]" class="form-control selectpicker" required >';
				datos +=                 '<option value="Seleccione una medida">Seleccione una medida</option>';
				datos +=                 '<optgroup label="Unidades de medida de masa">';
				datos +=                 '<option value="Libras">Libras</option>';
				datos +=                 	'<option value="Onzas">Onzas</option>';
				datos +=                 	'<option value="Gramos">Gramos</option>';
				datos +=                 	'<option value="Kilogramos">Kilogramos</option>';
				datos +=                 	'<option value="Miligramos">Miligramos</option>';
				datos +=                 '</optgroup>';
				datos +=                 '<optgroup label="Unidades de medida de capacidad">';
				datos +=                 	'<option value="Litros">Litros</option>';
				datos +=                 	'<option value="Mililitro">Mililitro</option>';
				datos +=                 '</optgroup>';
				datos +=                 '<optgroup label="Unidades de medidad de longitud">';
				datos +=                 	'<option value="Centimetros">Centimetros</option>';
				datos +=                	'<option value="Pulgadas">Pulgadass</option>';
				datos +=                 	'<option value="Yardas">Yardas</option>';		
				datos +=                 	'<option value="Metros">Metros</option>';
				datos +=                 '</optgroup>';
				datos +=                 '<optgroup label="Otros tipos">';
				datos +=                 	'<option value="Litros">Unidad</option>';
				datos +=                 '</optgroup>';
				datos +=             '</select>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';

		        datos +='<div class="col-md-3">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<input type="text" class="form-control" id="" name="dineroElemento[]" placeholder="Precio unitario" onkeypress="return numeros(event, \'num\')" required>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';
		        datos +='</div>';
				
				$("#elementoSR").append(datos);
			}

			var maquinaria = $("#maquinaria").val();

				maquinariaC="";
				maquinariaC += '<div class="col-md-12">';
				maquinariaC += '<h2 class="text-success text-center"> Maquinaria </h2>';
				maquinariaC += '<hr>';
				maquinariaC += '</div>';

				$("#elementoSR").append(maquinariaC);
			for (var i = 0; i < maquinaria; i++)
			{

				var datos = '';
				datos += '<div class="row">';
		        datos += '<div class="col-md-4">';
		        datos +=    '<div class="form-group">';
		        datos +=       '<div class="input-group">';
		        datos +=           '<input type="text" class="form-control" id="" value="" name="nombreMaquinaria[]" placeholder="Nombre de la maquinaria" onkeyup="this.value=NumText(this.value)" required>';
		        datos +=        '</div>';
		        datos +=   ' </div>';
		        datos +='</div>';

		        datos +='<div class="col-md-4">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<input type="text" class="form-control" value="1" id="" name="cantidaMaquinaria[]" onkeypress="return numeros(event, \'num\')" required>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';

		        datos +='<div class="col-md-4">';
		        datos +=    '<div class="form-group">';
		        datos +=        '<div class="input-group">';
		        datos +=            '<input type="text" class="form-control" id="" name="precioMaquinaria[]" placeholder="Precio unitario" onkeypress="return numeros(event, \'num\')"  required>';
		        datos +=        '</div>';
		        datos +=    '</div>';
		        datos += '</div>';
		        datos +='</div>';
				
				$("#elementoSR").append(datos);
			}


				
		    	boton = '<div class="col-md-12" align="right"><button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Guardar</button></div> ';
		    	$("#elementoSR").append(boton);
		}
		else
		{
			swal("Debes ingresar todos los datos !!!");
		}

	    	
	});


});

function numeros(elEvento, permitidos) 
{
	 // Variable que definen los caracteres permitidos
	var numeros = "0123456789.-"; 
	//Comprobando que los caracteres sean los correctos
	if(permitidos=numeros)
		{
		// Obtener la tecla pulsada
		var evento = elEvento || window.event; //Obteniendo la informacion de la tecla sin importar el tipo de navegador 
		var codigoCaracter = evento.charCode || evento.keyCode; // keyCode: es el código interno de la tecla. Y charCode: es el código del carácter de la tecla que se ha pulsado.
		var caracter = String.fromCharCode(codigoCaracter); //convierte el código del carácter al carácter que representa la tecla que se ha pulsado

		return permitidos.indexOf(caracter) != -1;  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
	 }
 }

 function NumText(string){//solo letras y numeros
    var out = '';
    //Se añaden las letras validas
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóúÁÉÍÓÚ1234567890.:,;-_ @$//';//Caracteres validos
	
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
	     out += string.charAt(i);
    return out;
}
