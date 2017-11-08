<?php
/**
 * Created by PhpStorm.
 * User: alejandro.gomez
 * Date: 06/01/2017
 * Time: 10:38 AM
 */

?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><?php
    //framework Bootstrap
    \core\core::includeCSS("plugins/bootstrap/css/bootstrap.css",false);

    //frameworks fontawesome fonts
    \core\core::includeCSS("plugins/fonts/font-awesome/css/font-awesome.min.css",false);
    \core\core::includeCSS("plugins/fonts/ionicons-2.0.1/css/ionicons.css",false);
    //tema de la aplicacion
    \core\core::includeCSS("content/css/AdminLTE.css",false);

    //themas
    \core\core::includeCSS("content/css/skins/_all-skins.css",false);

    // Nombre de la pagina
    ?><title>Sistema 12</title></head><body class="skin-red-light fixed sidebar-collapse sidebar-mini">
<div class="wrapper">
    <?php include "app/layout/header.inc";
    include "app/layout/menu_principal.inc";?>
    <div class="content-wrapper">
        <!-- Main content -->
        <section id="div_general" class="content ">

        </section>
        <!-- /.content -->
    </div>
    <?php include "app/layout/pie_de_pagina.inc"?>
    <?php include "app/layout/menu_right.inc"?>
</div>
<?php
\core\core::includeJS("plugins/jQuery/",true);
\core\core::includeJS("content/js/app.js",false);
\core\core::includeJS("plugins/jQuery UI/jquery-ui.js",false);
\core\core::includeJS("plugins/bootstrap/js/bootstrap.js",false);

\core\core::includeJS("content/js/jsGeneral.js",false);
?>
<script language="JavaScript">
    $(document).ready(function(){

        $("#head_buscar_cliente").focus();

        $("#head_buscar_cliente").on('keyup', function (e) {
            if (e.keyCode == 13) {
                // Do something
                //setVentaPagos({'opc':1,'folio':this.value});
            }
        });

        $(".ion").css('font-size','19px');

        $('.sidebar-menu li').click(
            function () {
                $(".sidebar-menu li").removeClass("active");
                $(this).addClass("active");
            }
        );


    });
</script>
</body>
</html>
