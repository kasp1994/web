<?php

/* Script que captura datos recibidos por POST y los guarda en una DB*/

// Requerimos la clase conexión 
require('conexion.php');

    //Instanciamos la clase
    $db = new Conexion();

    //Capturamos los datos recibidos vía POST
    $rut = $_POST['in_rut'];
    $nombre = $_POST['in_nombre'];
    $email = $_POST['in_email'];
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['clave2'];

    /* Enviamos la instrucción SQL que permite ingresar 
    los datos a la BD en la tabla contactos */
    if($db->query("INSERT INTO clientes VALUES ('$rut','$nombre','$email','$clave1', '$clave2');")){
        header('Content-Type: application/json');
        echo json_encode(array('return'=>true));
    }else{
        header('Content-Type: application/json');
        echo json_encode(array('return'=>false));
    }

   

?>