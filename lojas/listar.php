<?php

require_once "../src/loja_crud.php";

$lojas = buscarLojas($conexao);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Lojas</title>
    <link rel="stylesheet" href="../css/estilo.css">

</head>
<body>

    <h1>Lojas</h1>

    <a href="inserir.php">Nova Loja</a>
    <a href="../index.php">⬅ Voltar</a>

    <table>
        <caption>Relação de Lojas</caption>

        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>

        </tr>

        <?php foreach ($lojas as $loja): ?>

        <tr>

            <td><?= ($loja['id']) ?></td>
            <td><?= ($loja['nome']) ?></td>
            <td>
                <a href="editar.php?id=<?= $loja['id'] ?>">Editar</a> |
                <a href="excluir.php?id=<?= $loja['id'] ?>">Excluir</a>
            </td>

        </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>
