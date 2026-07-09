<?php

include "banco.php";

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

    
$sql = "INSERT INTO form (nome, quantidade, preco) 
VALUES ('$nome', '$quantidade', '$preco')";
if ($conexao->query($sql)) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . $conexao->error;
}

?>