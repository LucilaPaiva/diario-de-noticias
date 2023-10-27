<?php
session_start();
//extract($REQUEST);
if (!isset($_SESSION['usuario_logueado']))
    //si no esta registrada me hace un header
    header("location:index.php");
// else
// if(&& ($_SESSION['usuario_logueado']=="SI")))
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="../lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footerstyles.css">
    


</head>

<body>
    <div class="container-fluid">
        <?php require("menu.php");?>
    </div>
   
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

    
    <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>