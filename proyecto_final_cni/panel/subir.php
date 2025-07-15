
      <?php
    
    $fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"],"subidas/".$fichero["name"]);

// Redirigiendo hacia atrÃĄs
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>

