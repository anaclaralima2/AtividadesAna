<?php

include "banco.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM produto WHERE id=$id";

    if ($conexao->query($sql)) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro ao excluir produto: " . $conexao->error;
    }

} else {
    echo "ID do produto não foi informado.";
}

?>