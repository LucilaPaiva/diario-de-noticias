<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles2.css"> 
    <link rel="stylesheet" type="text/css" href="css/footerstyles.css">

    

</head>

<body>




<ul class="nav">
    <li class="nav-item item">
        <a class="nav-link active my-nav-item" aria-current="page" href="home.php">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link my-nav-item" href="noticias.php">Noticias</a>
    </li>
    <li class="nav-item">
        <a class="nav-link my-nav-item" href="usuarios.php">Usuarios</a>
        <!-- la variación de este que tendremos que hacer cambia sobre como guardar el usuario en la base de datos, 
                hacer el ejercicio -->
    </li>
    <li class="nav-item ">
        <a class="nav-link my-nav-item" href="logout.php">Salir</a>
    </li>
    <li class="nav-item">
        <?php
        print("<a class='nav-link disabled'>" . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "</a>");
        ?>
    </li>
</ul>

<div class="container-imagen">
    <h1 class="texto-home">Administración del diario de Salud y deportes</h1>
</div>


<script src="lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>
</body>