var efe_aja;
function f_ajax(request, cadena, metodo) {
    this.efe_aja = $.ajax({
        url: request,
        cache: false,
        beforeSend: function () { /*httpR es la variable global donde guardamos la conexion*/
            $(document).ajaxStop();
            $(document).ajaxStart();
        },
        type: "GET",
        dataType: "html",
        contentType: 'application/x-www-form-urlencoded; charset=utf-8;',
        data: cadena,
        timeout: 8000,
        success: function (datos) {
            metodo(datos);
        },
        error: function () {
            alert("No hay conexión");
        }
    });
}
function p1(){
        request = "Sol.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p2(){
        request = "Mercurio.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p3(){
        request = "Venus.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p4(){
        request = "Tierra.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p5(){
        request = "Marte.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p6(){
        request = "Jupiter.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p7(){
        request = "Saturno.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p8(){
        request = "Urano.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p9(){
        request = "Neptuno.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }
    function p10(){
        request = "Operaciones.html";
        cadena = "a=1";
        metodo = function(datos){
            $("#contec").html(datos);
        };
        f_ajax(request,cadena,metodo);
    }


  function suma(){
      request = "suma.php";
      var n1 = $("#n1").val();
      var n2 = $("#n2").val();

      cadena = "n1=: " + n1 + "n2=: "+ n2;
      metodo = function(datos){
            $("#respuesta").html(datos);
        };
      f_ajax(request,cadena,metodo);
      
      
  }
    