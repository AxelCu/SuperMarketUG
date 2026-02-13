<?php 
session_start(); 

include __DIR__ . '/layout/header.php'; 
?>

<div class="card card-custom p-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="section-title">
            <i class="fa-solid fa-gauge"></i> Panel Principal
        </h3>

        <a class="btn btn-outline-danger btn-sm" href="index.php?accion=logout">
            <i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión
        </a>
    </div>

    <p>Bienvenido,
        <strong><?= $_SESSION['usuario'] ?? 'Usuario' ?></strong>
    </p>

    <div class="list-group mt-3">

        <a href="index.php?accion=productos" 
           class="list-group-item list-group-item-action">
            <i class="fa-solid fa-boxes-stacked text-success"></i>
            Gestión de Productos
        </a>

        <a href="index.php?accion=consultarProductos" 
           class="list-group-item list-group-item-action">
            <i class="fa-solid fa-magnifying-glass text-success"></i>
            Consultar / Buscar Productos
        </a>

    </div>

</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
