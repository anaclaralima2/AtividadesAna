<?php  
include "banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM form WHERE id = $id";                   

if ($conexao->query($sql)) {
    header("Location: lista_cliente.php");
    exit();

}else {
    echo "Erro ao excluir o cliente.... ";
}                                                           

?>
   