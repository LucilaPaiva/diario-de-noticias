<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="admin/css/styles.css">

    

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
                        <a class="nav-link" href="https://www.infobae.com/america/agencias/2023/10/21/ilic-dice-que-chile-es-el-punto-de-encuentro-de-las-americas-con-los-panamericanos-2023/">Competencias</a>
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
            <div class="col-4">
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
        <script src="lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>