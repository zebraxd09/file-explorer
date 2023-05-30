<!DOCTYPE html>
<html>
<head>
    <title>Selección de Acción</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Statics%20-%20Assets/style.css">
</head>
<body>
<div class="action-container">
    <h1>Bienvenido, [nombre del usuario]</h1>
    <form>
        <label for="accion">Acción a realizar:</label><br>
        <select id="accion" name="accion" required>
            <option value="">Por favor seleccione una acción</option>
            <option value="crear">Crear</option>
            <option value="eliminar">Eliminar</option>
            <option value="renombrar">Renombrar</option>
        </select><br>

        <input type="submit" value="Continuar">
    </form>

    <button onclick="location.href='./registroAcciones.php'">Ver Registro de Acciones</button>
    <button onclick="location.href='./cierre.php'">Cerrar Sesión</button>
</div>
</body>
</html>
