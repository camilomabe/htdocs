<html>
    <head>
        <title>Ingresar</title>
    </head>
    
    <body>
    <center>
       
            <h1>¡Registrate para que seas parte de nosotros!</h1>

<form name="nuevo_usuario" method="POST" action="guarda_usuario.php">
        
<h1>Ingrese los siguientes datos</h1>
<div class="inset">
        <table>

            <tr><td>Nombre: </td><td>
                <input type="text" name="name" id="id">
                
            <tr><td>Correo: </td><td>
                <input type="text" name="email" id="email">
                
            <tr><td>Sitio Web: </td><td>
                <input type="text" name="website" id="website">
                
            <tr><td>Comentario: </td><td>
                <input type="text" name="comment" rows="5" cols="40"></input>

            <tr><td>Password: </td><td>
                <input type="text" name="pass" rows="5" cols="40"></input>

            <tr><td>Confirmar: </td><td>
                <input type="text" name="conf" rows="5" cols="40"></input>

            <tr><td>Gender: </td><td>
                <input type="radio" name="gender" value="Femenino">Femenino
                <input type="radio" name="gender" value="Masculino">Masculino
                <input type="radio" name="gender" value="Otro">Otro
                
        </table>
        <table>
            <tr><td>
              <input class="myButton" type="submit" name="submit" value="Submit"> 
            </td><td>
              <input class="myButton" type="submit" name="eviar" value="Limpiar"/>
            </td>
            </tr>
        </table>
         <br>
         </div>
    </form>
        <a title="index" class="myButton" onclick="traer(this)">Inicio</a>
            </center>
</body>
</html>