<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./statics/css/style.css">
    <title>Archivos Chidos</title>
</head>

<body>
<?php
    session_start();
    if($_SESSION['user']===false)
    {
        header('location: ../../index.php');
        exit();
    }
    else
    {
        var_dump($_SESSION);
        $user=$_SESSION['user'];
        echo 
        '
            <div>
                <h1>¡ADIÓS '.strtoupper($user).'!</h1>
            </div>  
            <a href="./login.php">Inicio</a>  
        ';
        session_destroy();
    }
?>
</body>
</html>