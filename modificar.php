<?php
	session_start();
	include_once("conexao.php");
	$idProduto = filter_input(INPUT_GET, 'idProduto', FILTER_SANITIZE_NUMBER_INT);
	$result_produto="SELECT * FROM tbprodutos WHERE idProduto = '$idProduto'";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$row_produto = mysqli_fetch_assoc($resultado_produto);
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h1>Modificar Produto</h1>

	<a href="index.php">Voltar</a><br><br><br>
<?php

	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}

?>
	<form method="POST" action="processa_edit.php">

		<input type="hidden" name="idProduto" value="<?php echo $row_produto ['idProduto'];?>"><br>
		<label>Nome do produto: </label>
		<input type="text" name="nomeProduto" value="<?php echo $row_produto ['nomeProduto'];?>"><br>
		<label>Tipo do Produto: </label><br>
		<input type="radio" name="produtoPerecivel" value="S"> Perecível<br>
		<input type="radio" name="produtoPerecivel" value="N"> Não Perecível<br>
		<label>Origem do Produto: </label>
		<select class="form-group col-2" name="origemProduto">
			<option value="RN">RN</option>
			<option value="PB">PB</option>
			<option value="CE">CE</option>
			<option value="PE">PE</option>
			<option value="BA">BA</option>
			<option value="PI">PI</option>
		</select><br><br>
			
		<input type="submit" name="" value="Editar">
	</form>


</body>
</html>