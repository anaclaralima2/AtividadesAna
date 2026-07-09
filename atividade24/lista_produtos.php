<?php 
include "banco.php";

$sql = "SELECT * FROM consulta";

$resultado = $conexao->query($sql);


    while($cliente = $resultado->fetch_assoc()) {
        echo "Nome: ".$cliente['nome'] . "<br>";
        echo "Quantidade: ".$cliente['idade'] . "<br>";
        echo "Preço: ".$cliente['preco'] . "<br>";
        
    }
       
?>