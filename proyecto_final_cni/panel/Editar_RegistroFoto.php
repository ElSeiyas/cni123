<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
         
			$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
		
		
			


			$sql = "UPDATE usuario SET   foto = '$foto'  WHERE codigo = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'usuario actualizado correctamente' : 'No se puso actualizar ';

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

	header('location: usuarios.php');

?>