<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
DatabaseRepository::deleteItens($id);
header('Location: list_compras.php');
exit;
?>