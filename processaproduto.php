<?php
include("conexao.php");

$nomeProduto = $_POST["nomeProduto"];
$precoProduto = $_POST["precoProduto"];
$dataProduto = $_POST["dataProduto"];

$sql = "insert into produtos (nomeProduto,precoProduto,dataProduto) 
values ('$nomeProduto','$precoProduto','$dataProduto')";

$salvar = mysqli_query($conexao, $sql);
$linhas1 = mysqli_affected_rows($conexao);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang ="pt-br">

<head>
	<meta charset"ut-f8"/>
	<title> TOYS BR </title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<center><h3><a href="index.php" style="text-decoration:none"> INÍCIO</a></center></h3>
				<center><h3><a href="consultapro.php" style="text-decoration:none"> CONSULTAS</a></h3></center>

		</nav>
		<section>
			<font face ="Verdana" color="orange">
			<center><h1> CONFIRMAÇÃO DE CADASTRO BR</h1>
			<hr><br><br>

				<?php
				if ($linhas1 == 1){
					print" Cadastro realizado com Sucesso!";
				}else{
					print"Cadastro não efetuado!";
				}

				?>
			</font>
			</form></center>
		</section>
	</div>	
</html>