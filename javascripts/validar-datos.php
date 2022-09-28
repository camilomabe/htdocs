
<?php 
if(isset($_POST["submit"])){
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $correo =$_POST["correo"];
}
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link href="css/validar-form.css" rel="stylesheet" type="text/css"/>
    <title>Leer JSON</title>

  </head>
      <a class='alert-link' href=index.php><img src="https://img.icons8.com/flat_round/64/000000/long-arrow-left.png"/></a>
    <a class='alert-link' href=Bootstrap.php><img src="https://img.icons8.com/flat_round/64/000000/long-arrow-right.png"/></a> 
  <body>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >

      <h1>Registro</h1>
      <label for="">Nombre:</label>
      <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre ?>" >
      <label for="">Edad:</label>
      <input type="text" name="edad"  value="<?php if(isset($edad))echo $edad ?>" >
      <label for="">Correo:</label>
      <input type="text" name="correo"  value="<?php if(isset($correo))echo $correo ?>" >

      <input class="submit" type="submit"  name="submit">

      
      <?php  
        include("validar-form.php");
      ?> 
      
</form>

  </body>
</html>