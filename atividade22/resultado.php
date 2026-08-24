<?php

include "conexao.php";

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];

$resultado = $n1 - $n2 - $n3 - $n4;

$sql = "INSERT INTO subtracao(numero1, numero2, numero3, numero4, resultado)
VALUES('$n1','$n2','$n3','$n4','$resultado')";

$conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link rel="stylesheet" href="./css/style.css">
</head>

<body>

<div class="container">

<h2>Resultado da Subtração</h2>

<p>Primeiro número: <?php echo $n1; ?></p>

<p>Segundo número: <?php echo $n2; ?></p>

<p>Terceiro número: <?php echo $n3; ?></p>

<p>Quarto número: <?php echo $n4; ?></p>

<h3>Resultado: <?php echo $resultado; ?></h3>

<br>

<a href="subtracao.php">Novo cálculo</a>

</div>

</body>
</html>