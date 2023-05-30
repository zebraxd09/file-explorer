<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./statics/css/style.css">
    <title>Archivos Chidos</title>
</head>

<body>
<?php
    $user=(isset($_POST["user"]) && $_POST["user"] != "")? $_POST["user"]:false;
    $_SESSION['user']=$user;
    echo
    '        
        <div>
            <h1>¿QUÉ QUIERES HACER '.strtoupper($user).'?</h1>
            <form action="./edit.php" method="POST" target="_self">
                <legend>Acciones</legend><br>
                <input type="radio" id="crear" name="action" value="crear">
                <label for="crear">Crear</label><br><br>
                <input type="radio" id="renombrar" name="action" value="renombrar">
                <label for="renombrar">Renombrar</label><br><br>
                <input type="radio" id="eliminar" name="action" value="eliminar">
                <label for="eliminar">Eliminar</label><br><br>
                <input type="submit" value="Aceptar">
            </form><br>
            <a href="./record.php">Registro</a><br><br>
            <a href="./logout.php">Salir</a>
        </div>
    ';
?>
</body>

</html>