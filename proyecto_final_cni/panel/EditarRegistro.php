<?php
	session_start();
	include_once('dbconect.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$codigo_patrimonial = $_POST['codigo_patrimonial'];
			$descripcion_bien = $_POST['descripcion_bien'];
			$fecha_adquisicion = $_POST['fecha_adquisicion'];
			$estado_conservacion = $_POST['estado_conservacion'];
			$medida = $_POST['medida'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$serie = $_POST['serie'];
			$color = $_POST['color'];
			$documento_origen = $_POST['documento_origen'];
			$institucion_entrega = $_POST['institucion_entrega'];
			$cantidad = $_POST['cantidad'];
			$valor_unitario = $_POST['valor_unitario'];
			$total_actualizado = $_POST['total_actualizado'];
			$area_nivel = $_POST['area_nivel'];
			$oficina = $_POST['oficina'];


			$sql = "UPDATE biblioteca SET codigo_patrimonial = '$codigo_patrimonial', descripcion_bien = '$descripcion_bien',fecha_adquisicion = '$fecha_adquisicion', estado_conservacion = '$estado_conservacion', medida = '$medida', marca = '$marca', modelo = '$modelo', serie = '$serie', color = '$color', documento_origen = '$documento_origen', institucion_entrega = '$institucion_entrega', cantidad = '$cantidad', valor_unitario = '$valor_unitario', total_actualizado = '$total_actualizado', area_nivel = '$area_nivel', oficina = '$oficina' WHERE codigo = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Registro actualizado correctamente' : 'No se puso actualizar ';

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

	header('location: biblioteca.php');

?>