<?php
require_once __DIR__ . '/../dao/UsuarioDao.php';

class UsuarioControlador{
    public function procesarLogin($usuario, $clave){
        $userDao = new usuarioDao();

        $userobj = $userDao->autenticar($usuario, $clave);

        if($userobj){
            session_start();
            $_SESSION['usuario'] = $userobj->usuario;
            header("Location: index.php?accion=menu");
        }else{
            header("Location: index.php?accion=login&error=1");
        }
        exit;
    }
}