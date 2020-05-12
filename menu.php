<nav id="nav" class="navbar navbar-expand-sm">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDefault" aria-controls="navDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fas fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="navDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item  active">
                <a class="nav-link <?php echo $pg == "inicio" ? "active" : ""; ?>" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $pg == "sobre-mi" ? "active" : ""; ?>" href="sobre-mi.php">Sobre mí</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $pg == "proyectos" ? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link <?php echo $pg == "contactos" ? "active" : ""; ?> " href="contacto.php">Contacto</a>
            </li>
        </ul>
    </div>
</nav>