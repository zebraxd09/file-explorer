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
$archivo=fopen("../.././arch.txt","a+");
echo 
'
    <div>
    <h1>Registro de acciones</h1>
    <ul type="disk">';
    while(!feof($archivo))
    {
        echo '<li>'.fgets($archivo).'</li>';
    }
    echo
    '        
    </ul>
    </div>  
';
?>    
</body>
</html>