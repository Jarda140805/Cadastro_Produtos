<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
</head>
<body>

	<h1>Cadastre seu Produto</h1>

	<a href="index.php">Voltar</a><br><br><br>
<?php

	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}

?>
	<form method="POST" action="processa.php">
		<label>Nome do produto: </label>
		<input type="text" name="nomeProduto"><br>
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
		<input type="submit" name="" value="Cadastrar">
	</form>


</body>
</html>