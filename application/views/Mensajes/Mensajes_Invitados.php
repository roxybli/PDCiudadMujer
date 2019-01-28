
<!-- Include the above in your HEAD tag -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="<?= base_url()?>plantilla/componentes/css/chat.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
    div, p, a, h2, h4,h1,h3,h5,h6{
        color:#000000;
    }
</style>

                        
<div class="container"><br>
  <div class="card TituloUser" style="height: 60px">
                                    <h3 class="responsive" style="color:white; font-weight:bold;">Mensajes Invitados</h3>  
                                </div><br>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Mensajes</h4>
            </div>
            
          </div>
          <div class="inbox_chat">
          <?php 
            foreach ($Mensajes->result() as $msj) {
                # code...
                if($msj->Estado_Mensaje =="Nuevo"){
                    $contenido = "'".$msj->Contenido_Mensaje."'";
                    $emisor = "'".$msj->Emisor_Mensaje."'";
                    $contacto = "'".$msj->Contacto_Mensaje."'";
                    ?>
            <div class="chat_list active_chat" id="nuevo" onclick="ms(<?= $contenido?>, <?= $msj->PK_Id_Mensaje?>, 1, <?= $emisor?>,<?= $contacto?>)" >
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><?php echo $msj->Emisor_Mensaje?> <span class="chat_date"></span></h5>
                  <p><?php echo $msj->Contenido_Mensaje?></p>
                  <p><?php echo $msj->Contacto_Mensaje?></p>
                </div>
              </div>
            </div>
                <?php    
                }//cierre del if
                else if($msj->Estado_Mensaje =="Leido"){
                    $contenido = "'".$msj->Contenido_Mensaje."'";
                    $emisor = "'".$msj->Emisor_Mensaje."'";
                    $contacto = "'".$msj->Contacto_Mensaje."'";
                    ?>
                        <div class="chat_list" onclick="ms(<?php echo $contenido?>, <?= $msj->PK_Id_Mensaje?>, 2, <?= $emisor?>,<?= $contacto?>)">
                          <div class="chat_people">
                            <div class="chat_img"> <img src="<?= base_url()?>plantilla/images/bookingSystem/8.png" alt="sunil"> </div>
                            <div class="chat_ib">
                              <h5><?php echo $msj->Contenido_Mensaje?> </h5>
                              <h5><?php echo $msj->Emisor_Mensaje?><span class="chat_date"></span></h5>
                              <p id="Cont"><?php echo $msj->Contacto_Mensaje?></p>

                            </div>
                          </div>
                        </div>
            <?php }}?>
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="Recibidos">
    

        </div>
      </div>
    </div></div></div>
<script type="text/javascript">
    function ms(con, id, tipo, emisor, contacto) {
        //alert(document.getElementById('id_ms').value);
        //alert(con);
        //cont = document.getElementById('Cont').innerHTML;
        cont = con;
        html ="";
        html='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div><div class="received_msg"><div class="received_withd_msg"><p>'+cont+'</p><span class="time_date"> '+emisor+'   |    '+contacto+'</span></div></div></div>';
        document.getElementById('Recibidos').innerHTML=html;
       id_m= id;
       if(tipo == 1){

        document.getElementById('nuevo').classList.remove('active_chat');
        ver(id_m);
       }
    }
    function msl(c){
        alert(c);
    }
</script>