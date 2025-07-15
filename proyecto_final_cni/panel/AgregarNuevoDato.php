<?php
session_start();
include_once('dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO libro (categoria, fecha, apellidos, nombres, grado, seccion, correo, nombrelibro, fecha_devo, estado) VALUES (:categoria, :fecha, :apellidos, :nombres, :grado, :seccion, :correo, :nombrelibro, :fecha_devo, :estado)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':categoria' => $_POST['categoria'], ':fecha' => $_POST['fecha'], ':apellidos' => $_POST['apellidos'] , ':nombres' => $_POST['nombres'] , ':grado' => $_POST['grado'], ':seccion' => $_POST['seccion'], ':correo' => $_POST['correo'], ':nombrelibro' => $_POST['nombrelibro'], ':fecha_devo' => $_POST['fecha_devo'], ':estado' => $_POST['estado'])) ) ? 'Registro guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: solicitudes_libros.php');
	
?>