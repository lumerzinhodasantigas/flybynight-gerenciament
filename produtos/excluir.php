<?php
require_once "../src/produto_crud.php";
$id = $_GET['id'];
excluirProduto($conexao, $id);
header("location:lista2.php");
exit;