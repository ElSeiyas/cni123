
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php 

include('conexion.php');
  $image = $_FILES['foto']['tmp_name'];
        $foto = addslashes(file_get_contents($image));


mysqli_query($conexion, "insert into usuario(nombres, apellidos, dni, celular, usuario, password, foto, cargo)values('$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[dni]','$_REQUEST[celular]','$_REQUEST[usuario]','$_REQUEST[password]','$foto','$_REQUEST[cargo]')") or die("Problemas en el select". mysql_error($conexion));

mysqli_close($conexion);
header('Location:usuarios.php');



	 ?>

</body>
</html>
