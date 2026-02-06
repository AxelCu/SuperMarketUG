<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5 text-center">
    <h2>Bienvenidos al Sistema de Gestión del SuperMarketUG</h2>
    <p class="lead">
        Gestión de .....
    </p>
    <a class="btn btn-outline-primary" href="index.php?accion=login">Iniciar Sesion</a>
</div>

<div class="container mt-4">

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="../img/imagen1.jpg" class="d-block w-100" alt="Imagen 1">
            </div>

            <div class="carousel-item">
                <img src="../img/imagen2.jpg" class="d-block w-100" alt="Imagen 2">
            </div>

            <div class="carousel-item">
                <img src="../img/imagen3.jpg" class="d-block w-100" alt="Imagen 3">
            </div>

            <div class="carousel-item">
                <img src="../img/imagen4.jpg" class="d-block w-100" alt="Imagen 4">
            </div>

            <div class="carousel-item">
                <img src="../img/imagen5.jpg" class="d-block w-100" alt="Imagen 5">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>

    </div>

</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
