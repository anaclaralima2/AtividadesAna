<?php
$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "formconexaophp";
$porta = "3307";


$conexao = new mysqli(
    $host,
    $usuario,
    $senha,
    $banco,
    $porta
);
