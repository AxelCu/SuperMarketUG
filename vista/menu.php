<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="m-0">Menú Principal - SuperMarketUG</h2>
        <a class="btn btn-outline-danger" href="index.php?accion=logout">
            Cerrar Sesión
        </a>
    </div>

    <p>
        Bienvenido,
        <strong><?= isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Usuario' ?></strong>
    </p>

    <div class="list-group mt-4">

        <a href="index.php?accion=productos" class="list-group-item list-group-item-action">
            🧾 Gestión de Productos 
        </a>

        <a href="index.php?accion=consultarProductos" class="list-group-item list-group-item-action">
            🔎 Consultar / Buscar Productos
        </a>

    </div>

</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
