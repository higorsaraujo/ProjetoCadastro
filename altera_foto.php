<?php 
    include('conexao.php');
    $id_usuario = $_GET ['id_usuario'];
    $sql = "SELECT foto FROM usuario WHERE id_usuario=$id_usuario";
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
    <h1>FOTO ATUAL</h1>
    <?php echo $row['foto']?>
    <form action="altera_foto_exe.php" method="post">
        <div>
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto">
        </div>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>