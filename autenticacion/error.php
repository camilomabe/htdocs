<!DOCTYPE html>
<html>
<head>
	<title>Error al ingresar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
	<center>
	<header>
		<div class="w3-container w3-orange w3-center">
			<p><label><h2>¡Bienvenido!</h2></label></p>
		</div>
</header>

	<div class="w3-container w3-red">
		<h1><?php echo $_GET['mensaje'];?></h1>
		<a class="w3-btn w3-green" href="index.php">Volver a ingresar</a>
		<br>
		<br>
	</div>
	</center>
</body>
</html>