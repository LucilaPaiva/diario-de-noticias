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
    <link href="../lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="../lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>


</head>

<body>
    <div class="container-fluid">
        <?php require("menu.php");?>
    </div>

</body>

</html>