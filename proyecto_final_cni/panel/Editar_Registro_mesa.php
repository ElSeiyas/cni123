
			

	<?php

    $mysql=new mysqli("localhost","root","","cni");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");

   $mysql->query("update mesa_partes set 
fecha='$_REQUEST[fecha]',
nombres='$_REQUEST[nombres]',
apellidos='$_REQUEST[apellidos]',
correo='$_REQUEST[correo]',
celular='$_REQUEST[celular]',
estado='$_REQUEST[estado]'

  where id=$_REQUEST[id]") or
        die("Problemas en el select:" . mysqli_error($conexion));
  header('Location:mesa_de_partes.php');  
 $mysql->close();

?> 