<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
		<center>
		<div class="w3-container w3-green">
			<h2>Iniciar registro</h2>
		</div>
		<div>
			<form class="w3-container" action="controller_login.php" method="post">
				<p>
					<label class="w3-label">Nombre de usuario o correo electrónico</label>
					<input class="w3-input w3-border" type="text" name="usuario" required="">
				</p>
				<p>
					<label class="w3-label">Password</label>
					<input class="w3-input w3-border" type="password" name="pas" required="">
				</p>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
					<button class="w3-btn w3-green">Completar registro</button>
				
				<a class="w3-btn w3-green" href="index.php">Ahora no</a><p>
			</form>
		</div>
</center>
</body>
</html>