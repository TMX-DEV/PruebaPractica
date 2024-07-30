<!DOCTYPE html>
<html>
<head>
    <title>Agregar Comunidad</title>
</head>
<body>
    <h1>Agregar Nueva Comunidad</h1>
    <?php
    if (isset($_GET['message'])) {
        echo "<p>{$_GET['message']}</p>";
    }
    ?>
    <form action="../index.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required><br><br>

        <label for="poblacion">Población:</label>
        <input type="text" name="poblacion" required><br><br>

        <input type="submit" value="Agregar Comunidad">
    </form>
</body>
</html>