<?php
/**
 * Created by PhpStorm.
 * User: alejandro.gomez
 * Date: 03/10/2017
 * Time: 06:48 PM
 */

namespace models\login;


class LoginModels
{
    public $_Usuario; //Nombre de usuario
    public $_Clave; //Contraseña de Acceso
    public $_HostName; //Nombre del equipo visitante
    public $_IpProxy; //Ip Publica del visitante
    public $_IpLan; //Ip Local del visitante
    //Nombre del navegador del visitante
    public $_UserAgent;
    //Zona geografica de donde nos visita
    public $_Zone;

    public function LoginIn(){

        //Validar Datos vacios

    }

    public function LoginOut(){

    }

}