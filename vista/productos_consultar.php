<?php include 'layout/header.php'; ?>

<h2>Consultar Productos</h2>

<form class="mb-3">
    <input class="form-control" name="q" placeholder="Buscar por nombre o categoría">
    <button class="btn btn-primary mt-2">Buscar</button>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($productos as $p): ?>
        <tr>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['categoria'] ?></td>
            <td><?= $p['precio'] ?></td>
            <td><?= $p['stock'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php include 'layout/footer.php'; ?>
