<?php
require 'database.php';

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nombres, apellidos, documento, telefono, correo, contrasena)
            VALUES ('$nombres', '$apellidos', '$documento', '$telefono', '$correo', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png">
</head>
<body>
    <div>
        <div class="img-celular-1">
            <img src="img/imagen-registro-demas-dispositivos-1.png" alt="">
        </div>
            <div class="login-box">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="user-box">
                        <input type="text" name="nombres" required>
                        <label>Nombres</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="apellidos" required>
                        <label>Apellidos</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="documento" required>
                        <label>Documento</label>
                    </div>
                    <div class="user-box">
                        <input type="tel" name="telefono" required>
                        <label>Telefono</label>
                    </div>
                    <div class="user-box">
                        <input type="email" name="correo" required>
                        <label>Correo electrónico</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="contrasena" required>
                        <label>Contraseña</label>
                    </div>

                    <button type="submit" class="btn-31">
                        <span class="text-container">
                            <span class="text">Registrarse</span>
                        </span>
                    </button>

                    <button class="google-signup-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 48 48">
                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/>
                            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/>
                            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/>
                            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/>
                        </svg>
                        Registrarse con Google
                    </button>

                    <p>Ya tienes una cuenta? <a href="index.php">Inicia seccion!</a></p>

                </form>
            </div>
        <div class="img-celular-2">
            <img src="img/imagen-registro-demas-dispositivos-2.png" alt="">
        </div>
    </div>
</body>
</html>