<?php
    session_start();
    if($_SESSION['user']===false) 
    {
        header('location: ../../index.php');
        exit();
    }
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
    // var_dump($_SESSION);
    $action=(isset($_POST["action"]) && $_POST["action"] != "")? $_POST["action"]:false;
    $edit=(isset($_POST["edit"]) && $_POST["edit"] != "")? $_POST["edit"]:false;
    $_SESSION['edit']=$edit;
    $_SESSION['action']=$action;
    $user=$_SESSION['user'];
    echo
    '        
        <div>
            <h1>¿QUÉ QUIERES '.strtoupper($action).' '.strtoupper($user).'?</h1>
            <form action="./record.php" method="POST" target="_self">
                <legend>Tipo:</legend><br>
                <input type="radio" id="file" name="edit" value="el archivo">
                <label for="file">Archivo</label><br><br>
                <input type="radio" id="folder" name="edit" value="la carpeta">
                <label for="folder">Carpeta</label><br><br>
                <label for="user">Nombre del elemento:</label><br>
                <input type="text" id="f_name" name="f_name" placeholder="nombre.ext" required><br><br>';
                if($action=="renombrar")
                {
                    echo 
                    '
                        <label for="user">Nuevo nombre del elemento:</label><br>
                        <input type="text" id="f_name2" name="f_name2" placeholder="nombre.ext" required><br><br>
                    ';
                }
                echo
                '
                <input type="submit" value="Aceptar">
            </form>
        </div>
    ';
?>
</body>

</html>