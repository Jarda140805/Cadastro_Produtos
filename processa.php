<?php 

include_once("conexao.php");


$nomeProduto = filter_input(INPUT_POST, 'nomeProduto',FILTER_SANITIZE_STRING);
$produtoPerecivel = filter_input(INPUT_POST, 'produtoPerecivel',FILTER_SANITIZE_STRING);
$origemProduto = filter_input(INPUT_POST, 'origemProduto',FILTER_SANITIZE_STRING);

echo "Nome do Produto: $nomeProduto <br>";
echo "Nome do Produto: $produtoPerecivel <br>";
echo "Nome do Produto: $origemProduto <br>";
?>