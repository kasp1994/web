<?php 

	require('conexion.php');
	$db= new Conexion();

  
function verificar_login($user,$password,&$result) { 
    $sql = "SELECT * FROM clientes WHERE email = '$user' and clave1 = '$password'";
    $rec = mysql_query($sql); 
    $count = 0; 
  
    while($row = mysql_fetch_object($rec)) 
    { 
        $count++; 
        $result = $row; 
    } 
  
    if($count == 1) 
    { 
        return 1; 
    } 
  
    else 
    { 
        return 0; 
    } 
} 
  
if(!isset($_SESSION['userid'])) 
{ 
    if(isset($_POST['login'])) 
    { 
        if(verificar_login($_POST['email'],$_POST['clave1'],$result) == 1) 
        { 
            $_SESSION['userid'] = $result->idusuario; 
            header("location:bienvenida.html"); 
        } 
        else 
        { 
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
        } 
    } 
?> 
 
 
