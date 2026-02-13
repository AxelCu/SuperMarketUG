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

    case 'logout':
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php?accion=login&mensaje=logout");
    exit;


    case 'menu':
        include 'vista/menu.php';
        break;

    case 'productos':
        require_once 'controlador/ProductoControlador.php';
        (new ProductoControlador())->listar();
        break;

    case 'guardarProducto':
        require_once 'controlador/ProductoControlador.php';
        (new ProductoControlador())->guardar();
        break;

    case 'editarProducto':
        require_once 'controlador/ProductoControlador.php';
        (new ProductoControlador())->editar();
        break;

    case 'actualizarProducto':
        require_once 'controlador/ProductoControlador.php';
        (new ProductoControlador())->actualizar();
        break;

    case 'eliminarProducto':
        require_once 'controlador/ProductoControlador.php';
        (new ProductoControlador())->eliminar();
        break;

    case 'consultarProductos':
        require_once 'controlador/ProductoControlador.php';
        (new ProductoControlador())->consultar();
        break;

    case 'verProducto':
        require_once 'controlador/ProductoControlador.php';
        (new ProductoControlador())->verProducto();
        break;

    case 'ajaxConsultar':
        require_once 'dao/ProductoDao.php';
        header('Content-Type: application/json');
        echo json_encode(
            (new ProductoDao())->consultar($_GET['q'] ?? '')
        );
        exit;

    case 'inicio':
    default:
        include 'vista/inicio.php';
        break;
}
?>
