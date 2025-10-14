<?php

require_once "../src/fornecedor_crud.php";
require_once "../src/produto_crud.php";

// Estamos pegando o parametro chamado id
$id = $_GET['id'];

$produto = buscarProdutosPorID($conexao, $id);

$fornecedores = buscarFornecedores($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="" method="post">

         <div>
            <label for="nome">Nome:</label>
            <input value="<?=$produto['nome']?>" type="text" name="nome" id="nome" required>
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <!-- nÃO DE ENTER OU IDENTAÇÃO DENTRO DA TAG TEXTAREA, pois os espaços vão aparecer-->
            <textarea name="descricao" id="descricao" rows="5"><?=$produto['descricao']?></textarea>
        </div>

        <div>
            <label for="preco">Preço:</label>
            <input <?=$produto['preco']?> type="number" name="preco" id="preco" required min="0" step="0.01">
        </div>

        <div>
            <label for="quantidade">Quantidade:</label>
            <input <?=$produto['quantidade']?> type="number" name="quantidade" id="quantidade" required min="0" step="0.01">
        </div>

        <div>
            <label for="fornecedor">Fornecedor:</label>
            <select name="fornecedor_id" id="fornecedor" required>

                <option value="">-- Selecione --</option>

                <?php foreach($fornecedores as $fornecedor): ?>
                    <option value="<?=$fornecedor['id']?>"><?=$fornecedor['nome']?></option>
                <?php endforeach; ?>

            </select>
        </div>

        <button type="submit"> Atualizar </button>

    </form>

    <a href="lista2.php"> ⬅ Voltar </a>

</body>
</html>