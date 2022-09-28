<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>

	<center>
	
	<div class="w3-container w3-black w3-center">
		<br>
				<h2>CRUD</h2>
		<br> 
	</div>
	<br>
	<p><label><h2>¡Bienvenido Camilo!</h2></label></p>

	<br>
		<form class="w3-container" action="controller_login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>

	</form>
	<br>
	<footer>
	<div class="w3-container w3-black">
		<h4>C mamian B 2021</h4>
	</div>
</footer>
	</center>
</body>
</html>


