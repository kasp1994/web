<?php
	require('conexion.php');
	$db= new Conexion();
?>
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
				        <li ><a href="index.html">Home</a></li>
				        <li class="active"><a href="vestuario-mujer.php">Vestuario Mujer</a></li>
				         <li ><a href="vestuario-hombre.php">Vestuario Hombre</a></li>
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

	<div class="content">	 	 
		       <div class="top-grids">
		       		<div class="col_1_3 team-members">
					<ul><br>
						<li></li>
						<?php 

	                        // Instrucción SQL que permite rescatar todos los datos de la tabla contactos
						$sql = $db->query("select * from productosmujer;");
	                        // Obtenemos el número de filas del conjunto seleccionado
						$nfilas = $db->rows($sql);
	                        // Si la cantidad de filas es mayor a cero podemos proceder
						if ($nfilas > 0){
							for ($i=0; $i<$nfilas; $i++) {
	                                // Obtenemos fila en formato arreglo
								$dato = $db->recorrer($sql);
								$var=$dato['id'];
	                                //Imprimimos los datos obtenidos    
								echo '<tr id="fila_'.$dato['id'].'">';
								echo '<li><a href="single.html"><img src="images/'.$dato['imagen'].'" alt="" /><span>'.$dato['nombre'].'   -   $'.$dato['precio'].'</span></a><div class="button"><span><a href="compra.html">Ver en Detalle</a></span><br><br></div></li>';
								
							}
						}
						?>
						
						
						
						<div class="clear"></div>
					</ul>
				</div>
			 		
		 		</div>
		 		<div class="section group">
				
								
		     </div>
		     
			</div>
		  </div>		   
				
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
