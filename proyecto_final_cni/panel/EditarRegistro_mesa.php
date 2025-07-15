<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
		
			$nombres = $_POST['nombres'];
			$apellidos = $_POST['apellidos'];
			$dni = $_POST['dni'];
			$descripcion = $_POST['descripcion'];
			

			$sql = "UPDATE mesa_partes SET  nombres = '$nombres', apellidos = '$apellidos', dni = '$dni',  descripcion = '$descripcion' WHERE codigo = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Usuario actualizado correctamente' : 'No se puso actualizar usuario';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: mesa_de_partes.php');

?>