<?php

require_once 'DatabaseRepository.php';
$id = $_GET['id'];
$contact = DatabaseRepository::getContactById($id);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    DatabaseRepository::updateContact($id, $nome_produto, $quantidade);
    header('Location: list_compras.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Adicionar Contato</h1>

    <form action="edit_compras.php?id=<?= $contact['id']; ?>" method="post">
        <label for="nome_produto">Nome-produto:</label>
        <input type="text" name="nome_produto" id="nome_produto" required value="<?= $contact['nome_produto'] ?>">
        <br>
        <label for="quantidade">$quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" required value="<?= $contact['quantidade'] ?>">
        <br>

        <button type="submit">Salvar</button>
    </form>

    <a href="list_compras.php">Voltar para a lista de compras</a>
</body>

</html>