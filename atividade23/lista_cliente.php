<?php 
include "banco.php";

$sql = "SELECT * FROM form";

$resultado = $conexao->query($sql);


    while($cliente = $resultado->fetch_assoc()) {
        echo "Nome: ".$cliente['nome'] . "<br>";
        echo "Idade: ".$cliente['idade'] . "<br>";
        echo "Email: ".$cliente['email'] . "<br>";
        echo "Telefone: ".$cliente['telefone'] . "<br>";
        echo "Cidade: ".$cliente['cidade'] . "<br>";
        

        echo "<a href= 'editar_clientes.php?id='" . $cliente['id'] . ">Editar</a> <br>";
    }
       
?>