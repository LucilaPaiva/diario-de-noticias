<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" type="image/png" href="./assets/img/icons8-adjuntar-curriculum-vitae-femenino-50.png">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <link href="lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin/css/styles.css">
    <link rel="stylesheet" type="text/css" href="admin/css/footerstyles.css">



</head>

<body>

    <header class="my-header">
        <div class="my-titulo">
            <h1>Noticias</h1>
            <h2 class="my-h2">Todo sobre deportes y salud</h2>
        </div>
    </header>


    <nav class="navbar my-navbar navbar-expand-lg ">
        <div class="container-fluid my-navbar-container">
            <a class="navbar-brand" href="https://www.gba.gob.ar/saludprovincia/noticias">Salud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.elmundo.es/deportes.html">El mundo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://www.infobae.com/america/agencias/2023/10/21/ilic-dice-que-chile-es-el-punto-de-encuentro-de-las-americas-con-los-panamericanos-2023/">Competencias</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Actualidad</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <?php // require("menu.php");
        ?>

        <div class="row">
            <?php
            require("admin/conexion.php");
            $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
                or die("No se puede conectar con el servidor");
            mysqli_select_db($conexion, $base_db)
                or die("No se puede seleccionar la base de datos");
            $instruccion = "select * from noticias  order by fecha desc limit 10";

            $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");

            $nfilas = mysqli_num_rows($consulta);
            for ($i = 0; $i < $nfilas; $i++) {
                $resultado = mysqli_fetch_array($consulta);
                print('
            <div class="col-4 mb-4">
                <div class="card">
                <img src="imagenes_subidas/' . $resultado['imagen'] . '" class="card-img-top" alt="' . $resultado['titulo'] . '">
                    <div class="card-body">
                            <h5 class="card-title">' . $resultado['titulo'] . '</h5>
                        <p class="card-text">' . substr($resultado['copete'], 0, 40) . '</p>
                        <a href="ver_noticia.php?id_noticia=' . $resultado['id_noticia'] . '" class="btn btn-primary">Leer noticia</a>
                    </div>
                 </div>
            </div>

            ');
            }
            mysqli_close($conexion);
            ?>
        </div>
    </div>

    <!-- Footer-->
    <footer title="Footer">
        <div class="social-media-footer">
            <ul class="social-media-footer-list">
                <li class="social-media-footer-enlaces">
                    <a aria-label="Boton a whatsapp" title="Boton a whatsapp" href="https://wa.me/+1135256303"
                        target="_blank" rel="noopener noreferrer" class="icono-final"><i
                            class="fa-brands fa-whatsapp"></i></a>
                </li>
                <li class="social-media-footer-enlaces">
                    <a aria-label="Boton a Github" title="Boton a Github" href="https://github.com/LucilaPaiva"
                        target="_blank" rel="noopener noreferrer" class="icono-final"><i
                            class="fa-brands fa-github-alt"></i></a>
                </li>
                <li class="social-media-footer-enlaces">
                    <a aria-label="Boton a Linkedin" title="Boton a Linkedin"
                        href="https://www.linkedin.com/in/lucila-paiva/" target="_blank" rel="noopener noreferrer"
                        class="icono-final"><i class="fa-brands fa-linkedin"></i></a>
                </li>
                <li class="social-media-footer-enlaces">
                    <a aria-label="Boton a mail" title="Boton a mail" href="mailto:lucil.paiva@gmail.com"
                        target="_blank" rel="noopener noreferrer" class="icono-final"><i
                            class="fa-solid fa-envelope"></i></a>
                </li>
            </ul>
        </div>
        <div class="final-love-container">
            <p class="final-love">Hecho por Lucila Paiva</p>
        </div>
    </footer>

    <script src="lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>