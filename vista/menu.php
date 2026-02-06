<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="m-0">Menu Principal</h2>
        <a class="btn btn-outline-primary" href="index.php?accion=logout">
            Cerrar Sesion
        </a>
    </div>

    <p>
        Bienvenido,
        <?= isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Usuario' ?>
    </p>

    <div class="list-group mt-4">
        <a href="index.php?accion=consultarAlumnos" class="list-group-item list-group-item-action">
            Consultar .....
        </a>
    </div>

</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
