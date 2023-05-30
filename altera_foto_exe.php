<?php
    include('conexao.php');
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'fotos/';
    $extensao = strtolower(substr($_FILES['foto']['name'],-4));
    $nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
    }

    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];

    echo "<h1>Alteraração de dados</h1>";
    echo "<p>Usuario: $nome</p>";
    $sql = "UPDATE usuario  SET 
        foto='$nome_foto'
        WHERE id_usuario=$id_usuario";

    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados:". $msqli_erro($con)."!";
?>

<a href="listar_usuarios.php">Voltar</a>