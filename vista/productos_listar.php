<?php include 'layout/header.php'; ?>

<h2>Gestión de Productos</h2>
<a class="btn btn-success mb-2" href="index.php?accion=editarProducto">Nuevo Producto</a>

<table class="table table-bordered">
<tr>
    <th>Nombre</th><th>Categoria</th><th>Precio</th><th>Stock</th><th>Acciones</th>
</tr>

<?php foreach($productos as $p): ?>
<tr>
    <td><?= $p['nombre'] ?></td>
    <td><?= $p['categoria'] ?></td>
    <td><?= $p['precio'] ?></td>
    <td><?= $p['stock'] ?></td>
    <td>
        <a class="btn btn-warning btn-sm" href="index.php?accion=editarProducto&id=<?= $p['id'] ?>">Editar</a>
        <a class="btn btn-danger btn-sm" href="index.php?accion=eliminarProducto&id=<?= $p['id'] ?>">Eliminar</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?php include 'layout/footer.php'; ?>
