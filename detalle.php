<!DOCTYPE HTML>
<html>
<head>
  <title>ChinaShopCL</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,600,400' rel='stylesheet' type='text/css'>
 <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
 <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
 <script src="js/responsive-nav.js" type="text/javascript"></script>
 <script src="js/owl.carousel.js" type="text/javascript"></script>
 <script type="text/javascript">
     $(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
     
          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true
     
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
     
      });
     
    });
 </script>
 </head>
<body>
    <!----start-header----->
     <div class="header">
         <div class="wrap">
            <div class="top-header">
                <div class="logo">
                    <a href="index.html"><h1><span>China</span>ShopCL</h1></a>
                </div>
            </div>
            <!---start-top-nav---->
            
            <div class="top-nav">
                
                <div class="top-nav-left">
                     <div id="nav">
                      <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="vestuario-mujer.php">Vestuario Mujer</a></li>
                         <li><a href="vestuario-hombre.php">Vestuario Hombre</a></li>
                         <li><a href="deporte.php">Deporte</a></li>
                         <li><a href="tecnologia.php">Tecnología</a></li>
                         <li><a href="crear-usuario.html">Registro</a></li>


                     </ul>
               </div>
               <script>
                  var navigation = responsiveNav("#nav");
                </script>
                </div>
                <div class="top-nav-right">

                    <div class="search">
                    <form>
                        <input type="text" value="" />
                        <input type="submit" value="" />
                        <div class="clear"></div>
                    </form>

                  </div>
                
                </div>
                <div class="clear"> </div>
            </div>
            <!---End-top-nav---->
        </div>
    </div><br>
<?php

/* Script que captura datos recibidos por POST y los guarda en una DB*/

// Requerimos la clase conexión 
require('conexion.php');

    //Instanciamos la clase
    $db = new Conexion();

    //Capturamos los datos recibidos vía POST
    $id = $_POST['id'];
    echo "He recibido en el archivo.php: ".$_POST["id"];
    
    /* Enviamos la instrucción SQL que permite ingresar 
    los datos a la BD en la tabla contactos */
    $db->query("SELECT '$nombre','$imagen','$precio','$descripcion' FROM deporte WHERE 'id' LIKE '$id';");

     
     echo '<li><a href="single.html"><img src="images/'.$dato['imagen'].'" alt="" /><span>'.$dato['nombre'].'   -   $'.$dato['precio'].'</span></a><div class="button"><span><a type="button" id="'.$dato['id'].'">Ver en Detalle</a></span><br><br></div></li>';
                                
                       


?>
<!---start-footer---->
          <div class="footer">
            <div class="wrap">
                 <div class="foot-nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                </div>      
                <div class="copy-right">
                    <p>2016 Copyright (c) .ChinaShopCL</p>
                </div>
            <div class="clear"> </div>
        </div>
    </div>
         <!---End-footer---->
    </body>
</html>
