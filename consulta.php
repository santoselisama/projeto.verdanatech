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
  			$result = "SELECT * FROM cliente";
  			$resultado = mysqli_query($conexao,$result);
  			while ($exibirRegistros = mysqli_fetch_array($resultado)){

				$cpf = $exibirRegistros[0];
				$categoria = $exibirRegistros[1];
				$nome = $exibirRegistros[2];
				$endereco = $exibirRegistros[3];
				$contato = $exibirRegistros[4];

				print"<article>";
				print"Nome: $nome<br>";
				print"Endereço: $endereco<br>";
				print"Contato: $contato<br>";
				print"CPF: $cpf<br>";
				print"Categoria: $categoria <br><br>";

				print"</article>";
			}
  			
  			?>
  		</form>
		</select>
		</font>
			</body>
		</section>
</html>