<?php include 'layout/header.php'; ?>

<div class="container mt-4">
    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
        <h4 class="mb-3 text-center">
            <?= isset($producto) ? '✏️ Editar Producto' : '➕ Nuevo Producto' ?>
        </h4>

        <form action="index.php?accion=<?= isset($producto) ? 'actualizarProducto' : 'guardarProducto' ?>" method="post">

            <input type="hidden" name="Id" value="<?= $producto['id'] ?? '' ?>">

            <input class="form-control mb-2" name="Nombre" placeholder="Nombre" value="<?= $producto['nombre'] ?? '' ?>" required>
            <input class="form-control mb-2" name="Categoria" placeholder="Categoría" value="<?= $producto['categoria'] ?? '' ?>">
            <input class="form-control mb-2" name="Precio" type="number" step="0.01" placeholder="Precio" value="<?= $producto['precio'] ?? '' ?>" required>
            <input class="form-control mb-3" name="Stock" type="number" placeholder="Stock" value="<?= $producto['stock'] ?? '' ?>" required>

            <button class="btn btn-success w-100 mb-2">Guardar</button>
            <a href="index.php?accion=productos" class="btn btn-secondary w-100">Cancelar</a>
        </form>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
