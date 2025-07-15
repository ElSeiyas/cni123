
 <?php

// CÃģmo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"],"subidas/".$fichero["name"]);

// Redirigiendo hacia atrÃĄs
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>

	<?php 

include('conexion.php');
  
mysqli_query($conexion, "insert into mesa_partes(nombres,apellidos,dni,descripcion)values('$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[dni]','$_REQUEST[descripcion]')") or die("Problemas en el select". mysql_error($conexion));

mysqli_close($conexion);
header('Location:mesa_de_partes.php');



	 ?>

  <?php

// CÃģmo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"],"subidas/".$fichero["name"]);

// Redirigiendo hacia atrÃĄs
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>