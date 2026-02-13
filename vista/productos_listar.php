<?php include 'layout/header.php'; ?>

<div class="container mt-4">

    <?php if(isset($_GET['mensaje'])): ?>

        <?php if($_GET['mensaje'] === 'guardado'): ?>
            <div class="alert alert-success alert-dismissible fade show">
                ✅ Producto guardado correctamente
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

        <?php elseif($_GET['mensaje'] === 'actualizado'): ?>
            <div class="alert alert-info alert-dismissible fade show">
                ✏️ Producto actualizado correctamente
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

        <?php elseif($_GET['mensaje'] === 'eliminado'): ?>
            <div class="alert alert-danger alert-dismissible fade show">
                🗑️ Producto eliminado correctamente
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

        <?php endif; ?>

    <?php endif; ?>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>📦 Gestión de Productos</h3>
        <a class="btn btn-success" href="index.php?accion=editarProducto">
            ➕ Nuevo Producto
        </a>
    </div>

    <table class="table table-hover table-bordered text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <?php foreach($productos as $p): ?>
        <tr>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['categoria'] ?></td>
            <td>$<?= $p['precio'] ?></td>
            <td><?= $p['stock'] ?></td>
            <td>
                <a class="btn btn-warning btn-sm"
                   href="index.php?accion=editarProducto&id=<?= $p['id'] ?>">
                   ✏️
                </a>

                <a class="btn btn-danger btn-sm"
                   href="index.php?accion=eliminarProducto&id=<?= $p['id'] ?>"
                   onclick="return confirm('¿Está seguro de eliminar este producto? Esta acción no se puede deshacer.')">
                   🗑️
                </a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

<?php include 'layout/footer.php'; ?>

