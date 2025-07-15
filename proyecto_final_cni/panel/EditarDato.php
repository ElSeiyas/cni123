<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
            $categoria = $_POST['categoria'];
            $fecha = $_POST['fecha'];
			$apellidos = $_POST['apellidos'];
			$nombres = $_POST['nombres'];
			$grado = $_POST['grado'];
            $seccion = $_POST['seccion'];
			$correo = $_POST['correo'];
			$nombrelibro = $_POST['nombrelibro'];
            $fecha_devo = $_POST['fecha_devo'];
            $estado = $_POST['estado'];
			$sql = "UPDATE libro SET categoria = '$categoria', fecha = '$fecha', apellidos = '$apellidos', nombres = '$nombres', grado = '$grado',seccion = '$seccion', correo = '$correo', nombrelibro = '$nombrelibro', fecha_devo = '$fecha_devo', estado = '$estado' WHERE codigo = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Solicitud actualizado correctamente' : 'No se puso actualizar Solicitud';

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

	header('location: solicitudes_libros.php');

?>