<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asogcabe</title>
    <link rel="stylesheet" href="css/style-correo.css">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png">
</head>
<body>
    <?php require 'partials/header.php' ?>
    
    <h1>Enviar correo</h1>
    <p>Si tienes alguna duda, inquietud o necesitas ponerte en contacto con nosotros, no dudes en enviarnos un correo electrónico.</p>
    <p>¡Estamos aquí para servirte!</p>
    <div class="contact-form">
    <form action="https://formsubmit.co/asogcabe@gmail.com" method="POST" />
        <label for="Nombre">Nombre</label><br>
        <input type="text" name="name"><br>
        
        <label for="email">Correo elctronico</label><br>
        <input type="email" name="email"><br>

        <label for="subject">Asunto</label><br>
        <input type="text" name="subject"><br>

        <label for="comments">Comentario</label><br>
        <textarea name="comments" cols="15" rows="5"></textarea><br>

        <input type="submit" value="Enviar">
        <input type="hidden" name="_next" value="http://localhost/asogcabe/admin/contactos.php">
        <input type="hidden" name="_captcha" value="false">


    </form>
    </div>
    
    <?php require 'partials/footer.php' ?>

    <script src="js/script.js"></script>
</body>
</html>