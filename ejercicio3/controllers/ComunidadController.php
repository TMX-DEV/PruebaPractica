<?php
require_once __DIR__ . '/../database/Database.php';
require_once __DIR__ . '/../models/Comunidad.php';

class ComunidadController {
    private $db;
    private $comunidad;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->comunidad = new Comunidad($this->db);
    }

    public function agregarComunidad($nombre, $direccion, $poblacion) {
        if(empty($nombre) || empty($direccion) || empty($poblacion)) {
            return "Todos los campos son obligatorios.";
        }

        $this->comunidad->nombre = $nombre;
        $this->comunidad->direccion = $direccion;
        $this->comunidad->poblacion = $poblacion;

        if ($this->comunidad->crear()) {
            return "Comunidad agregada correctamente.";
        } else {
            return "Error al agregar la comunidad.";
        }
    }
}
?>