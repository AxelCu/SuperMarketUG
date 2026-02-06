<?php
require_once 'controlador/UsuarioControlador.php';

$accion = $_GET['accion'] ?? 'inicio';

$usuarioCtrl = new UsuarioControlador();

switch ($accion) {

    case 'login':
        include 'vista/login.php';
        break;

    case 'procesarLogin':
        $usuarioCtrl->procesarLogin(
            $_POST['usuario'] ?? '',
            $_POST['clave'] ?? ''
        );
        break;

    case 'menu':
        include 'vista/menu.php';
        break;

    case 'consultarAlumnos':
        require_once 'controlador/AlumnoControlador.php';
        (new AlumnoControlador())->consultar();
        break;

    case 'verAlumno':
        require_once 'controlador/AlumnoControlador.php';
        (new AlumnoControlador())->ver();
        break;

    case 'editarAlumno':
        require_once 'controlador/AlumnoControlador.php';
        (new AlumnoControlador())->editar();
        break;

    case 'eliminarAlumno':
        require_once 'controlador/AlumnoControlador.php';
        (new AlumnoControlador())->eliminar();
        break;

    case 'inicio':
    default:
        include 'vista/inicio.php';
        break;
}
?>
