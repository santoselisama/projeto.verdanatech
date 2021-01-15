<?php
include("conexao.php");

?>
<!DOCTYPE html>
<html lang ="pt-br">

<head>
	<meta charset"ut-f8"/>
	<title> TOYS BR </title> 
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>

<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<center>
					<h3><a href="index.php" style="text-decoration:none">INÍCIO</a></a></h3>
				</center>
			</ul>
		</nav>
	<section>
	<center><h2> CONSULTAS TOYS BR</h2></center>

		<hr>
  			<?php
  			$result1 = "SELECT * FROM produtos";
  			$resultado1 = mysqli_query($conexao,$result1);
  			while ($exibirRegistros1 = mysqli_fetch_array($resultado1)){

				$nomeProduto = $exibirRegistros1[0];
				$precoProduto = $exibirRegistros1[1];
				$dataProduto = $exibirRegistros1[2];

				print"<article>";
				print"Nome do Produto: $nomeProduto<br>";
				print"Preço do Produto: $precoProduto<br>";
				print"Data do Produto: $dataProduto<br>";

				print"</article>";
			}
  			
  			?>
  		</form>
		</select>
		</font>
			</body>
		</section>
</html>