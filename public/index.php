<?php
require_once '../app/controllers/TicketController.php';
$controller = new TicketController();
$action = $_GET['action'] ?? 'listar';

switch($action) {
    case 'guardar':
        $controller->guardar();
        break;
    case 'eliminar':
        $controller->eliminar($_GET['id']);
        break;
    case 'nuevo':
    case 'editar':
        $ticket = ($action == 'editar') ? (new Ticket((new Database())->getConnection()))->readOne($_GET['id']) : null;
        require_once '../app/views/formulario.php';
        break;
    default:
        $tickets = $controller->listar();
        require_once '../app/views/listado.php';
        break;
}