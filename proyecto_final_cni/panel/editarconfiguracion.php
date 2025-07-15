<?php

session_start();
$usuario=$_SESSION['s_usuario'];

    $mysql=new mysqli("localhost","root","","cni");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");

   $mysql->query("update usuario set 

celular='$_REQUEST[celular]',
password='$_REQUEST[password]'

  where codigo=$_REQUEST[codigo]") or
        die("Problemas en el select:" . mysqli_error($conexion));

include('conexion.php');
$pro=$conexion->query("SELECT codigo,nombres,apellidos,dni,celular,usuario,password,foto,cargo FROM  usuario where usuario='$usuario' ");


if ($reg=mysqli_fetch_array($pro)) {  

 if ($reg['cargo']==  "administrador") {

 header('location: index.php'); 
 }
 
 if ($reg['cargo']==  "secretario" ||$reg['cargo']==  "administrador" ) {

 header('location: index.php'); 
 }

if ($reg['cargo']==  "toe") {

 header('location: index.php'); 
 }

 if ($reg['cargo']==  "bibliotecario") {

 header('location: biblioteca.php'); 
 }


}



 $mysql->close();

?> 