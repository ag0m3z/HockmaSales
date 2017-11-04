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

<div id="box01" class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Hock</b>Sales</a>
    </div><!-- /.login-logo -->
    <div  class="login-box-body">

        <p class="login-box-msg text-bold">Ingresar</p>
        <div class="form-group has-feedback">
            <input id="textUser" class="form-control" placeholder="Correo">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="textPass" class="form-control" placeholder="Contraseña">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <button id="btnLoginIn" class="btn btn-primary btn-block "> Entrar</button>

        </div>

        <div class="row">
            <div class="col-md-6"><span id="btnRecovery" class="small pull-left btn btn-link btn-xs"><i></i> Recuperar cuenta</span></div>
            <div class="col-md-6"><span id="btnBoxRegister" class="small pull-right btn btn-link btn-xs"><i></i> Registrarse</span></div>
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

<div id="box02" class="register-box hidden">
    <div class="register-logo">
        <a href="../../index2.html"><b>Hock</b>Sales</a>
    </div><!-- /.login-logo -->
    <div  class="register-box-body ">

        <p class="login-box-msg text-bold">Registrarse</p>

        <div class="row">

            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="form-group form-control-sm">
                        <label class="small">Nombre de la Empresa</label>
                        <input title="Nombre de la empresa" class="form-control input-sm" placeholder="Nombre de la Empresa">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group form-control-sm">
                        <label class="small">Descripción</label>
                        <textarea title="Descripción de la empresa" class="form-control input-sm" placeholder="Descripción de la Empresa"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-control-sm">
                        <label class="small">Teléfono</label>
                        <input title="Teléfono de la empresa" class="form-control input-sm" placeholder="Teléfono de la Empresa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-control-sm">
                        <label class="small">Otro Teléfono</label>
                        <input title="Otro Teléfono" class="form-control input-sm" placeholder="Otro Teléfono">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-control-sm">
                        <label class="small">Celular</label>
                        <input title="Celular de la empresa" class="form-control input-sm" placeholder="Celular de la Empresa">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group form-control-sm">
                        <label class="small">Domicilio</label>
                        <input title="Domicilio de la empresa" class="form-control input-sm" placeholder="Domicilio de la Empresa">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group form-control-sm">
                        <label class="small">Correo</label>
                        <input title="Correo de la empresa" class="form-control input-sm" placeholder="Correo de la Empresa">
                    </div>
                </div>
            </div>

           <div class="col-md-6">
               <div class="col-md-4">
                   <div class="form-group form-control-sm">
                       <label class="small">Nombre</label>
                       <input title="Nombre" class="form-control input-sm" placeholder="Nombre">
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group form-control-sm">
                       <label class="small">Ap. Paterno</label>
                       <input title="Apellido Paterno" class="form-control input-sm" placeholder="Apellido Paterno">
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group form-control-sm">
                       <label class="small">Ap. Materno</label>
                       <input title="Apellido Materno" class="form-control input-sm" placeholder="Apellido Materno">
                   </div>
               </div>

               <div class="col-md-4">
                   <div class="form-group form-control-sm">
                       <label class="small">Usuario</label>
                       <input title="Usuario" class="form-control input-sm" placeholder="Usuario">
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group form-control-sm">
                       <label class="small">Contraseña</label>
                       <input title="Contraseña" class="form-control input-sm" placeholder="Contraseña">
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="form-group form-control-sm">
                       <label class="small">Confirmar</label>
                       <input title="Confirmar Contraseña" class="form-control input-sm" placeholder="Confirmar Contraseña">
                   </div>
               </div>

               <div class="col-md-12">
                   <div class="form-group form-control-sm">
                       <label class="small">Plan de Servicio</label>
                       <select title="Contraseña" class="form-control input-sm">
                           <option value="1">Basico</option>
                           <option value="2">Pyme</option>
                           <option value="3">Premium</option>
                       </select>
                   </div>
               </div>

               <div class="col-md-7">
                   <button id="btnRegister" class="btn btn-primary btn-block "><i class="glyphicon glyphicon-bullhorn"></i> Registrarse</button>
               </div>
               <div class="col-md-5"><span id="btnBoxLogin" class="btn btn-default btn-block "> Iniciar Sesion</span></div>

           </div>

        </div>



    </div>
</div><!-- /.login-box -->

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="plugins/jQuery UI/jquery-ui.js"></script>

<!-- Bootstrap 3.3.5 -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>
<?=\core\core::includeJS("content/js/app.js",false)?>
<?=\core\core::includeJS("content/js/jsGeneral.js",false)?>
<?=\core\core::includeJS("content/js/jsLogin.js",false)?>
</body>
</html>
