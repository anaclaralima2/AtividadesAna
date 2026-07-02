<?php
$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "formconexao2php";
$porta = "3307";


$conexao = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco,
    $porta
);