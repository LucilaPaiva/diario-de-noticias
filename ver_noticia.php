<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="admin/css/styles.css">
    <link rel="stylesheet" type="text/css" href="admin/css/footerstyles.css">

</head>

<body>
    <div class="container-fluid">
        <?php // require("menu.php");
        ?>
        <header class="my-header">
        <div class="my-titulo">
            <h1>Noticias</h1>
            <h2 class="my-h2">Todo sobre deportes y salud</h2>
        </div>
    </header>

        <?php
        extract($_REQUEST);
        require("admin/conexion.php");
        $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
            or die("No se puede conectar con el servidor");
        mysqli_select_db($conexion, $base_db)
            or die("No se puede seleccionar la base de datos");
        $instruccion = "select * from noticias  where id_noticia=".$id_noticia;

        $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");

        $nfilas = mysqli_num_rows($consulta);
        // for ($i = 0; $i < $nfilas; $i++) {
            $resultado = mysqli_fetch_array($consulta);
            print('
                <div class="">
                    <div class="card">
                        <img src="imagenes_subidas/'.$resultado['imagen'].'" class="card-img-top mx-auto d-block" alt="'.$resultado['titulo'].'" style="max-width: 70%; height: 70%;">
                        <div class="card-body">
                            <h2 class="card-title">'.$resultado['titulo'].'</h2>
                            <h2 class="card-text">'.substr($resultado['copete'],0,100).'</h2>
                            <p class="card-text">'.substr($resultado['copete'],0,500).'</p>
                            <a href="javascript:history.back()" class="btn btn-primary">Volver</a>
                        </div>
                     </div>
                </div>
            ');
            
        // }
        mysqli_close($conexion);
        ?>
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

</body>

</html>