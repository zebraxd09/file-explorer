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
    <div class="login-container">
        <h1>INICIO DE SESIÓN</h1>
        <form action="./action.php" method="POST" target="_self">
            <legend>Bienvenidx</legend><br>
            <label for="user">Usuario:</label><br>
            <input type="text" id="user" name="user" placeholder="Usuario" required><br><br>
            <label for="casa">Casa:</label><br>
            <select id="casa" name="casa" required>
                <option disabled selected>Selecciona una casa</option>
                <option value="halcones">Halcones</option>
                <option value="teporingos">Teporingos</option>
                <option value="ajolotes">Ajolotes</option>
            </select><br><br>
            <input type="submit" value="Iniciar sesión">
        </form>
    </div>
    <?php
        $user=(isset($_POST["user"]) && $_POST["user"] != "")? $_POST["user"]:false;
        $_SESSION['user']=$user;
    ?>
</body>

</html>