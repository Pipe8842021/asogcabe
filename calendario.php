<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asogcabe</title>
    <link rel="stylesheet" href="admin/css/style-calendario.css">
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
    
    <?php require 'partials/footer.php' ?>

    <script src="js/script.js"></script>
</body>
</html>