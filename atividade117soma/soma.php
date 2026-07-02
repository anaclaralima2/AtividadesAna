<?php 
include "conexaosoma.php";

$numero1 = 20;
$numero2 = 23;
$numero3 = 10;  

$resultado = $numero1 + $numero2 + $numero3;

$sql = "INSERT INTO soma (numero1, numero2, numero3, resultado)
 VALUES ($numero1, $numero2, $numero3, $resultado)";


if ($conexao->query($sql)) {
    echo "<br>Registro inserido com sucesso!";
} else {
    echo "<br>Erro ao inserir registro: " . $conexao->error;
}

?>