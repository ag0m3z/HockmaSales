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

    $_SESSION['dataHome']['idusuario'] = 1;
    echo json_encode(
        array(
            'result'=>true,
            'message'=>'Consulta Exitosa',
            'data'=>array()
        )
    );


}else{
    echo json_encode(
        array(
            'result'=>false,
            'message'=>'Metodo no soportado',
            'data'=>array()
        )
    );
}
