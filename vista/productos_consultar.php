<?php include 'layout/header.php'; ?>

<div class="container mt-4">
    <div class="card shadow p-4">

        <h3 class="mb-4">🔍 Consultar Productos</h3>

        <input type="text" id="buscarProducto" 
               class="form-control mb-3" 
               placeholder="Buscar por nombre o categoría">

        <table class="table table-hover text-center" id="tablaProductos">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($productos as $p): ?>
                    <tr>
                        <td><?= $p['nombre'] ?></td>
                        <td><?= $p['categoria'] ?></td>
                        <td>$<?= $p['precio'] ?></td>
                        <td><?= $p['stock'] ?></td>
                        <td>
                            <a href="index.php?accion=verProducto&id=<?= $p['id'] ?>" 
                               class="btn btn-info btn-sm">
                               👁 Ver
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<script src="assets/js/producto.js"></script>

<?php include 'layout/footer.php'; ?>
