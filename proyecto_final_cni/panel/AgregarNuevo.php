<?php
session_start();
include_once('dbconect.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO biblioteca (codigo_patrimonial,descripcion_bien,fecha_adquisicion,estado_conservacion,medida,marca,modelo,serie,color,documento_origen,institucion_entrega,cantidad,valor_unitario,total_actualizado,area_nivel,oficina) VALUES (:codigo_patrimonial, :descripcion_bien, :fecha_adquisicion, :estado_conservacion ,:medida, :marca, :modelo, :serie, :color, :documento_origen, :institucion_entrega, :cantidad, :valor_unitario, :total_actualizado, :area_nivel, :oficina)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':codigo_patrimonial' => $_POST['codigo_patrimonial'] , ':descripcion_bien' => $_POST['descripcion_bien'] , ':fecha_adquisicion' => $_POST['fecha_adquisicion'], ':estado_conservacion' => $_POST['estado_conservacion'], ':medida' => $_POST['medida'], ':marca' => $_POST['marca'], ':modelo' => $_POST['modelo'], ':serie' => $_POST['serie'], ':color' => $_POST['color'], ':documento_origen' => $_POST['documento_origen'], ':institucion_entrega' => $_POST['institucion_entrega'], ':cantidad' => $_POST['cantidad'], ':valor_unitario' => $_POST['valor_unitario'], ':total_actualizado' => $_POST['total_actualizado'], ':area_nivel' => $_POST['area_nivel'], ':oficina' => $_POST['oficina'])) ) ? 'Registro guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	
}

header('location: biblioteca.php');
	
?>