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
        header("Location: index.php?accion=productos");
    }

    public function editar() {
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
        header("Location: index.php?accion=productos");
    }

    public function eliminar() {
        (new ProductoDao())->eliminar($_GET['id']);
        header("Location: index.php?accion=productos");
    }

    public function consultar() {
        $texto = $_GET['q'] ?? '';
        $productos = (new ProductoDao())->consultar($texto);
        include 'vista/productos_consultar.php';
    }
}
