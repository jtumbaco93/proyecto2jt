<?php
require_once '../config/database.php';
require_once '../app/models/Ticket.php';

class TicketController {
    private $ticket;

    public function __construct() {
        $database = new Database();
        $this->ticket = new Ticket($database->getConnection());
    }

    public function listar() {
        return $this->ticket->read();
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validaciones Backend
            if (empty($_POST['cliente']) || empty($_POST['email']) || empty($_POST['descripcion'])) {
                header("Location: index.php?msg=error_campos_vacios");
                exit();
            }

            if (isset($_POST['id']) && !empty($_POST['id'])) {
                $this->ticket->update($_POST);
            } else {
                $this->ticket->create($_POST);
            }
            header("Location: index.php?msg=exito");
        }
    }

    public function eliminar($id) {
        $this->ticket->delete($id);
        header("Location: index.php?msg=eliminado");
    }
}