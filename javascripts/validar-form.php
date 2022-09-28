
<?php if (isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    if (empty($nombre)) {
        echo "<p class='error'>* El campo nombre esta vacio</p>";
    } else {
        if (strlen($nombre) < 1) {
            echo "<p class='error'>* El nombre muy corto debe ser mayor a 5</p>";
        } else {
            if (strlen($nombre) > 15) {
                echo "<p class='error'>* El nombre muy largo debe ser menor a 15</p>";
            }else{
              echo "<p class='bien' id='nombreOk'>$nombre</p>";
            }
        }
    }

    $edad = $_POST["edad"];
    if (!is_numeric($edad)) {
        echo "<p class='error'>* Solo se permiten numeros</p>";
    }else{
      echo "<p class='bien' id='edadOk'>$edad</p>";
    }

    




    $correo = $_POST["correo"];
    if (empty($correo)) {
        echo "<p class='error'>* El campo correo esta vacio</p>";
    } else {
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>* El correo no es valido</p>";
        }else{
          echo "<p class='bien' id='correoOk'>$correo</p>";
    }

    }
}

?>
