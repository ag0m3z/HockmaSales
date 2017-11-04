<?php
/**
 * Created by PhpStorm.
 * User: alejandro.gomez
 * Date: 06/01/2017
 * Time: 10:38 AM
 */

inc

?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><?php
    //framework Bootstrap
    \core\core::includeCSS("plugins/bootstrap/css/bootstrap.css",false);

    //frameworks fontawesome fonts
    \core\core::includeCSS("plugins/fonts/font-awesome/css/font-awesome.min.css",false);

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

        <div id="getBell"></div>
        <div id="show_modal"></div><div id="idgeneral"></div>
        <!-- Main content -->
        <section id="div_general" class="content ">

            <?php  //var_dump($_SESSION); ?>

            <div class="row animated fadeInLeft">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Compras</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <a href="#" data-toggle="tooltip" data-target="top" title="Prueba" class="small-box-footer">Mas Información <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Ventas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Productos</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Venta a Credito</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-minus-circle"></i>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#mdl_nueva_categoria_producto" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->

            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-6">

                    <div class="col-md-6">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-success ">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="box-header bg-success">
                                Top 5 Pendientes
                            </div>
                            <div class="box-footer no-padding">
                                <ul class="nav nav-stacked">
                                    <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                                    <li><a href="#">Tasks <span class="pull-right badge bg-aqua">05</span></a></li>
                                    <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                                    <li><a href="#">Followers <span class="pull-right badge bg-red">42</span></a></li>
                                </ul>
                            </div>
                        </div><!-- /.widget-user -->
                    </div><!-- /.col -->
                    <div class="col-md-6">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-danger ">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="box-header bg-danger">
                                Top 5 Pendientes
                            </div>
                            <div class="box-footer no-padding">
                                <ul class="nav nav-stacked">
                                    <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                                    <li><a href="#">Tasks <span class="pull-right badge bg-aqua">05</span></a></li>
                                    <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                                    <li><a href="#">Followers <span class="pull-right badge bg-red">42</span></a></li>
                                </ul>
                            </div>
                        </div><!-- /.widget-user -->
                    </div><!-- /.col -->
                    <div class="col-md-6">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-warning ">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="box-header bg-warning">
                                Top 5 Pendientes
                            </div>
                            <div class="box-footer no-padding">
                                <ul class="nav nav-stacked">
                                    <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                                    <li><a href="#">Tasks <span class="pull-right badge bg-aqua">05</span></a></li>
                                    <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                                    <li><a href="#">Followers <span class="pull-right badge bg-red">42</span></a></li>
                                </ul>
                            </div>
                        </div><!-- /.widget-user -->
                    </div><!-- /.col -->
                    <div class="col-md-6">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-info ">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="box-header bg-info">
                                Top 5 Pendientes
                            </div>
                            <div class="box-footer no-padding">
                                <ul class="nav nav-stacked">
                                    <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                                    <li><a href="#">Tasks <span class="pull-right badge bg-aqua">05</span></a></li>
                                    <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                                    <li><a href="#">Followers <span class="pull-right badge bg-red">42</span></a></li>
                                </ul>
                            </div>
                        </div><!-- /.widget-user -->
                    </div><!-- /.col -->

                </div>

                <div class="col-md-6">
                    <div id="grafica_sucursales"></div>
                </div>

            </div>

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
