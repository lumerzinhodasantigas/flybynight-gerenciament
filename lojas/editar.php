<?php
require_once "../src/loja_crud.php";

$id = $_GET['id'];
$loja = buscarLojaPorId($conexao, $id);

if ( $_SERVER['REQUEST_METHOD'] === 'POST'){

    $nome = $_POST['nome'];
    atualizarLoja($conexao, $nome, $id);

    header("location:listar.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Loja</title>
    <link rel="stylesheet" href="../css/estilo.css">
    
</head>
<body>

    <h1>Editar Loja</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?=($loja['id']) ?>">

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?=($loja['nome']) ?>">
        </div>

        <button type="submit">Atualizar</button>
    </form>

    <a href="listar.php">⬅ Voltar</a>
</body>
</html>