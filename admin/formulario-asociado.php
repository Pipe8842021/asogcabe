<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png" type="image/x-icon">
</head>
<body>
    <?php require'partials/header.php' ?>

    <div class="container mt-5">
        <h2 class="mb-4">Nuevo Registro</h2>

        <?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success">
        Registro guardado exitosamente.
    </div>
<?php endif; ?>

<?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger">
        <?php echo htmlspecialchars($_GET['error']); ?>
    </div>
<?php endif; ?>
        
        <form action="procesar-asociado.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate style="margin-bottom: 70px;">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="id" class="form-label">Numero de identificación:</label>
                    <input type="text" class="form-control" id="id" name="id" required>
                </div>
                
                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="60">
                </div>
                
                <div class="col-md-4">
                    <label for="representante" class="form-label">Representante:</label>
                    <input type="text" class="form-control" id="representante" name="representante" required maxlength="60">
                </div>
            </div>
            
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" maxlength="250" required></textarea>
            </div>
            
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen:</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                <div class="form-text">Formatos permitidos: JPG, PNG, GIF. Tamaño máximo: 2MB</div>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="asociados.php" class="btn btn-primary">Regresar a Asociados</a>
        </form>
    </div>

    <?php require'partials/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validación del formulario
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        
    </script>
</body>
</html>