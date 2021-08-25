<?php 
session_start();
include_once("conexao.php");
$idProduto = filter_input(INPUT_GET, 'idProduto', FILTER_SANITIZE_NUMBER_INT);


if(!empty($idProduto)){
	$result_produt = "DELETE FROM tbprodutos WHERE idProduto='$idProduto'";
	$resultado_produt = mysqli_query($conn, $result_produt);

	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "Produto Apagado<br><br>";
		header("Location: listar.php");
	}else{
		$_SESSION['msg'] = "Produto NÂO foi Apagado<br><br>";
		header("Location: listar.php?idProduto=$idProduto");
	}
}else{
	$_SESSION['msg'] = "Selecione um produto Para Apagar<br><br>";
	header("Location: listar.php?idProduto=$idProduto");
}
