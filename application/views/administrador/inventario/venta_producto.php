
<div class="row page-titles" >
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/productos_disponibles"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
     </div>

     <div class="col-md-5 align-center">
        
     </div>


    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Venta</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>
<div class="card">
  <div class="card TituloUser" style="height: 60px">
        <h3 class="responsive" style="color:white; font-weight:bold;">Venta de Producto</h3>
    </div>
    <div class="card">
<div class="container-fluid">
  <form role="form" action="<?= base_url() ?>inventario/venderProducto" id="formSolicitud" class="formEquipo" method="post">
   <fieldset>
     <hr>
     <?php 
      foreach ($datos->result() as $producto) {
      }
     ?>
        <div class="form-row">
            <div class="col-md-6">
                <label style="color: #000000">Producto</label>
                <input type="text" class="form-control" name=""  value="<?= $producto->Nombre_Producto ?>" disabled>
                <input type="hidden" class="form-control" name="idActualizar"  value="<?= $producto->PK_Id_Inventario ?>">
           </div>

           <div class="col-md-6">
                <label style="color: #000000">Existencia</label>
                <input type="text" class="form-control" id="txtExistencia" name="" value="<?= $producto->Existencia_Producto ?>" disabled>
                <input type="hidden" class="form-control" id="txtExistencia" name="existenciaProducto" value="<?= $producto->Existencia_Producto ?>" >
           </div>
        </div>

        <div class="form-row">
            <div class="col-md-6">
                <label style="color: #000000">Precio</label>
                <input type="text" class="form-control" name="" value="$<?= $producto->Precio_Producto ?>" disabled>
           </div>

           <div class="col-md-6">
                <label style="color: #000000">Fecha de venta</label>
                <input type="text" class="form-control" name="fechaVenta" value="" id="fechaVenta"  required>
           </div>
        </div>

      <div class="form-row">

           <div class="col-md-12">
                <label style="color: #000000">Cantidad a vender</label>
                <input type="text"  onkeypress="return numeros(event, 'num')" class="form-control" name="cantidadVender" value="" id="cantidadVender" required>
           </div>
        </div>


        <div class="form-group" id="botonV" align="right">
        <p></p>
        <a style="color:white;" href="<?=base_url() ?>inventario/productos_disponibles" class="btn btn-secondary"><i class="fa fa-times-circle f-s-20" style="margin:4px;"></i>Regresar</a>
          <button class="btn btn-primary "><i class="fa fa-share-square-o f-s-20" style="margin:4px;"></i><span class="fa fa-share-square-o f-s-20 oculto" id="btnVenta"></span> Vender</button>
        </div><!-- input group -->

         <div class="form-group oculto" id="mensajeError">
        <p></p>
          <h3 class="text-danger">La cantidad a vender, debe ser menor que la de existencia !!!</h3>
        </div><!-- input group -->

   </fieldset>
  </form>
  </div></div>
</div>
<script type="text/javascript">
  $(function() {
     $('#fechaVenta').datepicker({
        format: 'yyyy-mm-dd',
        language:'es',

      });

     $("#cantidadVender").change(function() {
        existencia = $("#txtExistencia").val();
        cantidadV = $(this).val();

        if (cantidadV > existencia)
        {
          $("#mensajeError").fadeIn();
          $(this).val("");
        }
        else
        {
         $("#botonV").fadeIn(); 
        }

     })

     $("#cantidadVender").click(function() {
        $(".oculto").slideUp();

     })

  });
</script>
