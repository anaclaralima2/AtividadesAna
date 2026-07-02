<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>
</head>

<body>

    <h1>Resultado da Mutiplicação</h1>
    <p>
        <?php
        include "formconexao.php";

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $num3 = $_POST['numero3'];
        $mutiplicacao = $num1 * $num2 * $num3;

        $sql = "INSERT INTO multiplicacao (numero1, numero2, numero3, resultado)
         VALUES ($num1, $num2, $num3, $mutiplicacao)";

        $conexao->query($sql);

        echo "O resultado é $mutiplicacao";
        ?>
    </p>
</body>

</html>