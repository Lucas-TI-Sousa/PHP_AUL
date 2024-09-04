<?php
require_once 'DatabaseRepository.php';
$itens = DatabaseRepository::getAllItens();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>
    <h1>Lista de Compras </h1>
    <a href="add_compras.php">Adicionar Novo produto</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nome-produto</th>
                <th>quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($itens as $item): ?>
                <tr>
                    <td><?= $item['nome_produto']; ?></td>
                    <td><?= $item['quantidade']; ?></td>
                    <td>
                        <a href="edit_compras.php?id=<?= $item['id']; ?>">Editar</a>
                        <a href="delete_compras.php?id=<?= $item['id']; ?>" 
                            onclick="return confirm('Tem certeza que deseja deletar este produto?');">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>