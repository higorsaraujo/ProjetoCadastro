<?php
    include('conexao.php');

    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    //select imagem 

    $sqlfoto = "SELECT foto FROM usuario WHERE id_usuario=$id_usuario";
    $result = mysqli_query($con, $sqlfoto);
    $nome_foto = $result;
    if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'fotos/';
    $extensao = strtolower(substr($_FILES['foto']['name'],-4));
    $nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
    }

    echo "<h1>Alteraração de dados</h1>";
    echo "<p>Usuario: $nome</p>";
    $sql = "UPDATE usuario  SET 
        nome_usuario='$nome', 
        email_usuario='$email',
        fone_usuario='$fone',
        senha_usuario='$senha',
        foto='$nome_foto'
        WHERE id_usuario=$id_usuario";

    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados:". $msqli_erro($con)."!";
?>

<a href="listar_usuarios.php">Voltar</a>