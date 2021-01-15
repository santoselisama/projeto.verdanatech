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
				<center><h3><a href="index.php" style="text-decoration:none">INÍCIO</a></a></h3>
				</center>
			</ul>
		</nav>
		<section>
			<center>
			<h1> CADASTRO DO CLIENTE</h1>
			<hr>
			<br><br>
			<form method="post" action="processacliente.php">
				<h4>NOME :</h4>
				<input type="text" name="nome" class="campo" maxlength="40"required autofocus placeholder="Ex.: Maria José dos Santos"><br>
				<h4>CPF :</h4>
				<input type="text" name="cpf" class="campo" placeholder="Ex.: 12345678900"maxlength="11"required><br>
				<h4>ENDEREÇO :</h4>
				<input type="text" name="endereco" class="campo" placeholder="Ex.: Rua Pau Brasil" maxlength="40"require><br>
				<h4>CONTATO :</h4>
				<input type="text" name="contato" class="campo" placeholder="Ex.: 81900000000" maxlength="11"required><br><br>
				</center>
				<center><input type="submit" value="SALVAR" class="btn" style='width: 120px'>
				<input type="reset"  value="LIMPAR" class="btn" style='width: 120px'></center>
			</form>
		</section>
	</div>	
</body>
</html>
