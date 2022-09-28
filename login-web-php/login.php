<html>
    <head>
        <title>Ingresar</title>
    </head>
    
    <body>
    <center>
       
            <h1>¡Gracias por ser parte de nosotros!</h1>
             <h2>Ingresa sus datos para iniciar sesion</h2>

<form>
  <div class="inset">
  <p>
    <label for="email">Usuario</label>
    <input class = "colores" type="text" name="email" id="email">

  </p>
  <p>
    <label for="password">Contraseña</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Recordar Contraseña</label>
  </p>
  </div>
  <p class="p-container">
    <span>Recuperar contraseña...</span>
    <input class="myButton" type="submit" name="go" id="go" value="Ingresar">
  </p>
</form>
       	
        <a title="index" class="myButton" onclick="traer(this)">Inicio</a>
    </center>
</body>
</html>