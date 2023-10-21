<!-- mi código -->
<?php
session_start();
extract($_REQUEST);
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
    <link rel="stylesheet" type="text/css" href="css/styles2.css">



</head>

<body>
    <div class="container-fluid">
        <?php require("menu.php"); ?>
        <h1>Noticias</h1>
        <?php
        if (isset($mensaje)) {
            print("<h3 style='color:#cc00ff'>" . $mensaje . "</h3>");
        }
        ?>
        <a href="noticias_nueva.php" class="btn btn-secondary my-button-nueva">Nueva Noticia</a>
    </div>
    <table class="table">
        <tr>
            <th>titulo</th>
            <th>Fecha</th>
            <th>copete</th>
            <th>editar</th>
            <th>borrar</th>
        </tr>
        <?php
        require("conexion.php");
        $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
            or die("No se puede conectar con el servidor");
        mysqli_select_db($conexion, $base_db)
            or die("No se puede seleccionar la base de datos");
        $instruccion = "select * from noticias order by fecha desc";
        //trabajar cpon super usuario y discriminiación de usuarios
        // if(isset($SESSION['SUPER']))
        //     $instruccion = "select * from noticias order by fecha desc";
        // else
        //   $instruccion = "select * from noticias where id_usuario=".$SESSION['id_usuario']." order by fecha desc";
        // El caso comentado es para que cada usuario edite su propia noticia
        $consulta = mysqli_query($conexion, $instruccion) or die("no pudo consultar");
        $nfilas = mysqli_num_rows($consulta);
        for ($i = 0; $i < $nfilas; $i++) {
            $resultado = mysqli_fetch_array($consulta);
            $inst2 = "select * from usuarios where id_usuario=" . $resultado['id_usuario'];
            $consulta2 = mysqli_query($conexion, $inst2) or die("no puedo consultar");
            $autor = mysqli_fetch_array($consulta2);
            print('
                <tr>
                    <td>' . trim($resultado['titulo']) . '</td>
                    <td>' . $resultado['fecha'] . '</td>
                    <td>' . substr($resultado['copete'], 0, 50) . '...</td>
                    <td><a href="noticias_editar.php?id_noticia=' . $resultado['id_noticia'] . '" class="btn btn-secondary">editar</a></td>
                    <td><a href="noticias_borrar.php?id_noticia=' . $resultado['id_noticia'] . '&imagen=' . $resultado['imagen'] . '" class="btn btn-danger" onclick="return confirm(&quot; Desea eliminar &quot;)">borrar<a/></td>
                </tr>
                
                ');
        }
        mysqli_close($conexion);
        ?>
    </table>


</body>

</html>