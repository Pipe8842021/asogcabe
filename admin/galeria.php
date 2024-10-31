<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asogcabe-Galeria</title>
    <link rel="stylesheet" href="css/style-galeria.css">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png">
</head>
<body>
    <?php require 'partials/header.php'?>

    <h1>Fotos de nuestras cabalgatas</h1>

    <main>

        <div class="galeria">
            <div class="item"><a href="#img1"><img src="img/galeria/img1.jpg"></a></div>
            <div class="item"><a href="#img2"><img src="img/galeria/img2.jpg"></a></div>
            <div class="item"><a href="#img3"><img src="img/galeria/img3.jpg"></a></div>
            <div class="item"><a href="#img4"><img src="img/galeria/img4.jpg"></a></div>
            <div class="item"><a href="#img5"><img src="img/galeria/img5.jpg"></a></div>
            <div class="item"><a href="#img6"><img src="img/galeria/img6.jpg"></a></div>
            <div class="item"><a href="#img7"><img src="img/galeria/img7.jpg"></a></div>
            <div class="item"><a href="#img8"><img src="img/galeria/img8.jpg"></a></div>
            <div class="item"><a href="#img9"><img src="img/galeria/img9.jpg"></a></div>
            <div class="item"><a href="#img10"><img src="img/galeria/img10.jpg"></a></div>

        </div>

        <div class="modal" id="img1">
            <div class="imagen">
            <a class="ant" href="#img6"></a>
            <a href="#" title="cerrar"></a><img src="img/galeria/img1.jpg">
            <a class="sig" href="#img2"></a>
            </div>
        </div>

        <div class="modal" id="img2">
            <div class="imagen">
            <a class="ant" href="#img1"></a>
            <a href="#" title="cerrar"></a><img src="img/galeria/img2.jpg">
            <a class="sig" href="#img3"></a>
            </div>
        </div>

        <div class="modal" id="img3">
            <div class="imagen">
            <a class="ant" href="#img2"></a>
            <a href="#" title="cerrar"></a><img src="img/galeria/img3.jpg">
            <a class="sig" href="#img4"></a>
            </div>
        </div>

        <div class="modal" id="img4">
            <div class="imagen">
            <a class="ant" href="#img3"></a>
            <a href="#" title="cerrar"></a><img src="img/galeria/img4.jpg">
            <a class="sig" href="#img5"></a>
            </div>
        </div>

        <div class="modal" id="img5">
            <div class="imagen">
            <a class="ant" href="#img4"></a>
            <a href="#" title="cerrar"></a><img src="img/galeria/img5.jpg">
            <a class="sig" href="#img6"></a>
            </div>
        </div>

        <div class="modal" id="img6">
            <div class="imagen">
            <a class="ant" href="#img5"></a>
            <a href="#" title="cerrar"></a><img src="img/galeria/img6.jpg">
            <a class="sig" href="#img7"></a>
            </div>
        </div>

        <div class="modal" id="img7">
            <div class="imagen">
            <a class="ant" href="#img6"></a>
            <a href="#" title="cerrar"></a><img src="img/galeria/img7.jpg">
            <a class="sig" href="#img8"></a>
            </div>
        </div>

        <div class="modal" id="img8">
            <div class="imagen">
            <a class="ant" href="#img7"></a>
            <a href="#" title="cerrar"></a><img src="img/galeria/img8.jpg">
            <a class="sig" href="#img9"></a>
            </div>
        </div>

        <div class="modal" id="img9">
            <div class="imagen">
            <a class="ant" href="#img8"></a>
            <a href="#" title="cerrar"></a><img class="vertical" src="img/galeria/img9.jpg">
            <a class="sig" href="#img10"></a>
            </div>
        </div>

        <div class="modal" id="img10">
            <div class="imagen">
            <a class="ant" href="#img9"></a>
            <a href="#" title="cerrar"></a><img class="vertical" src="img/galeria/img10.jpg">
            <a class="sig" href="#img1"></a>
            </div>
        </div>
    </main>
    <p class="invitar">Si deseas saber un poco más sobre nosotros y ver más fotos/videos de eventos ve a visitarnos a <a class="instagram" href="https://www.instagram.com/asogcabe/">Instagram</a> o <a class="facebook" href="https://www.facebook.com/profile.php?id=61562462129302&mibextid=ZbWKwL">Facebook</a> acá encontraras todo lo que quieras ver acerca de nosotros</p>

    <?php require 'partials/footer.php'?>

    <script src="js/script.js"></script>
</body>
</html>