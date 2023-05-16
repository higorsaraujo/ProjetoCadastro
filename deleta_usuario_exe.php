<?php

include('conexao.php');

$id_usuario = $_POST['id_usuario'];

$sql = "DELETE FROM usuario WHERE id_usuario=$id_usuario";

    $result = mysqli_query($con,$sql);
    if($result)
        echo "Deletado com sucesso!<br>";
    else
        echo "Erro ao deletar dados:". $msqli_erro($con)."!";
?>
