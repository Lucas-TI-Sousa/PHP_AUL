<?php
require_once 'Database.php';

$acao = isset($_GET['action']) ? $_GET['action'] : '';

switch ($acao) {
    case 'list':
        echo json_encode(Database::getAllItems());
        break;
    // case 'add':
    //     $data = json_decode(file_get_contents('php://input'), true);
    //     Database::addItem($data['nome'], $data['telefone']);
    //     break;
    // case 'update':
    //     $id = $_GET['id'];
    //     $data = json_decode(file_get_contents('php://input'), true);
    //     break;
    // case 'delte':
    //     $id = $_GET['id'];
    //     Database::deleteItem($id); 
    //     break;
    // default:
    //     echo json_encode(['error' => 'Acao Invalida']);
}

?>