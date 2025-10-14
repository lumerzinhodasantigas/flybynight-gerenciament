<?php
require_once "../src/loja_crud.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    inserirLoja($conexao, $nome);

    header("Location: listar.php");
    exit;

}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Loja</title>
    <link rel="stylesheet" href="../css/estilo.css">

</head>
<body>
    
    <h1>Adicionando uma nova Loja</h1>

    <form action="" method="post">

        <div>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

        </div>
        <button type="submit">Salvar</button>

    </form>

    <a href="listar.php">⬅ Voltar</a>

</body>
</html>
