
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
    $sql=$db->query("SELECT * FROM tecnologia WHERE id LIKE '$id';");
    $dato=$db->recorrer($sql);
    #header('Content-Type: application/json');
    #echo json_encode(array('exito'=>true, 'rut'=>$var));
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
 <script src="lib/jquery-1.10.2.min.js" type="text/javascript"></script>
 <script src="lib/responsive-nav.js" type="text/javascript"></script>
 <script src="lib/owl.carousel.js" type="text/javascript"></script>
</head>
<body>
<?php
echo '<div class="container-fluid">
    <div class="jumbotron">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4"><img src="images/'.$dato['imagen'].'"></div>
        <div class="col-md-6"><h3>'.$dato['nombre'].'</h3><h4>Precio: $'.$dato['precio'].'</h4><br><h4>Descripción: '.$dato['descripcion'].'</h4></div>
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