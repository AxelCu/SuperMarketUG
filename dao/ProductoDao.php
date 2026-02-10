<?php
require_once 'bd/Conexion.php';
require_once 'modelo/Producto.php';

class ProductoDao {

    public function listar() {
        $pdo = (new Conexion())->conectar();
        $stmt = $pdo->query("SELECT * FROM Productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertar($p) {
        $pdo = (new Conexion())->conectar();
        $stmt = $pdo->prepare(
            "INSERT INTO Productos(Nombre, Categoria, Precio, Stock) VALUES(?,?,?,?)"
        );
        return $stmt->execute([
            $p->Nombre, $p->Categoria, $p->Precio, $p->Stock
        ]);
    }

    public function buscar($id) {
        $pdo = (new Conexion())->conectar();
        $stmt = $pdo->prepare("SELECT * FROM Productos WHERE Id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($p) {
        $pdo = (new Conexion())->conectar();
        $stmt = $pdo->prepare(
            "UPDATE Productos SET Nombre=?, Categoria=?, Precio=?, Stock=? WHERE Id=?"
        );
        return $stmt->execute([
            $p->Nombre, $p->Categoria, $p->Precio, $p->Stock, $p->Id
        ]);
    }

    public function eliminar($id) {
        $pdo = (new Conexion())->conectar();
        $stmt = $pdo->prepare("DELETE FROM Productos WHERE Id=?");
        return $stmt->execute([$id]);
    }

    public function consultar($texto) {
        $pdo = (new Conexion())->conectar();
        $stmt = $pdo->prepare(
            "SELECT * FROM Productos WHERE Nombre LIKE ? OR Categoria LIKE ?"
        );
        $stmt->execute(["%$texto%","%$texto%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
