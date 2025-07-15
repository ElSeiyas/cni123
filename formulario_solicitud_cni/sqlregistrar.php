<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php 

include('conexion.php');

mysqli_query($conexion, "insert into libro(categoria, fecha, apellidos, nombres, grado, seccion, correo, nombrelibro,fecha_devo, estado) values('$_REQUEST[categoria]','$_REQUEST[fecha]','$_REQUEST[apellidos]','$_REQUEST[nombres]','$_REQUEST[grado]','$_REQUEST[seccion]','$_REQUEST[correo]','$_REQUEST[nombrelibro]','$_REQUEST[fecha_devo]','$_REQUEST[estado]')") or die("Problemas en el select". mysql_error($conexion));

mysqli_close($conexion);
header('Location:index.html');



	 ?>

</body>
</html>