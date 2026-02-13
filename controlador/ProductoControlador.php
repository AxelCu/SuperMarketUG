<?php
require_once 'dao/ProductoDao.php';
require_once 'modelo/Producto.php';

class ProductoControlador {

    public function listar() {
        $dao = new ProductoDao();
        $productos = $dao->listar();
        include 'vista/productos_listar.php';
    }

    public function guardar() {
        $p = new Producto();
        $p->Nombre = $_POST['Nombre'];
        $p->Categoria = $_POST['Categoria'];
        $p->Precio = $_POST['Precio'];
        $p->Stock = $_POST['Stock'];

        (new ProductoDao())->insertar($p);

        header("Location: index.php?accion=productos&mensaje=guardado");
        exit;
    }

    public function editar() {
        if (!isset($_GET['id'])) {
            include 'vista/productos_form.php';
            return;
        }

        $dao = new ProductoDao();
        $producto = $dao->buscar($_GET['id']);
        include 'vista/productos_form.php';
    }

    public function actualizar() {
        $p = new Producto();
        $p->Id = $_POST['Id'];
        $p->Nombre = $_POST['Nombre'];
        $p->Categoria = $_POST['Categoria'];
        $p->Precio = $_POST['Precio'];
        $p->Stock = $_POST['Stock'];

        (new ProductoDao())->actualizar($p);

        header("Location: index.php?accion=productos&mensaje=actualizado");
        exit;
    }

    public function eliminar() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?accion=productos");
            exit;
        }

        (new ProductoDao())->eliminar($_GET['id']);

        header("Location: index.php?accion=productos&mensaje=eliminado");
        exit;
    }

    public function consultar() {
        $dao = new ProductoDao();
        $productos = $dao->listar(); 
        include 'vista/productos_consultar.php';
    }

    public function ajaxConsultar() {
        $q = $_GET['q'] ?? '';
        $dao = new ProductoDao();
        $datos = $dao->buscarAjax($q);

        header('Content-Type: application/json');
        echo json_encode($datos);
        exit;
    }

    public function verProducto() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?accion=consultarProductos");
            exit;
        }

        $dao = new ProductoDao();
        $producto = $dao->buscar($_GET['id']);

        if (!$producto) {
            header("Location: index.php?accion=consultarProductos");
            exit;
        }

        include 'vista/productos_ver.php';
    }
}
