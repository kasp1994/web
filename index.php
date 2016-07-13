
<?php
	require('php/conexion.php');
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
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
 <script src="lib/jquery-1.10.2.min.js" type="text/javascript"></script>
 <script src="lib/responsive-nav.js" type="text/javascript"></script>
 <script src="lib/owl.carousel.js" type="text/javascript"></script>
 <script src="js/leer-id-destacado.js"></script>

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
			<div class="row"> 
					<div class=col-md-9 > </div>
					<div class=col-md-3 ><a type="button"  class="botonlogin btn-default" data-toggle="modal" href="#myModal" data-target=".bd-example-modal-sm">Iniciar Sesión</a></div>
			</div>
			<div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog modal-sm">
      				<div class="modal-content">
        				<div class="modal-header">
         					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         					<h4 class="text-left login-title">Ingreso al Sitio</h4>
        				</div>
        			<div class="modal-body">
					<div class="container">
				    <div class="row">
				        <div class="col-sm-6 col-sm-3">
				            <div class="account-wall">
				                <form class="form-signin" action="php/login.php"  method="POST">
				                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required autofocus nametitle="se necesita un nombre" required="required"="email">
				                <input type="password" name="clave1" id="clave1" class="form-control" placeholder="Password" required nametitle="se necesita un nombre" required="required"="clave1"><br>
				                <button class="btn btn-lg btn-primary btn-block" type="submit">
				                    Sign in</button><br>
				                
				                <a href="#" class="pull-center need-help">¿Olvidó su usuario o contraseña? </a><span class="clearfix"></span>
				                </form>
				            </div>
				            <a href="crear-usuario.html" class="text-center new-account">Crear una cuenta</a>
				        </div>
				    </div>
				</div>
            </div>
            
      			</div><!-- /.modal-content -->
    		</div><!-- /.modal-dialog -->
  			</div><!-- /.modal -->
			<div class="top-nav">

				<div class="top-nav-left">
					 <div id="nav">
				      <ul>
				        <li class="active"><a href="index.php">Home</a></li>
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
	</div>
   <!----End-header----->
	       <!------ Slider ------------>
		     <div class="banner">
		     	<div class="wrap">
		     	    <div class="banner-text">
		     		    <div id="owl-demo" class="owl-carousel owl-theme">
						  <div class="item"> 
						  <div class="banner-desc">
				           <h2>¡Renueva tu Closet!</h2>
				          <p>-50% todos los <br/>productos mujer </p>
				          </div>
				          </div>
						  <div class="item">
						  <div class="banner-desc">
				           <h2>Encuentra lo que deseas...</h2>
				          <p>Envío gratis<br/>todo DEPORTE</p>
				          </div>
						  </div>
						  <div class="item">
						  	  <div class="banner-desc">
					            <h2>Revisa el nuevo catálogo</h2>
				          		<p>¡Ofertas en sección <br/>tecnología!</p>
					          </div>
						  </div>
						</div>
				     </div>
	      	       <div class="banner-img">
	      	     	 <img src="images/banner-img.png" alt="" />
	      	      </div>
	      	   <div class="clear"></div>
	        </div>
   	    </div>
		<!------End Slider ------------>
		 <!---start-content---->
		 <div class="wrap">
		   <div class="content">	 	 
		       <div class="top-grids">
		       		<div class="col_1_3 team-members">
					<ul><br>
						<li></li>
						<?php 

	                        // Instrucción SQL que permite rescatar todos los datos de la tabla contactos
						$sql = $db->query("select * from destacados;");
	                        // Obtenemos el número de filas del conjunto seleccionado
						$nfilas = $db->rows($sql);
	                        // Si la cantidad de filas es mayor a cero podemos proceder
						if ($nfilas > 0){
							for ($i=0; $i<$nfilas; $i++) {
	                                // Obtenemos fila en formato arreglo
								$dato = $db->recorrer($sql);
								$var=$dato['id'];
	                                //Imprimimos los datos obtenidos
	                            if ( $i==1) {
	                            	
	                                echo '<tr id="fila_'.$dato['id'].'"><br><br><br><br><br><br>';
									
								}elseif($i==2){
									echo '<tr id="fila_'.$dato['id'].'"><br><br><br><br>';
								}
								else{echo '<br><tr id="fila_'.$dato['id'].'">';}
								echo '<li>
										<a><img src="images/'.$dato['imagen'].'" alt="" />
										<span>'
											.$dato['nombre'].
											'   -   $'.$dato['precio'].
										'</span>
										</a>
											<div class="button boton"  onclick=obtenerId("'.$dato['id'].'")>
											<span><a >Ver en Detalle</a></span><br><br>
											</div>
									 </li>';
								
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
		 <!---End-content---->
		 <!---start-footer---->
		  <div class="footer">
		    <div class="wrap">
		    	 <div class="foot-nav">
			   	<ul>
			   		<li><a href="index.php">Home</a></li>
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
	
	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>

