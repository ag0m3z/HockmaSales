function getMenu(opc,parametros) {

    switch (opc){
        case 1:
            break;
        //Salir del Sistema
        case 2:
            break;
        //Ventas - Caja y Pedidos
        case 3:
            $("#div_general").html('');
            $("#div_general").load('app/views/ventas/FrmVentas.php');

            break;
        //Compras
        case 4:

            $("#div_general").html('');
            $("#div_general").load('app/views/compras/FrmCompras.php');

            break;
         //Inventario
        case 5:
            $("#div_general").html('');
            $("#div_general").load('app/views/inventario/FrmInventario.php');
            break;
        // Reportes
        case 6:
            $("#div_general").html('');
            $("#div_general").load('app/views/reportes/FrmReportes.php');
            break;
        // Configuracion
        case 7:
            $("#div_general").html('');
            $("#div_general").load('app/views/configuracion/FrmConfig.php');
            break;
    }


}


/**
 * Funciones de Sistema
 *
 */

var MyAlert = function (mensaje) {

    alert(mensaje);
};

function jsRemoveWindowLoad() {
    // eliminamos el div que bloquea pantalla
    $("#screenload").remove();

}

function jsShowWindowLoad(mensaje) {
    //eliminamos si existe un div ya bloqueando
    jsRemoveWindowLoad();

    //si no enviamos mensaje se pondra este por defecto
    if (mensaje === undefined) mensaje = " ";

    //centrar imagen gif
    height = 20;//El div del titulo, para que se vea mas arriba (H)
    var ancho = 0;
    var alto = 0;

    //obtenemos el ancho y alto de la ventana de nuestro navegador, compatible con todos los navegadores
    if (window.innerWidth == undefined) ancho = window.screen.width;
    else ancho = window.innerWidth;
    if (window.innerHeight == undefined) alto = window.screen.height;
    else alto = window.innerHeight;

    //operación necesaria para centrar el div que muestra el mensaje
    var heightdivsito = alto/2 - parseInt(height)/2;//Se utiliza en el margen superior, para centrar

    //imagen que aparece mientras nuestro div es mostrado y da apariencia de cargando
    imgCentro = "<div style='text-align:center;height:" + alto + "px;'><div class='text-white text-bold'  style='margin-top:" + heightdivsito + "px; font-size:20px;'>" +
        "<div class='preloader pl-size-l'><div class='spinner-layer pl-red'><div class='circle-clipper left'><div class='circle'></div> </div><div class='circle-clipper right'><div class='circle'></div> </div></div></div></div></div>";

    //creamos el div que bloquea grande------------------------------------------
    div = document.createElement("div");
    div.id = "screenload";
    div.style.width = ancho + "px";
    div.style.height = alto + "px";
    $("body").append(div);

    //creamos un input text para que el foco se plasme en este y el usuario no pueda escribir en nada de atras
    input = document.createElement("input");
    input.id = "focusInput";
    input.type = "text"

    //asignamos el div que bloquea
    $("#screenload").append(input);

    //asignamos el foco y ocultamos el input text
    $("#focusInput").focus();
    $("#focusInput").hide();

    //centramos el div del texto
    $("#screenload").html(imgCentro);

}

function fnloadSpinner(opc){


    switch (opc){
        // mostrar fa-Spinner
        case 1:
            jsShowWindowLoad();
            break;
        case 2:
            // Ocultar fa-Spinner
            jsRemoveWindowLoad();
            break;
        default :
            MyAlert("error no se encontro la opci&oacute;n solicitada","error");
            break;
    }
}

var getthowError = function (jqXHR,textStatus) {

    if (jqXHR.status === 0) {

        MyAlert('Not connect: Verify Network.','danger');

    } else if (jqXHR.status == 404) {

        MyAlert('Requested page not found [404]','danger');

    } else if (jqXHR.status == 500) {

        MyAlert('Internal Server Error [500].','danger');

    } else if (textStatus === 'parsererror') {

        MyAlert('Requested JSON parse failed.','danger');

    } else if (textStatus === 'timeout') {

        MyAlert('Time out error.','danger');

    } else if (textStatus === 'abort') {

        MyAlert('Ajax request aborted.','danger');

    } else {

        MyAlert('Uncaught Error: ' + jqXHR.responseText,'danger');

    }

}