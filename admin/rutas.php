<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asogcabe-Ruta</title>
    <link rel="stylesheet" href="css/style-rutas.css">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png">
</head>
<body>
<?php require 'partials/header.php'  ?>
    
<div class="contenedor-divs">
        <?php
            include "database.php";
            $sql="SELECT * FROM ruta";
            $consulta = mysqli_query($conn,$sql);
            if($consulta){
                if(mysqli_num_rows($consulta)>0){
                    while($row=mysqli_fetch_array($consulta)){
                    ?>
                    <div class="n-div">
                        <h2><?php echo $row[1]; ?></h2>
                        <img  src="<?php echo $row[7]; ?>" alt="Imagen de ejemplo" class="n-ruta">
                        <p><?php echo $row[3]; ?></p>
                    </div>

                    <div class="modal" id="imageModal">
                    <div class="modal-content">
                        <button class="close-button">&times;</button>
                        
                        <div class="modal-header">
                            <h2><?php echo $row[1]; ?></h2>
                        </div>

                        <div class="modal-body">
                            <img src="<?php echo $row[7]; ?>" alt="Imagen en modal" class="modal-image">
                            
                            <div class="modal-text">
                                <p><?php echo $row[3]; ?></p>
                                <ul>
                                    <li>Dificultad: <?php echo $row[2]; ?></li>
                                    <li>Luga de comienzo: <?php echo $row[4]; ?></li>
                                    <li>Lugar de llegada: <?php echo $row[5]; ?></li>
                                </ul>
                                <div class="boton">
                                    <a href="<?php echo $row[6]; ?>">Ir a la ruta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <?php
                    }
                }
            }
        ?>

        

        <div class="n-div">
            <h2>Nuevo</h2>
            <a href="formulario-ruta.php">
                <img class="n-ruta" src="img/ruta.png" alt="">
            </a>
            <p>Agrega una ruta</p>
        </div>
    </div>


    <?php require 'partials/footer.php' ?>

    <script src="js/script.js"></script>
    <script src="js/ruta.js"></script>

</body>
</html>