<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asogcabe-Asociados</title>
    <link rel="stylesheet" href="css/style-asociados.css">
    <link rel="shortcut icon" href="img/logo-sin-fondo.png" type="image/x-icon">
</head>
<body>
    <?php require 'partials/header.php'  ?>
    <h1 class="titulo">Asociados</h1>
    <p class="parrafo">Los asociados son importantes en la asociación porque aportan dedicación, talento y esfuerzo que hacen posible el logro de los objetivos colectivos. Ellos son:</p>
    <div class="contenedor-divs">
    <?php
            include "database.php";
            $sql="SELECT * FROM asociado";
            $consulta = mysqli_query($conn,$sql);
            if($consulta){
                if(mysqli_num_rows($consulta)>0){
                    while($row=mysqli_fetch_array($consulta)){
                    ?>
                    <div class="n-div">
                        <h2><?php echo $row[1]; ?></h2>
                                <img class="n-asociado" src="<?php echo $row[4]; ?>" alt="">
                        <h3><?php echo $row[2]; ?></h2>
                        <p><?php echo $row[3]; ?></p>
                    </div>
                    <?php
                    }
                }
            }
        ?>



        <div class="n-div">
            <h2>Nuevo</h2>
            <a href="formulario-asociado.php">
                <img class="n-asociado" src="img/asociados.png" alt="">
            </a>
            <p>Agregar un nuevo asociado</p>
        </div>
    </div>

    <?php require 'partials/footer.php' ?>

    <script src="js/script.js"></script>
</body>
</html>