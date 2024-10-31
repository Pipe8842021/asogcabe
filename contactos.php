<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asogcabe-Contactos</title>
    <link rel="stylesheet" href="admin/css/style-contactos.css">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png" type="image/x-icon">
</head>
<body>
    <?php require 'partials/header.php'  ?>

    <h1>Medios de comunicacion y Redes sociales</h1>

    <div class="cards">
        <div class="card">
            <a href="https://www.instagram.com/asogcabe_/">
                <div class="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="200" height="200" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M16.5 7.5l0 .01" />
                    </svg>
                </div>
            </a>
            <p>Instagram</p>
        </div>
        <div class="card">
            <div class="gmail">
                <a href="correo.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gmail" width="200" height="200" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                    <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                    <path d="M16 4l-4 4l-4 -4" />
                    <path d="M4 6.5l8 7.5l8 -7.5" />
                </svg>
                </a>
            </div>
            <p>Correo</p>
        </div>
        <div class="card">
            <a href="https://www.facebook.com/profile.php?id=61562462129302&mibextid=ZbWKwL">
                <div class="facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="200" height="200" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg>
                </div>
            </a>
            <p>Fecebook</p>
        </div>
        <div class="card">
            <a href="https://api.whatsapp.com/send?phone=3116242200&text=Hola%20sea%20bienvenido%20al%20chat%20de%20ASOGCABE">
                <div class="whatsapp">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="200" height="200" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                    </svg>
                </div>
            </a>
            <p>WhatsApp</p>
        </div>
    </div>


    <?php require 'partials/footer.php' ?>
</body>
</html>