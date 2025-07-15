

<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $fecha = $con->real_escape_string(htmlentities($_POST['fecha']));
     $nombres = $con->real_escape_string(htmlentities($_POST['nombres']));
    $apellidos= $con->real_escape_string(htmlentities($_POST['apellidos']));
     $correo = $con->real_escape_string(htmlentities($_POST['correo']));
    $celular = $con->real_escape_string(htmlentities($_POST['celular']));
    $estado = $con->real_escape_string(htmlentities($_POST['estado']));
    
    
    
  /*  $title = $con->real_escape_string(htmlentities($_POST['title']));
    $description = $con->real_escape_string(htmlentities($_POST['description']));*/
    

    $file_name = $_FILES['file']['name'];

    $new_name_file = null;

    if ($file_name != '' || $file_name != null) {
        $file_type = $_FILES['file']['type'];
        list($type, $extension) = explode('/', $file_type);
        if ($extension == 'pdf') {
            $dir = 'documento/';
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $file_tmp_name = $_FILES['file']['tmp_name'];
            //$new_name_file = 'files/' . date('Ymdhis') . '.' . $extension;
            $new_name_file = $dir . file_name($file_name) . '.' . $extension;
            if (copy($file_tmp_name, $new_name_file)) {
                
            }
        }
    }

    $ins = $con->query("INSERT INTO mesa_partes(fecha, nombres, apellidos, correo, celular, estado, url) VALUES ('$fecha' , '$nombres' , '$apellidos', '$correo' , '$celular', '$estado', '$new_name_file')");

    if ($ins) {
        echo 'success';
    } else {
        echo 'fail';
    }
} else {
    echo 'fail';
}



