<?php
var_dump($_FILES["archivo"]);


function guardarArchivo() {
       if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
           $nombre = $_FILES["archivo"]["name"];
           $archivo = $_FILES["archivo"]["tmp_name"];
           $ext = pathinfo($nombre, PATHINFO_EXTENSION);
           $miArchivo = dirname(__FILE__);
           $miArchivo = $miArchivo . "/../images/";
           $miArchivo = $miArchivo . "archivoNuevo" . $ext;
           move_upload_file($archivo, $miArchivo);
       }
};





 ?>
