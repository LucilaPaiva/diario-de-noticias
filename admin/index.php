<?php
    session_start();
    //extract($REQUEST);
    if(isset($_SESSION['usuario_logueado']))
    //si esta registrada me hace un header
    header("location:home.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container formulario-container">
        <div class="row">
            <div>
                <?php
                    if(isset($_SESSION['mensaje']))
                    {
                        print("<p>".$_SESSION['mensaje']."</p>");
                        unset($_SESSION['mensaje']);
                    }
                    
                ?>

            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="usuario" name="password" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-secondary" id="enviar" name="enviar"  value="LOGUEARSE" required>
                </div>
            </form>
        </div>
    </div>

</body>
</html>