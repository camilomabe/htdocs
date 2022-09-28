<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <title>Bootstrap</title>
   </head>
   <body>
      <a class='alert-link' href=JSON.php><img src="https://img.icons8.com/flat_round/64/000000/long-arrow-left.png"/> </a>
      <a class='alert-link' href=listas.php><img src="https://img.icons8.com/flat_round/64/000000/long-arrow-right.png"/></a>
      <center>
         <div class="container">
            <!-- Encabezado --> 
            <h1 class="mt-3 ">MamianB</h1>
            <h1 class="mt-3">Bootstrap</h1>
            <hr>
            <div class="row">
               <!-- Nombre --> 
               <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-5">
                  <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingese su nombre" required>
               </div>
               <!-- Email --> 
               <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-5">
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingese su email" required>
               </div>
               <!-- Ciudad --> 
               <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-5">
                  <select class="form-control" required>
                     <option>Seleccione ciudad</option>
                     <option>Bogota</option>
                     <option>Cali</option>
                     <option>medellis</option>
                     <option>Neiva</option>
                  </select>
               </div>
               <!-- Tipo Documento --> 
               <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-5">
                  <select class="form-control" required>
                     <option>Tipo documento</option>
                     <option>CC</option>
                     <option>L.E / DNI</option>
                     <option>CARNET EXT.</option>
                     <option>RUC</option>
                     <option>PASAPORTE</option>
                     <option>P. NAC.</option>
                     <option>OTROS</option>
                  </select>
               </div>
               <hr>
               <div>
               </div>
               <!-- Documento --> 
               <div class="col-6 col-sm-4">            
                  <input type="email" class="form-control" name="documento" aria-describedby="emailHelp" placeholder="Ingrese su numero de documento" required>
               </div>
               <div class="col-6 col-sm-4">
                  <input type="email" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingese su email" required>
               </div>
               <div class="col-6 col-sm-4">
                  <div class="btn-group">
                     <button type="button" class="btn btn-default dropdown-toggle"
                        data-toggle="dropdown">
                     Profesión <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Ingeniero</a></li>
                        <li><a href="#">Matematico</a></li>
                        <li><a href="#">Contador</a></li>
                        <li><a href="#">Chef</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-5">
                  <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingese su nombre" required>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-5">
                  <input type="email" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingese su email" required>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-5">
                  <input type="email" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Ingese su email" required>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6 mt-3 mb-5">
                  <select class="form-control">
                     <option>Tipo Documento</option>
                     <option>L.E / DNI</option>
                     <option>CARNET EXT.</option>
                     <option>RUC</option>
                     <option>PASAPORTE</option>
                     <option>P. NAC.</option>
                     <option>OTROS</option>
                  </select>
               </div>
               <hr>
               <div class="col-6 col-sm-4">            
                  <input type="email" class="form-control" name="documentos" aria-describedby="emailHelp" placeholder="aaaaaaa" required>
               </div>
               <div class="col-6 col-sm-4">
                  <input type="email" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="eeeeeeeeeeee" required>
               </div>
               <div class="col-6 col-sm-4">
                  <input type="email" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="iiiiiiiiiii" required>
               </div>
            </div>
            <hr>
            <br><br>
            <!-- Mensaje de alerta --> 
            <div class="alert alert-success" role="alert">
               <h4 class="alert-heading">¡Bien hecho!</h4>
               <p>Ah, sí, ha leído correctamente este importante mensaje de alerta. Este texto de ejemplo se extenderá un poco más para que pueda ver cómo funciona el espaciado dentro de una alerta con este tipo de contenido.</p>
               <hr>
               <p class="mb-0">Siempre que lo necesite, asegúrese de utilizar las utilidades de margen para mantener las cosas en orden.</p>
            </div>
            <hr>
            <br><br>
            <div>
               <br><br><br><br>
               <!-- Paginacion --> 
               <nav aria-label="Page navigation example">
                  <ul class="pagination">
                     <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                        </a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                        </a>
                     </li>
                  </ul>
               </nav>
               <nav aria-label="...">
                  <ul class="pagination">
                     <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                     </li>
                  </ul>
               </nav>
            </div>
            <br>
            <hr>
            <!-- Inicio de Sesion --> 
            <form>
               <div class="form-group" id="#login">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">
                     <p>We'll never share your email with anyone else.</p>
                     <p>Nunca compartiremos su correo electrónico con nadie más.</p>
                  </small>
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
               </div>
               <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <hr>
            <br><br>
            <div id="#listas">
               <select class="form-control form-control-lg">
                  <option>Large select 1</option>
                  <option>Large select 2</option>
                  <option>Large select 3</option>
                  <option>Large select 4</option>
                  <option>Large select 5</option>
                  <option>Large select 6</option>
                  <option>Large select 7</option>
               </select>
               <br>
               <select class="form-control">
                  <option>Default select 1</option>
                  <option>Default select 2</option>
                  <option>Default select 3</option>
                  <option>Default select 4</option>
                  <option>Default select 5</option>
                  <option>Default select 6</option>
                  <option>Default select 7</option>
                  <option>Default select 8</option>
               </select>
               <br>
               <select class="form-control form-control-sm">
                  <option>Small select 1</option>
                  <option>Small select 2</option>
                  <option>Small select 3</option>
                  <option>Small select 4</option>
                  <option>Small select 5</option>
                  <option>Small select 6</option>
               </select>
            </div>
            <br><br>
            <div class="form-check">
               <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
               <label class="form-check-label" for="defaultCheck1">
               Default checkbox
               </label>
            </div>
            <div class="form-check">
               <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
               <label class="form-check-label" for="defaultCheck2">
               Disabled checkbox
               </label>
            </div>
            <br><br>
            <form>
               <div class="form-group">
                  <label for="validation01">First name</label>
                  <input type="text" class="form-control is-valid" id="validation01" 
                     placeholder="First name" value="Mark" required>
               </div>
               <div class="form-group">
                  <label for="validation02">City</label>
                  <input type="text" class="form-control is-invalid" id="validation02" placeholder="City" required>
               </div>
            </form>
            <div>
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Username">
               </div>
               <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-addon"></span>
               </div>
               <div class="input-group">
                  <span class="input-group-addon"></span>
                  <input type="text" class="form-control">
                  <span class="input-group-addon"></span>
               </div>
            </div>
            <br>
         </div>
      </center>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </body>
</html>