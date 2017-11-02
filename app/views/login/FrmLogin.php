<?php
/**
 * Created by PhpStorm.
 * User: agomez
 * Date: 23/09/2017
 * Time: 12:35 AM
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="content/css/AdminLTE.css">

</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Hock</b>Sales</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingrese para iniciar sesion</p>
        <div class="form-group has-feedback">
            <input id="textUser" class="form-control" placeholder="Correo">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="textPass" class="form-control" placeholder="Contraseña">
            <span class="glyphicon glyphiconlock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <button id="btnLoginIn" class="btn btn-primary btn-block "> Entrar</button>
        </div>

        <div class="row">
            <div class="col-md-6"><span class="small text-aqua text-left"><i></i> Recuperar cuenta</span></div>
            <div class="col-md-6"><span class="small text-aqua text-right"><i></i> Registrarse</span></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <p class="small text-center">
                    Aleandadkad adsl aladlads aldldaldsa
                    ladldalda
                    ladlsdl adkaskdk adkakdskdas kadskdaskdlasdkalsdlkadsl kadldsla
                </p>
            </div>

            <div class="col-md-1"></div>
        </div>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<script src="plugins/jQuery/jquery-3.2.1.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>
<?=\core\core::includeJS("content/js/app.js",false)?>
<?=\core\core::includeJS("content/js/jsGeneral.js",false)?>
<?=\core\core::includeJS("content/js/jsLogin.js",false)?>
</body>
</html>
