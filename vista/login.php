<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container mt-5 text-center">
    <div class="row justify-content-center">
        <h2>Inicio de Sesión</h2>

        <form action="index.php?accion=procesarLogin" method="post">
            <div class="mb-3">
                <label for="usuario">Usuario:</label>
                <input type="text" name="usuario" required>
            </div>

            <div class="mb-3">
                <label for="clave">Clave:</label>
                <input type="password" name="clave" required>
            </div>

            <button type="submit" class="btn btn-success">Ingresar</button>
            <br>
            <a class="btn btn-outline-primary" href="index.php?accion=inicio">
                Regresar al inicio
            </a>
        </form>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
