<?php
/* Neste arquivo teremos todas as funções que serão usadas para manipulação (CRUD) de Fornecedores em nosso sitema e bancode dados. */

// Acessando o script de conexão ad BD
require_once "../conecta.php";

/* Retornará um array associativo com os fornecedores */
function buscarFornecedores($conexao){
    // Montamos o comando SQL para a consulta
    $sql = "SELECT * FROM fornecedores";

    // Executamos o cinabdi e gyardamos o resultado da consulta
    $consulta = $conexao->query($sql);

    // Retornamos o resultado em formato de Array Associativo
    return $consulta->fetchAll();

}



?>