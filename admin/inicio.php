<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asogcabe-Inicio</title>
    <link rel="stylesheet" href="css/style-inicio.css">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png">
</head>
<body>
    <?php require 'partials/header.php'?>

        <div>
            <img src="img/caballoInicio.png" alt="" class="galeriaInicio">
        </div>
        <div class="contenedorI-divs">
            <div class="div-inicio">
                <h2>Calendario</h2>
                <a href="calendario.php">
                    <img class="cal-rut" src="img/calendario.png" alt="">
                </a>
                <p>Programar una actividad</p>
            </div>
            <div class="div-inicio">
                <h2>Asociados</h2>
                <a href="asociados.php">
                    <img class="cal-rut" src="img/asociados.png" alt="">
                </a>
                <p>Agregar un nuevo asociado/admin</p>
            </div>
            <div class="div-inicio">
                <h2>Rutas</h2>
                <a href="rutas.php">
                    <img class="cal-rut" src="img/ruta.png" alt="">
                </a>
                <p>Cambiar información de la ruta</p>
            </div>
        </div>
        <div class="parte2">
            <h2>UN POCO SOBRE NOSOTROS</h2>
        </div>
        <div class="mision_vision">
            <div class="card">
                <div class="first-content">
                    <span>Misión</span>
                </div>
                <div class="second-content">
                    <span>La misión de el proyecto Asogcabe es promover el bienestar equino, fomentar la conexión entre humanos y caballos, preservar las tradiciones y valores relacionados con la equitación en el municipio de Abejorral. Se buscar educar a la comunidad sobre el cuidado adecuado de los caballos, ofrecer programas de formación y actividades que promuevan el desarrollo personal y la habilidad de montar a caballo, ademas de un espacio de interaccion y integracion social para trabajar, garantizar el respeto y la protección de los animales en todas las áreas.</span>
                </div>
            </div>
            <div class="card">
                <div class="first-content">
                    <span>Visión</span>
                </div>
                <div class="second-content">
                    <span>Como vision se quiere un mundo donde la relación entre humanos y caballos es basada en el respeto mutuo, la comprensión profunda y el cuidado amoroso. Se visualiza comunidades equinas prósperas donde los caballos son tratados como compañeros de confianza y socios en diversas actividades. Se busca ser líderes en la promoción de estándares éticos y de bienestar equino y aspiramos a ser un punto de referencia global para la educación, la formación y la celebración de la conexión entre humanos y caballos.</span>
                </div>
            </div>
        </div>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=3116242200&text=Hola%20sea%20bienvenido%20al%20chat%20de%20ASOGCABE" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>

    <?php require 'partials/footer.php'?>

    <script src="js/script.js"></script>

</body>
</html>