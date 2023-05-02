<?php

    include("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "<h1>Dados do usuário: </h1>";
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Telefone: $fone <br>";
    echo "Senha: $senha <br>";

?>