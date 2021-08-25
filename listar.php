<?php
	session_start();
	include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="utf-8">
	<title>Lista</title>
</head>
<body>

	<h1>Lista de Produtos</h1>

	<a href="index.php">Voltar</a><br><br><br>

	<?php

		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}



		$result_produtos = "SELECT * FROM tbprodutos";
		$resultado_produtos = mysqli_query($conn, $result_produtos);
		while($row_usuario = mysqli_fetch_assoc($resultado_produtos)){
			
			echo "Nome do produto: ".$row_usuario ['nomeProduto']."<br>";
			echo "É Perecível? ".$row_usuario ['produtoPerecivel']."<br>";
			echo "Origem do Produto: ".$row_usuario ['origemProduto']."<br>";
			echo "<a href='modificar.php?idProduto=". $row_usuario ['idProduto'] . "'>Editar</a><br>";
			echo "<a href='processa_apagar.php?idProduto=". $row_usuario ['idProduto'] . "'>Deletar</a><br><hr>";
			


		}
	?>


</body>
</html>