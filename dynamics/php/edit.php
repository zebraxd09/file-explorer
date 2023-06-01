<?php
    session_start();
    if(!isset($_SESSION['user']) && !isset($_SESSION['casa']))
    {
        header('location: ../../index.php');
        exit();
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
    // var_dump($_SESSION);
    $action=(isset($_POST["action"]) && $_POST["action"] != "")? $_POST["action"]:false;
    $edit=(isset($_POST["edit"]) && $_POST["edit"] != "")? $_POST["edit"]:false;
    $_SESSION['edit']=$edit;
    $_SESSION['action']=$action;
    $user=$_SESSION['user'];
    $casa=$_SESSION['casa'];
    echo
    '
    <body id="'.$casa.'-b">
        <div class="container">
            <p id="'.$casa.'" class="title">¿QUÉ QUIERES '.strtoupper($action).' '.strtoupper($user).'?</p>
            <form action="./record.php" method="POST" target="_self" id="'.$casa.'-t" class="texto-plano">
                <legend>Tipo:</legend><br>
                <input type="radio" id="file" name="edit" value="el archivo">
                <label for="file">Archivo</label><br><br>
                <input type="radio" id="folder" name="edit" value="la carpeta">
                <label for="folder">Carpeta</label><br><br>
                <label for="user" >Nombre del elemento:</label><br>
                <input type="text" id="'.$casa.'" class="input" name="f_name" placeholder="nombre.ext" required><br><br>';
                if($action=="renombrar")
                {
                    echo 
                    '
                        <label for="user">Nuevo nombre del elemento:</label><br>
                        <input type="text" id="'.$casa.'" class="input" name="f_name2" placeholder="nombre.ext" required><br><br>
                    ';
                }
                echo
                '
                <input id="'.$casa.'" class="input" type="submit" value="Aceptar">
            </form>
        </div>
    </body>
    ';
?>

</html>