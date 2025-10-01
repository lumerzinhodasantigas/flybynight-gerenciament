<?php
// Importando o arquivo de funções CRUD para fornecedores
require_once "../src/fornecedor_crud.php";

// Chama a função (passando a conexão) e recebe um array associativo com os dados
$fornecedores = buscarFornecedores($conexao);

// Testando a exibição dos dados (só para o programador)
/* echo "<pre>";
var_dump($fornecedores);
echo "</pre>"; */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Fornecedores </title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <h1>Fornecedores</h1>
    <a href="inserir.php"> Novo fornecedor </a>
    <a href="../index.php"> ⬅ Voltar </a>

    <!-- Estruturando uma tabela HTML para exibir os dados -->
    <table>
        <caption> Relação de Fornecedores </caption>
        <tr>
            <td> <strong> ID </strong>  </td>
            <td> <strong> Nome </strong> </td>
        </tr>

    <!-- As linhas (tr/td) abaixo serão geradas dinamicamente, ou seja, usando um loop (foreach) no array ($fornecedores) -->
    <?php foreach ($fornecedores as $fornecedor) { // ou : ?>

        <tr>
            <td> <?=$fornecedor['id']?> </td>
            <td> <?=$fornecedor['nome']?> </td>
            <td>
                <a href="editar.php">Editar</a>
                <a href="">Excluir</a>
            </td>
        </tr>

    <?php } // ou endforeach; ?>

    </table>

</body>
</html>