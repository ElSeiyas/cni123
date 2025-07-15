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
            $celular = $_POST['celular'];
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			$cargo = $_POST['cargo'];
		
			


			$sql = "UPDATE usuario SET  nombres= '$nombres', apellidos= '$apellidos', dni = '$dni', celular = '$celular', usuario = '$usuario', password = '$password',  cargo ='$cargo' WHERE codigo = '$id'";
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



