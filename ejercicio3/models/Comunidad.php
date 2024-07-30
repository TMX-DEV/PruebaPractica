<?php
class Comunidad {
    private $conn;
    private $comunidades = "Comunidades";

    public $id_comunidad;
    public $nombre;
    public $direccion;
    public $poblacion;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function crear() {
        $query = "INSERT INTO " . $this->comunidades . " (nombre, direccion, poblacion) VALUES (:nombre, :direccion, :poblacion)";

        $stmt = $this->conn->prepare($query);

        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->direccion = htmlspecialchars(strip_tags($this->direccion));
        $this->poblacion = htmlspecialchars(strip_tags($this->poblacion));

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":direccion", $this->direccion);
        $stmt->bindParam(":poblacion", $this->poblacion);

        return $stmt->execute();
    }
}
?>