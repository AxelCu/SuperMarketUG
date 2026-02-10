<?php
require_once 'controlador/UsuarioControlador.php';

$accion = $_GET['accion'] ?? 'inicio';

$usuarioCtrl = new UsuarioControlador();

switch ($accion) {

    // 🔐 LOGIN
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

    // 📦 PRODUCTOS (NUEVO)
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

    case 'inicio':
    default:
        include 'vista/inicio.php';
        break;
}
?>
