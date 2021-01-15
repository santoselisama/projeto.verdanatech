<?php
include("conexao.php");

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$contato = $_POST["contato"];

$sql1 = "insert into cliente (nome,cpf,endereco,contato)
values ('$nome','$cpf','$endereco','$contato')";

$salvar1 = mysqli_query($conexao,$sql1);

$linhas = mysqli_affected_rows($conexao);

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
				<center><h3><a href="consulta.php" style="text-decoration:none">CONSULTA CLIENTE</a>

		</nav>
		<section>
			<font face ="Verdana" color="orange">
			<center><h1> CONFIRMAÇÃO DE CADASTRO BR</h1>
			<hr><br><br>
				<?php
				if ($linhas == 1){
					print" Cadastro realizado com Sucesso!";
				}else{
					print"Cadastro não efetuado!";
				}

				?>
			</center>
					</font>
				</form>
			</body>
		</section>
	</div>	
</html>

