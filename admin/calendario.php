<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asogcabe</title>
    <link rel="stylesheet" href="css/style-calendario.css">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png">
</head>
<body>

    <?php require 'partials/header.php'  ?>

    <h1>CALENDARIO DE NUESTRAS ACTIVIDADES</h1>

    <div class="root">
        <div class="calendar" id="calendar">

        </div>
    </div>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
    <script  type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript">
        let calendar = new Calendar('calendar');
        calendar.getElement().addEventListener('change', e => {
            console.log(calendar.value().format('LLL'));
        });
    </script>
    <h2 class="sub">Acciones</h2>
    <div class="contenedor-cabs">
            <div class="cab">
                <h2>Crear evento</h2>
                <a href="crear-evento.php">
                    <img class="img-cab" src="img/crear.png" alt="">
                </a>
            </div>
            <div class="cab">
                <h2>Actualizar evento</h2>
                <a href="actualizar-evento.php">
                    <img class="img-cab" src="img/actualizar.png" alt="">
                </a>
            </div>
            <div class="cab">
                <h2>Eliminar eventos</h2>
                <a href="eliminar-evento.php">
                    <img class="img-cab" src="img/eliminar.png" alt="">
                </a>
            </div>
        </div>
        <h2 class="sub">Acctiviades creadas</h2>

    
    
    <?php require 'partials/footer.php' ?>

    <script src="js/script.js"></script>
</body>
</html>