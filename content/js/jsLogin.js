$(function(){

    $("[data-mask]").inputmask();

    /**
     * Boton para iniciar sesion
     */
    $("#btnLoginIn").on('click',function(){

        var user,pass;

        user = 'agomez';
        pass='algo#123';

        loginIn(user,pass);

    });



    /**
     * Boton para registrarse
     */
    $("#btnRegister").on('click',function(){

        fnloadSpinner(1);

    });

    /**
     * Boton para mostrar la caja de registro
     */
    $("#btnBoxRegister").on('click',function () {

        $("#box01").addClass('hidden');
        $("#box02").removeClass('hidden').addClass('animated bounceIn');

    });

    /**
     * Boton para mostrar la caja de loginIn
     */
    $("#btnBoxLogin").on('click',function () {

        $("#box02").addClass('hidden');
        $("#box01").removeClass('hidden');

    });

});

//Variables globales de la AppJsLogin
var mensaje = null;
var confirm = false;

//Funcion para iniciar sesion
var loginIn = function(a,b){

    $.ajax({
        url:'app/controller/login/LoginController.php',
        type:"get",
        dataType:"json",
        async:true,
        cache:false,
        beforeSend:function(){
            //script para terminar el loading
        },
        data:{
            user:a,pass:b
        }
    }).done(function (response) {
        //script para el loading

        console.log(response);
        location.reload();

    }).fail(function (jqhr,textStatus,errno) {
        //script para terminar el loading

        //Mostrar Mensaje con codigo de Error
        getthowError(jqhr,textStatus);

    });

};
