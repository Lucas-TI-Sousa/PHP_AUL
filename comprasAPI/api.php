<?php
// $acao = $_GET['acao'];

// if($acao == 'dia') {
//     echo "Hoje é dia de revisão!";
// } else if($acao == 'api') {
//     echo "Minha API funciona!";
// } else {
//     echo "Ação não implementada";
// }

require_once 'DatabaseRepository.php';
$database = new DatabaseRepository();

$acao = $_GET['acao'];

if($acao == 'listar') {
    echo $database->getAllItems();
} else if($acao == 'adicionar') {
    echo $database->addItem();
} else {
    echo "Ação não implementada";
}
?>