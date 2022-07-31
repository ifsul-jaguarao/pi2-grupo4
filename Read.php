<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta  charset="utf-8" />
<title>Título</title>
</head>
<body>
<?php

// Substitua pelos valores do host, usuário, senha e base de dados respectivamente
$conexao   = mysqli_connect("172.16.88.62", "pi2-grupo4", "grupo4", "pi2-grupo4");

// Substitua pela tabela correta
$resultado = mysqli_query($conexao, "SELECT * FROM Clientes");
$resultado2 = mysqli_query($conexao, "SELECT * FROM Carros");
$resultado3 = mysqli_query($conexao, "SELECT * FROM Pagamento");

       echo "<h3>Aluguel de Carros</h3>";

while ($linha = mysqli_fetch_assoc($resultado)) {

	// Substitua pelo campo correto
	echo "<h3>Clientes</h3>";
	echo $linha['Nome'] . "<br />";
	echo $linha['CPF'] . "<br />";
	echo $linha['e-mail'] . "<br />";
	
	echo $linha['Telefone'] . "<br />";
}
while ($linha2 = mysqli_fetch_assoc($resultado2)) {

	// Substitua pelo campo correto
	echo "<h3>Carros</h3>";
	echo $linha2['Modelo'] . "<br />";
	echo $linha2['Cor'] . "<br />";
	echo $linha2['Ano'] . "<br />";
	echo $linha2['FIPE'] . "<br />";
}
while ($linha3 = mysqli_fetch_assoc($resultado3)) {

	// Substitua pelo campo correto
	echo "<h3>Pagamento</h3>";
	echo $linha3['Valor'] . "<br />";
	echo $linha3['Dias'] . "<br />";
	echo $linha3['Metodo Pagamento'] . "<br />";
}
?>
</body>
</html>