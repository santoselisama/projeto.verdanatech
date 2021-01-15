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
				<center>
					<h3><a href="index.php" style="text-decoration:none">INÍCIO</a></a>
					</h3>
				</center>
			</ul>
		</nav>
		<section>
			<center>
			<h1> CADASTRO DE PRODUTOS</h1>
			<hr>
			<br><br>
			<form method="post" action="processaproduto.php">
				<h4>NOME DO PRODUTO :</h4>
				<input type="text" name="nomeProduto" class="campo" placeholder="Ex.: Boneca" maxlength="30"required><br>
				<h4>PREÇO DO PRODUTO :</h4>
				<input type="text" name="precoProduto" class="campo" placeholder="Ex.: R$0,0" maxlength="40"require><br>
				<h4>DATA DO PRODUTO :</h4>
				<input type="text" name="dataProduto" class="campo" placeholder="Ex.: 2021-01-13" maxlength="8" 
				required><br><br>
			</center>
				<center><input type="submit" value="SALVAR" class="btn" style='width: 120px'>
				<input type="reset"  value="LIMPAR" class="btn" style='width: 120px'></center>
			</form>
		</section>
	</div>	
</body>
</html>