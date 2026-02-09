<?php
class Ticket {
    private $conn;
    private $table = "tickets";

    public function __construct($db) { $this->conn = $db; }

    // LEER TODO
    public function read() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY fecha_registro DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // CREAR
    public function create($data) {
        $query = "INSERT INTO " . $this->table . " (cliente, email, equipo, descripcion) VALUES (?, ?, ?, ?)";
        return $this->conn->prepare($query)->execute([$data['cliente'], $data['email'], $data['equipo'], $data['descripcion']]);
    }

    // OBTENER UNO (Para editar)
    public function readOne($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // ACTUALIZAR
    public function update($data) {
        $query = "UPDATE " . $this->table . " SET cliente=?, email=?, equipo=?, descripcion=?, estado=? WHERE id=?";
        return $this->conn->prepare($query)->execute([$data['cliente'], $data['email'], $data['equipo'], $data['descripcion'], $data['estado'], $data['id']]);
    }

    // ELIMINAR
    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        return $this->conn->prepare($query)->execute([$id]);
    }
}