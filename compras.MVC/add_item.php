<?php
require_once 'DatabaseRepository.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    DatabaseRepository::insertItens($nome_produto, $quantidade);
    header('Location: list_compras.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contato</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Adicionar Item à lista de compra</h1>

    <form action="add_item.php" method="post">
        <label for="nome_produto">nome-produto:</label>
        <input type="text" name="nome_produto" id="nome_produto" required>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="quantidade" name="quantidade" id="quantidade" required>
        <br>
        <button type="submit">Adicionar</button>
    </form>

    <a href="list_compras.php">Voltar para a lista de compras</a>
</body>
</html>