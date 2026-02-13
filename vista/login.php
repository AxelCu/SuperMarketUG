<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height:70vh;">
    
    <div class="card card-custom p-4" style="width:100%; max-width:350px;">
        
        <h4 class="text-center mb-4">Inicio de Sesión</h4>

        <?php if(isset($_GET['error']) || isset($_GET['mensaje'])): ?>

            <?php 
                $mensaje = "";
                $tipo = "danger";

                if(isset($_GET['error'])){
                    if($_GET['error'] === 'vacio'){
                        $mensaje = "⚠ Complete todos los campos";
                    } elseif($_GET['error'] === 'incorrecto'){
                        $mensaje = "❌ Usuario o contraseña incorrectos";
                    }
                }

                if(isset($_GET['mensaje']) && $_GET['mensaje'] === 'logout'){
                    $mensaje = "👋 Sesión cerrada correctamente";
                    $tipo = "success";
                }
            ?>

            <?php if($mensaje != ""): ?>
                <div class="alert alert-<?= $tipo ?> text-center alert-dismissible fade show" role="alert">
                    <?= $mensaje ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

        <?php endif; ?>

        <form action="index.php?accion=procesarLogin" method="post">

            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control form-control-sm">
            </div>

            <div class="mb-3">
                <label class="form-label">Clave</label>
                <input type="password" name="clave" class="form-control form-control-sm">
            </div>

            <button type="submit" class="btn btn-success w-100 mb-2 btn-sm">
                Ingresar
            </button>

            <a class="btn btn-outline-primary w-100 btn-sm" href="index.php?accion=inicio">
                Regresar al inicio
            </a>

        </form>

    </div>

</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
