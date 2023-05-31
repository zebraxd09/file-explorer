<?php
    session_start();
    if($_SESSION['user']===false) 
    {
        header('location: ./login.php');
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
    var_dump($_SESSION);
    $f_name=(isset($_POST["f_name"]) && $_POST["f_name"] != "")? $_POST["f_name"]:false;
    $edit=(isset($_POST["edit"]) && $_POST["edit"] != "")? $_POST["edit"]:false;
    $user=$_SESSION['user'];
    $casa=$_SESSION['casa']; 
    $action=$_SESSION['action'];
    // REGISTRO DE ACCIONES
    $f_record=fopen("../../record.txt","a+");
    if($action!=false)
    {
        if($action=='renombrar')
        {
            $f_name2=(isset($_POST["f_name2"]) && $_POST["f_name2"] != "")? $_POST["f_name2"]:false;
            fwrite($f_record, "El usuario '".$user."' de la casa '".$casa."' decidió ".$action." ".$edit.": '".$f_name."' a: '".$f_name2."'\n");
        }
        else
        {
            fwrite($f_record, "El usuario '".$user."' de la casa '".$casa."' decidió ".$action." ".$edit.": '".$f_name."'\n");
        }
    }
    rewind($f_record);
    echo'
        <div>
            <h1>Registro de acciones</h1>
            <ul type="disk">';
                    while(!feof($f_record))
                    {
                        echo '<li>'.fgets($f_record).'</li>';
                    }
            '</ul>
        </div>
    ';
    // ACCIÓN
    $f_name='../../statics/media/arch/'.$f_name;
    $ext=pathinfo($f_name,PATHINFO_EXTENSION);
    switch($edit)
    {
        case 'el archivo':
            switch($action)
            {
                case 'crear':
                    $file=fopen($f_name,'w');
                    fclose($file);
                    break;
                case 'renombrar':
                    $f_name2='../../statics/media/arch/'.$_POST["f_name2"];
                    $file=fopen($f_name,'r');
                    rename($f_name,$f_name2);
                    fclose($file);
                    break;
                case 'eliminar':
                    unlink($f_name);
                    break;
            }
            break;
        case 'la carpeta':
            switch($action)
            {
                case 'crear':
                    mkdir($f_name);
                    break;
                case 'renombrar':
                    $f_name2='../../statics/media/arch/'.$_POST["f_name2"];
                    rename($f_name,$f_name2);
                    break;
                case 'eliminar':
                    rmdir($f_name);
                    break;
            }
            break;
    }
    fclose($f_record);
    echo 
    '
        <br><a href="./action.php">Volver a Inicio</a><br><br>
    ';
    $_SESSION['action']=false;
?>    
</body>
</html>