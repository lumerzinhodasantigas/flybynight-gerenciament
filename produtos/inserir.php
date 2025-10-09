<?php
require_once "../src/fornecedor_crud.php";
require_once "../src/produto_crud.php";

$fornecedores = buscarFornecedores($conexao);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $id_fornecedor = $_POST['fornecedor_id'];

    inserirProduto($conexao, $nome, $descricao, $preco, $quantidade, $id_fornecedor);

    header("Location: lista2.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produto</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Adicionando um novo produto</h1>

    <form action="" method="post">

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="4"></textarea>
        </div>

        <div>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" required min="0" step="0.01">
        </div>

        <div>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required min="0" step="0.01">
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

        <button type="submit">Salvar</button>
    </form>

    <a href="lista2.php">⬅ Voltar</a>
</body>
</html>