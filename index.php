<?php 
    $pg = "inicio";
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>

<body>

    <div id="home" class="container-fluid">

        <div class="container">
        <?php include_once("menu.php");?>
           
        </div>

        <div class="container">

            <div class="row py-5">
                <div class="col-10">
                    <h1>
                        Hola! <br>
                        Bienvenido a mi web
                    </h1>

                    <h2>
                        Dario Alberto Turchi
                    </h2>
                    <a href="proyectos.php" class="btn my-sm-4">Conocé mis Proyectos</a>

                </div>

            </div>

        </div>
    </div>



    <?php include_once("footer.php");?>

   


    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>