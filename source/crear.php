<!DOCTYPE html>
<html>
<head>
    <title>Crear archivo/carpeta</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Statics%20-%20Assets/style.css">
</head>
<body>
<h1>Crear archivo o carpeta</h1>
<form>
    <label for="tipo">Tipo:</label><br>
    <select id="tipo" name="tipo" required>
        <option value="">--Por favor seleccione el tipo--</option>
        <option value="archivo">Archivo</option>
        <option value="carpeta">Carpeta</option>
    </select><br>

    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br>

    <input type="submit" value="Crear">
</form>
</body>
</html>
