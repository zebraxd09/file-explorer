<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../statics/css/style.css">
    <title>Archivos Chidos</title>
</head>

<body>
    <div class="container">
        <p class="title">INICIO DE SESIÓN</p>
        <form action="./action.php" method="POST" target="_self" class="texto-plano">
            <legend>¡Bienvenidx!</legend><br>
            <label for="user">Usuario:</label><br>
            <input type="text" id="user" name="user" placeholder="Usuario" class="input"required><br><br>
            <label for="casa">Casa:</label><br>
            <select id="casa" class="input" name="casa" required>
                <option id="sel-c" disabled selected>Selecciona una casa</option>
                <option value="halcones">Halcones</option>
                <option value="teporingos">Teporingos</option>
                <option value="ajolotes">Ajolotes</option>
            </select><br><br>
            <input id="button" class="input" type="submit" value="Iniciar sesión">
        </form>
    </div>
</body>

</html>