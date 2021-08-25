<?php 
session_start();
include_once("conexao.php");

$idProduto = filter_input(INPUT_POST, 'idProduto',FILTER_SANITIZE_NUMBER_INT);
$nomeProduto = filter_input(INPUT_POST, 'nomeProduto',FILTER_SANITIZE_STRING);
$produtoPerecivel = filter_input(INPUT_POST, 'produtoPerecivel',FILTER_SANITIZE_STRING);
$origemProduto = filter_input(INPUT_POST, 'origemProduto',FILTER_SANITIZE_STRING);

//echo "Nome do Produto: $nomeProduto <br>";
//echo "Nome do Produto: $produtoPerecivel <br>";
//echo "Nome do Produto: $origemProduto <br>";


$result_produt = "UPDATE tbprodutos SET nomeProduto='$nomeProduto', produtoPerecivel='$produtoPerecivel', origemProduto='$origemProduto', modified=NOW() WHERE idProduto='$idProduto'";
$resultado_produt = mysqli_query($conn, $result_produt);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "Produto Editado<br><br>";
	header("Location: listar.php");
}else{
	$_SESSION['msg'] = "Produto NÂO foi Editado<br><br>";
	header("Location: modificar.php?idProduto=$idProduto");
}