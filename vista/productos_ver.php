<?php include 'layout/header.php'; ?>

<div class="container mt-4">
    <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
        <h4 class="mb-3 text-center">📦 Detalle del Producto</h4>

        <p><strong>Nombre:</strong> <?= htmlspecialchars($producto['nombre']) ?></p>
        <p><strong>Categoría:</strong> <?= htmlspecialchars($producto['categoria']) ?></p>
        <p><strong>Precio:</strong> $<?= htmlspecialchars($producto['precio']) ?></p>
        <p><strong>Stock:</strong> <?= htmlspecialchars($producto['stock']) ?></p>

        <a href="index.php?accion=consultarProductos" 
           class="btn btn-secondary w-100 mt-3">
           Volver
        </a>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
