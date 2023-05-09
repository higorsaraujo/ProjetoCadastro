<?php 
    include('conexao.php');
    $id_usuario = $_GET ['id_usuario'];
    $sql = "SELECT * FROM usuario WHERE id_usuario=$id_usuario";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!-- TESTAR CODIGO http://localhost/ProjetoCadastro/altera_usuario.php?id_usuario=2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CADASTRO DE USUÁRIOS - IFSP </h1>
    <form action="altera_usuario_exe.php" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome_usuario']?>">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email_usuario']?>">
        </div>
        <div>
            <label for="fone">Telefone</label>
            <input type="text" name="fone" id="fone" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4-5}-[0-9]{4}" placeholder="Formato (18)99999-8888" value="<?php echo $row['fone_usuario']?>">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senha_usuario']?>">
        </div>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>