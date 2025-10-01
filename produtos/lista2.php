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
    <a href="inserir.php"> + Novo produto </a>
    <a href="../index.php"> ⬅ Voltar </a>

    <!-- Estruturando uma tabela HTML para exibir os dados -->
    <table>
        <caption> Relação de Produtos </caption>
        <tr>
            <td> <strong> Nome </strong> </td>
            <td> <strong> Preço </strong> </td>
            <td> <strong> Quantidade </strong> </td>
            <td> <strong> Fornecedor </strong> </td>
            <td> <strong> Ações </strong> </td>
        </tr>

        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>
                <a href="editar.php">Editar</a>
                <a class="excluir" href="excluir.php">Excluir</a>
            </td>
        </tr>

    </table>


    <script src="../js/confirmar-exclusao.js"></script>
</body>
</html>