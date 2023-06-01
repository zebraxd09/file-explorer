<?php
    session_start();
    if(!isset($_SESSION['user']) && !isset($_SESSION['casa']))
    {
        $user=(isset($_POST["user"]) && $_POST["user"] != "")? $_POST["user"]:false;
        $casa=(isset($_POST["casa"]) && $_POST["casa"] != "")? $_POST["casa"]:false;
        $_SESSION['user']=$user;
        $_SESSION['casa']=$casa;
        if($_SESSION['user']===false) 
        {
            header('location: ./login.php');
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../statics/media/img/file.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../statics/css/style.css">
    <title>Archivos Chidos</title>
</head>

<?php
    $user=$_SESSION['user'];
    $casa=$_SESSION['casa'];
    echo
    '   
    <body id="'.$casa.'-b">
        <div class="container">
            <p id="'.$casa.'" class="title">¿QUÉ QUIERES HACER '.strtoupper($user).'?</p>
            <form action="./edit.php" method="POST" target="_self" id="'.$casa.'-t" class="texto-plano">
                <legend>Acciones</legend><br>
                <input type="radio" id="crear" name="action" value="crear">
                <label for="crear">Crear</label><br><br>
                <input type="radio" id="renombrar" name="action" value="renombrar">
                <label for="renombrar">Renombrar</label><br><br>
                <input type="radio" id="eliminar" name="action" value="eliminar">
                <label for="eliminar">Eliminar</label><br><br>
                <input type="submit" id="'.$casa.'" class="input" value="Aceptar">
            </form><br>
            <div>
                <a id="'.$casa.'" class="input" href="./record.php">Registro</a><br><br>
            </div>
            <a id="'.$casa.'" class="input" href="./logout.php">Salir</a>
        </div>
    </body> 
    ';
?>

</html>