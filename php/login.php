<?php

if(!empty($_POST)){
    if(isset($_POST["email"]) &&isset($_POST["clave1"])){
        if($_POST["email"]!=""&&$_POST["clave1"]!=""){
            include "conexion.php";
            $db= new Conexion();
            
            $user_id=null;
            $sql1= "select * from clientes where email=\"$_POST[email]\" and clave1=\"$_POST[clave1]\" ";
            $query = $db->query($sql1);
            while ($r=$query->fetch_array()) {
                $user_id=$r["id"];
                break;
            }
            if($user_id==null){
                print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
            }else{
                session_start();
                $_SESSION["user_id"]=$user_id;
                print "<script>window.location='../bienvenida.html';</script>";                
            }
        }
    }
}
?>
