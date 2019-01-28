<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Respaldo_Model extends CI_Model{
   public function backupDatabaseTables()
   {
  $db_host = 'localhost'; //Host del Servidor MySQL
  $db_name = 'db_hoysi'; //Nombre de la Base de datos
  $db_user = 'root'; //Usuario de MySQL
  $db_pass = ''; //Password de Usuario MySQL 
  $fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo
  // Construimos el nombre de archivo SQL Ejemplo: mibase_20170101-081120.sql
  $salida_sql = $db_name.'_'.$fecha.'.sql'; 
  //Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino
  $dump = "C:\wamp\bin\mysql\mysql5.5.24\bin\mysqldump --user=".$db_user." --password=".$db_pass." --host=".$db_host." ".$db_name." > $salida_sql";
  system ($dump, $output); //Ejecutamos el comando para respaldo
  $zip = new ZipArchive(); //Objeto de Libreria ZipArchive
  //Construimos el nombre del archivo ZIP Ejemplo: mibase_20160101-081120.zip
  $salida_zip = $db_name.'_'.$fecha.'.zip';
  $vista= base_url().'/Login/home';
  if($zip->open($salida_zip,ZIPARCHIVE::CREATE)===true) { //Creamos y abrimos el archivo ZIP
    $zip->addFile($salida_sql); //Agregamos el archivo SQL a ZIP
    $zip->close(); //Cerramos el ZIP
    unlink($salida_sql); //Eliminamos el archivo temporal SQL
    //header ("Location: $vista"); // Redireccionamos para descargar el Arcivo ZIP
   echo '<script type="text/javascript">
        alert("Respaldo de datos exitoso")
        self.location ="'.base_url().'/Login/home"
        </script>';
    } 
    else {
    echo 'Error'; //Enviamos el mensaje de error
  }

   }
}

?>