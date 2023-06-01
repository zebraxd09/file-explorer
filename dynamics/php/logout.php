<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../statics/media/img/file.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../statics/css/style.css">
    <title>Archivos Chidos</title>
</head>

<?php
    session_start();
    if(!isset($_SESSION['user']) && !isset($_SESSION['casa']))
    {
        header('location: ../../index.php');
        exit();
    }
    else
    {
        $user=$_SESSION['user'];
        $casa=$_SESSION['casa']; 
        echo 
        '
        <body id="'.$casa.'-b">
            <div class="container">
                <p id="'.$casa.'" class="title">¡ADIÓS '.strtoupper($user).'!</p>
                <a id="'.$casa.'" class="input" href="./login.php">Volver a Inicio</a>  
            </div>  
        </body>
        ';
    }
    session_destroy();
?>

</html>