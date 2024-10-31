<?php

// Conexión a la base de datos (asegúrate de reemplazar con tus propios datos)
$servername = "localhost";
$username = "sena";
$password = "sena";
$dbname = "asogcabe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>