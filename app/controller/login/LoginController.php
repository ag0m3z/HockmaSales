<?php
/**
 * Created by PhpStorm.
 * User: alejandro.gomez
 * Date: 03/10/2017
 * Time: 06:47 PM
 */

include "../../../core/core.php";
include "../../../core/sesiones.php";
include "../../models/login/LoginModels.php";

\core\core::HeaderContetType();

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $idUsuario = $_SESSION['dataHome']['idusuario'];
    $idDepartamento = $_SESSION['dataHome']['iddepartamento'];
    $idPuesto = $_SESSION['dataHome']['idpuesto'];
    $idPerfil = $_SESSION['dataHome']['idperfil'];



}else{
    echo json_encode(
        array(
            'result'=>false,
            'message'=>'Metodo no soportado',
            'data'=>array()
        )
    );
}
