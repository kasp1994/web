<?php

/* Script que captura datos recibidos por POST y los guarda en una DB*/

// Requerimos la clase conexión 
require('conexion.php');

    //Instanciamos la clase
    $db = new Conexion();

    //Capturamos los datos recibidos vía POST
    $id = $_GET['id'];  
    /* Enviamos la instrucción SQL que permite ingresar 
    los datos a la BD en la tabla contactos */
    $sql=$db->query("SELECT nombre,imagen,precio, descripcion FROM deporte WHERE id LIKE '$id';");
    $dato=$db->recorrer($sql);
    #header('Content-Type: application/json');
    #echo json_encode(array('exito'=>true, 'rut'=>$var));


    echo '<li>
            <a>
              <img src="images/'.$dato['imagen'].'" alt="" />
              <span>'.$dato['nombre'].'   -   $'.$dato['precio'].'</span>
            </a>
            <div class="button">
              <span>
                <a type="button" id="'.$dato['id'].'">Ver en Detalle</a>
              </span><br><br>
            </div>
          </li>';
?>