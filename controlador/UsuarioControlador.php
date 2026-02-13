<?php
require_once __DIR__ . '/../dao/UsuarioDao.php';

class UsuarioControlador{

    public function procesarLogin($usuario, $clave){

        if(empty(trim($usuario)) || empty(trim($clave))){
            header("Location: index.php?accion=login&error=vacio");
            exit;
        }

        $userDao = new UsuarioDao();
        $userobj = $userDao->autenticar($usuario, $clave);

        if($userobj){
            session_start();
            $_SESSION['usuario'] = $userobj->usuario;

            header("Location: index.php?accion=menu");
        }else{
            header("Location: index.php?accion=login&error=incorrecto");
        }

        exit;
    }
}
