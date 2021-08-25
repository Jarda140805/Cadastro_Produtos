<?php 
session_start();
include_once("conexao.php");


$nomeProduto = filter_input(INPUT_POST, 'nomeProduto',FILTER_SANITIZE_STRING);
$produtoPerecivel = filter_input(INPUT_POST, 'produtoPerecivel',FILTER_SANITIZE_STRING);
$origemProduto = filter_input(INPUT_POST, 'origemProduto',FILTER_SANITIZE_STRING);

//echo "Nome do Produto: $nomeProduto <br>";
//echo "Nome do Produto: $produtoPerecivel <br>";
//echo "Nome do Produto: $origemProduto <br>";


$result_produt = "INSERT INTO tbprodutos(nomeProduto, produtoPerecivel, origemProduto, crated) VALUES ('$nomeProduto','$produtoPerecivel','$origemProduto', NOW())";
$resultado_produt = mysqli_query($conn, $result_produt);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "Produto Cadastrado<br><br>";
	header("Location: cadastrar.php");
}else{
	header("Location: cadastrar.php");
}