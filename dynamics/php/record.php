<?php
    session_start();
    if(!isset($_SESSION['user'])) 
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
    if(!isset($_SESSION['action']))
    {
        echo'
            <div>
                <h1>Registro de acciones</h1>
                <ul type="disk">
                    <li>Aún no se han hecho cambios</li>     
                </ul>
            </div>
        ';
    }
    $user=$_SESSION['user'];
    $casa=$_SESSION['casa'];
    if(isset($_SESSION['action']) && isset($_SESSION['user']))
    {
        $f_name=(isset($_POST["f_name"]) && $_POST["f_name"] != "")? $_POST["f_name"]:false;
        $action=$_SESSION['action'];
        $f_record=fopen("../../statics/media/arch/record.txt","a+");
        if($action=='renombrar')
        {
            $f_name2=(isset($_POST["f_name2"]) && $_POST["f_name2"] != "")? $_POST["f_name2"]:false;
            fwrite($f_record, "El usuario '".$user."' de la casa '".$casa."' decidió ".$action." el archivo: '".$f_name."' a: '".$f_name2."'\n");
        }
        else
        {
            fwrite($f_record, "El usuario '".$user."' de la casa '".$casa."' decidió ".$action." el archivo: '".$f_name."'\n");
        }
        rewind($f_record);
        echo'
            <div>
                <h1>Registro de acciones</h1>
                <ul type="disk">
                    <li>';
                        while(!feof($f_record))
                        {
                            echo '<li>'.fgets($f_record).'</li>';
                        }
                    '</li>
                </ul>
            </div>
        ';
        //accion
        if(isset($_POST['f_name']))
        {
            $f_name='../../statics/media/arch/'.$_POST['f_name'];
            $ext=pathinfo($f_name,PATHINFO_EXTENSION);
            switch($action)
            {
                case 'crear':
                    $file=fopen($f_name,'w');
                    fclose($file);
                    break;
                case 'renombrar':
                    $f_name2='../../statics/media/arch/'.$_POST['f_name2'];
                    $file=fopen($f_name,'r');
                    rename($f_name,$f_name2);
                    fclose($file);
                    break;
                case 'eliminar':
                    unlink($f_name);
                    break;
            }
        }
        fclose($f_record);
    }
?>    
</body>
</html>