
<?php

/* Script que captura datos recibidos por POST y los guarda en una DB*/

// Requerimos la clase conexión 
require('conexion.php');

    //Instanciamos la clase
    $db = new Conexion();
    session_start();
    //Capturamos los datos recibidos vía POST
    $id = $_GET['id'];  
    /* Enviamos la instrucción SQL que permite ingresar 
    los datos a la BD en la tabla contactos */
    $sql=$db->query("SELECT * FROM productosmujer WHERE id LIKE '$id';");
    $dato=$db->recorrer($sql);
    #header('Content-Type: application/json');
    #echo json_encode(array('exito'=>true, 'rut'=>$var));
?>
<!DOCTYPE html>
<html>
<head>
  
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
</head>
<body>
<?php
echo '<div class="container-fluid">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4"><img src="images/'.$dato['imagen'].'"></div>
        <div class="col-md-6"><h3>'.$dato['nombre'].'</h3><h4>Precio: $'.$dato['precio'].'</h4><br><h4>Color: '.$dato['color'].'</h4><br><h4>Talla: '.$dato['talla'].'</h4><br><h4>Descripción: '.$dato['descripcion'].'</h4></div>
      </div>

    </div>
  </div>';

    
?>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"><br><h5>Si deseas adquirir este producto<br>¡CONTACTANOS!</h5><a href="https://www.facebook.com/Chinashopcl-781640111971265/?skip_nax_wizard=true"><img src="images/descarga.png" ></a> <a href="https://www.facebook.com/Chinashopcl-781640111971265/?skip_nax_wizard=true"><img src="images/ws.jpg" ></a> <a href="https://www.facebook.com/Chinashopcl-781640111971265/?skip_nax_wizard=true"><img src="images/gmail.jpg" ></a></div>
</div>
</body>

</html>