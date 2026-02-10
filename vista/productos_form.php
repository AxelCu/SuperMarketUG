<?php include 'layout/header.php'; ?>

<h2><?= isset($producto) ? 'Editar' : 'Nuevo' ?> Producto</h2>

<form action="index.php?accion=<?= isset($producto) ? 'actualizarProducto' : 'guardarProducto' ?>" method="post">

<input type="hidden" name="Id" value="<?= $producto['id'] ?? '' ?>">

<div class="mb-2">
    <input class="form-control" name="Nombre" placeholder="Nombre" value="<?= $producto['nombre'] ?? '' ?>" required>
</div>

<div class="mb-2">
    <input class="form-control" name="Categoria" placeholder="Categoria" value="<?= $producto['categoria'] ?? '' ?>">
</div>

<div class="mb-2">
    <input class="form-control" name="Precio" type="number" step="0.01" placeholder="Precio" value="<?= $producto['precio'] ?? '' ?>" required>
</div>

<div class="mb-2">
    <input class="form-control" name="Stock" type="number" placeholder="Stock" value="<?= $producto['stock'] ?? '' ?>" required>
</div>

<button class="btn btn-primary">Guardar</button>
<a class="btn btn-secondary" href="index.php?accion=productos">Cancelar</a>

</form>

<?php include 'layout/footer.php'; ?>
