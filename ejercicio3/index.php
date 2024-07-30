<?php
require_once 'controllers/ComunidadController.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $poblacion = $_POST['poblacion'];

    $controller = new ComunidadController();
    $resultado = $controller->agregarComunidad($nombre, $direccion, $poblacion);

    header("Location: views/agregarComunidad.php?message=" . urlencode($resultado));
    exit();
} else {
    header("Location: views/agregarComunidad.php");
    exit();
}
?>