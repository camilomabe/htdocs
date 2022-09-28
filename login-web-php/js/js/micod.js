function f_ajax(request, cadena, metodo) {
    this.efe_aja = $.ajax({
        url: request,
        cache: false,
        beforeSend: function () { /*httpR es la variable global donde guardamos la conexion*/
            $(document).ajaxStop();
            $(document).ajaxStart();
        },
        type: "POST",
        dataType: "html",
        contentType: 'application/x-www-form-urlencoded; charset=utf-8;',
        data: cadena,
        timeout:1000,
        success: function (datos) {
            metodo(datos);
        },
        error: function () {//jqXHR, textStatus, errorThrown 
            alert("Problemas de conexión");
        }
    });
}
function traer(ele) {
    name = $(ele).attr("title");
    request = "" + name + ".php";
    cadena = "a=0";
    metodo = function (datos) {
        $(".contenedor").html(datos);
    };
    f_ajax(request, cadena, metodo);
}




