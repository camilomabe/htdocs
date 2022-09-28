<?php 
   session_start();
   unset($_SESSION['usuario']);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Index</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
   </head>
   <body>
   	<center>

      <div class="form-row">
         <div class="form-group col-md-6">
            <div class="w3-container w3-green">
               <h2>Green Login</h2>
            </div>
            <form class="w3-container" action="controller_login.php" method="post">
               <p>
                  <label class="w3-label">
                  Usuario
                  </label>
                  <input class="w3-input w3-border " type="text" name="usuario">
               </p>
               <p>
                  <label class="w3-label">Password</label>
                  <input class="w3-input w3-border" type="password" name="pas">
               </p>
               <p>
                  <input type="hidden" name="entrar" value="entrar">
                  <button class="w3-btn w3-green">Iniciar Sesion</button>
                  <a href="registrarse.php" class="w3-btn w3-green">Registrarse</a>
            </form>
         </div>
      </div>
      </center>
   </body>
</html>