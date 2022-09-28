<!DOCTYPE html>
<html lang="Sp">
   <head>
      <title>Listas</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <link rel="stylesheet" href="css/custom.css">
   </head>
   <body>
      <a class='alert-link' href=bootstrap.php><img src="https://img.icons8.com/flat_round/64/000000/long-arrow-left.png"/> </a>
      <a class='alert-link' href=plantilla.php><img src="https://img.icons8.com/flat_round/64/000000/long-arrow-right.png"/></a>
      <center>
         <div class="container">
            <!-- Encabezado --> 
            <h2 class="mt-3 ">MamianB</h2>
            <h3 class="mt-3">Listas</h3>
            <hr>
            <br>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
               <div class="row">
                  <!-- Ingrese su primer nombre -->
                  <div class="col-6 col-sm-4">            
                     <input type="text" class="form-control" name="nombre_1" placeholder="Primer nombre">
                     
                  </div>
                  <!--  Ingrese su primer apellido -->
                  <div class="col-6 col-sm-4">
                     <input type="text" class="form-control" name="apellido_1"  placeholder="Primer apellido">
                     

                  </div>
                  <!--  Seleccione tipo de documento -->
                  <div class="col-6 col-sm-4">
                     <select name="tipo_documento" class="form-control">
                        <option>Tipo documento</option>
                        <option>CC</option>
                        <option>L.E / DNI</option>
                        <option>CARNET EXT.</option>
                        <option>RUC</option>
                        <option>PASAPORTE</option>
                        <option>P. NAC.</option>
                        <option>OTROS</option>
                     </select>

                  </div>                  <br><br>
                  <!--  Ingrese su segundo nombre -->
                  <div class="col-6 col-sm-4">
                     <input type="text" class="form-control" name="nombre_2"  placeholder="Segundo nombre">

                  </div>
                  <!-- Ingrese su segundo apellido -->
                  <div class="col-6 col-sm-4">            
                     <input type="text" class="form-control" name="apellido_2"  placeholder="Segundo apellido">

                  </div>
                  <!--  Ingrese su numero de documento -->
                  <div class="col-6 col-sm-4">
                     <input type="int" class="form-control" name="numero_documento"  placeholder="Numero de documento">

                  </div>
                  <br><br>
                  <!-- Seleccione ciudad -->
                  <div class="col-6 col-sm-4">
                     <select name="ciudad" class="form-control">
                        <option>Seleccione ciudad</option>
                        <option>Bogota</option>
                        <option>Cali</option>
                        <option>medellis</option>
                        <option>Neiva</option>
                     </select>

                  </div>


                  <!--  Profesión -->
                  <div class="col-6 col-sm-4">
                     <select name="profesion" class="form-control">
                        <option>Profesión</option>
                        <option>Ingeniero</option>
                        <option>Matematico</option>
                        <option>Contador</option>
                        <option>Chef</option>
                        <option>OTROS</option>
                     </select>


                  </div>
                  <br><br>
                  <!--  Version -->
                  <div class="col-6 col-sm-4">
                     <select name="versionSO" class="form-control" name="OS1">
                        <option value="0">Version</option>
                        <option value="1">Windows Vista</option>
                        <option value="2">Windows 7</option>
                        <option value="3">Windows XP</option>
                        <option value="10">Fedora</option>
                        <option value="11">Debian</option>
                        <option value="12">Suse</option>
                     </select>

                  </div>
                  <!--  Sitema operativo -->
                  <div class="col-6 col-sm-4">
            <select name="tamanio" class="form-control">
               <option>Seleccione tamaño</option>
               <option>50 mt</option>
               <option>60 mt</option>
               <option>70 mt</option>
               <option>80 mt</option>
               <option>90 mt</option>
            </select>

                  </div>
                  <!--  Automatizacion en -->
                  <div class="col-6 col-sm-4">
                     <div class="btn-group">
                        <button type="button" class="btn btn-danger">Automatizacion en</button>
                        <button type="button" class="btn btn-danger dropdown-toggle"
                           data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Desplegar menú</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="java.php">Java</a></li>
                           <li><a href="puntonet.php">.NET</a></li>
                           <li><a href="appium.php">Appium</a></li>
                           <li><a href="robotframework.php">Robot Framework</a></li>
                           <li><a href="python.php">Python</a></li>
                           <li><a href="ruby.php">Ruby</a></li>
                        </ul>

                     </div>
                  </div>
                  <br><br>
                  <center><input type="submit"></center>
                  <hr>
                  <!--   -->
               </div>
            </form>

               
     <br><br><br><br><br><br>
            <hr>
      </center>
      </div>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </body>
</html>