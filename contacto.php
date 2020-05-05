<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Contacto</title>
</head>

<body>

    <div class="container">


        <nav id="nav" class="navbar navbar-expand-sm">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDefault" aria-controls="navDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fas fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre-mi.php">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>



        <div class="row mt-4">
            <div class="col-12 my-4">
                <h1>¡Trabajemos Juntos!</h1>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <h2>
                    Para más detalles sobre mi trabajo podés ver mi
                    <span><a href="https://www.linkedin.com/in/dario-turchi/" target="_blank" rel="noopener noreferrer">
                            Linkedin</a></span>, descargar mi <span><a href="files/CURRICULUM DEV.pdf" target="_blank" rel="noopener noreferrer"> CV</a></span>
                    o mandarme un <span><a href="#form" target="_self" rel="noopener noreferrer">mensaje</a>
                    </span>
                </h2>
            </div>
        </div>


        <section id="contacto">
            <div class="row">
                <div class="col-10 my-5">
                    <form action="" method="POST" id="form">
                        <div class="row">
                            <div class="form-group col-12 col-sm-6">
                                <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="NOMBRE" required>
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" placeholder="EMAIL" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="text" name="txtAsunto" id="txtAsunto" class="form-control" placeholder="ASUNTO" required>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="txtMensaje" id="txtMensaje" class="form-control" rows="7" cols="87" placeholder="MENSAJE"></textarea>
                            </div>
                        </div>

                        <div class="row my-4 mb-5">
                            <div class="col-12 text-center">
                                <input type="submit" name="btnENVIAR" value="ENVIAR" class="btn">
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </section>
    </div>

    <footer id="footer">
        <div class="container">

            <div class="row py-sm-5">
                <!-- <div class="row py-5 "> -->
                <div class="col-12 col-sm-4 text-sm-left text-centerd-none d-sm-none d-md-block">
                    <p><b>©Todos los derechos reservados<br> 2020</b></p>
                </div>
                <div class="col-12 col-sm-4 text-center py-4 py-sm-2 d-none d-sm-none d-md-block">
                    <a href="https://api.whatsapp.com/send?phone=542234492977&amp;text=Hola" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/dario-turchi/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/iodario" target="_blank"><i class="fab fa-github"></i></a>

                </div>
                <div class="col-12 col-sm-4 text-center text-sm-right d-none d-sm-none d-md-block">
                    Patrocinado por <br>
                    <span><a href="https://depcsuite.com/" target="_blank" rel="noopener noreferrer">DePcSuite</a></span>
                </div>
            </div>

        </div>
    </footer>


    <footer id="footer-mobile">
        <div class="container">
            <div class="row py-1">
            <!-- <div class="row d-none"> -->
                <div class="col text-left d-block d-sm-block d-md-none ">
                    <a href="https://api.whatsapp.com/send?phone=542234492977&amp;text=Hola" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="col text-center d-block d-sm-block d-md-none ">
                    <a href="https://www.linkedin.com/in/dario-turchi/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col text-right d-block d-sm-block d-md-none ">
                    <a href="https://github.com/iodario" target="_blank"><i class="fab fa-github"></i></a>
                </div>

            </div>
        </div>
    </footer>

    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>