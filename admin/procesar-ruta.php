<?php
// procesar.php
try {
    // Configuración de la base de datos
    $db = new PDO("mysql:host=localhost;dbname=asogcabe", "sena", "sena");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Validar y procesar la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $_FILES['imagen']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        
        // Validar el tipo de archivo
        if (!in_array(strtolower($filetype), $allowed)) {
            throw new Exception('Formato de imagen no permitido');
        }
        
        // Validar el tamaño (2MB máximo)
        if ($_FILES['imagen']['size'] > 2 * 1024 * 1024) {
            throw new Exception('La imagen excede el tamaño máximo permitido (2MB)');
        }
        
        // Crear directorio si no existe
        $uploadDir = 'uploads/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        // Generar nombre único para la imagen
        $newFilename = uniqid() . '.' . $filetype;
        $uploadPath = $uploadDir . $newFilename;
        
        // Mover la imagen al directorio
        if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $uploadPath)) {
            throw new Exception('Error al guardar la imagen');
        }
        
        // Insertar en la base de datos
        $sql = "INSERT INTO ruta (nombre, dificultad, descripcion, comienzo, llegada, enlace, ruta_imagen) 
                VALUES (:nombre, :dificultad, :descripcion, :comienzo, :llegada, :enlace, :ruta_imagen)";
        
        $stmt = $db->prepare($sql);
        $stmt->execute([
            ':nombre' => $_POST['nombre'],
            ':dificultad' => $_POST['dificultad'],
            ':descripcion' => $_POST['descripcion'],
            ':comienzo' => $_POST['comienzo'],
            ':llegada' => $_POST['llegada'],
            ':enlace' => $_POST['enlace'],
            ':ruta_imagen' => $uploadPath
        ]);
        
        // Redireccionar con mensaje de éxito
        header('Location: formulario-ruta.php?success=1');
        exit;
    }
} catch (Exception $e) {
    // Redireccionar con mensaje de error
    header('Location: formulario-ruta.php?error=' . urlencode($e->getMessage()));
    exit;
}
?>