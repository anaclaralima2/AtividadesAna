<?php
$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "FormularioProduto";
$porta = "3307";


$conexao = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco,
    $porta
);

if ($conexao->connect_error) 
?>