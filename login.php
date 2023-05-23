<?php 
    include('conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario
            WHERE email_usuario = '$email'
                AND senha_usuario       = '$senha'";

    $result = mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    if($rowcount>0){
        include('cria_sessao.php');
        // array com os dados do usuario que estão no banco
        $_SESSION['login'] = mysqli_fetch_array($result);
        header('Location: index.php');
    }else{
        echo "<h1>Usuario não encontrado!</h1>";
    }

?>