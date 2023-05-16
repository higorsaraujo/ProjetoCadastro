<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM usuario";
        //mysqi_query => executa um comando no banco de dados
        $result = mysqli_query($con,$sql);
        // mysqli_fetch_array retorna apenas uma linha dos registros retornados
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Consulta de usuários</h1>
    <table width="500" align="center" border="1">
        <tr> 
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>
        <?php
            do{
                echo "<tr>";
                    echo "<td>".$row['id_usuario']."</td>";
                    echo "<td>".$row['nome_usuario']."</td>";
                    echo "<td>".$row['email_usuario']."</td>";
                    echo "<td>".$row['fone_usuario']."</td>";
                    echo "<td><a href='altera_usuario.php?id_usuario="
                            .$row['id_usuario']."'>Alterar</a></td>";
                    echo "<td><a href='deleta_usuario.php?id_usuario="
                    .$row['id_usuario']."'>Deletar</a></td>";
                echo "</th>";
            } while($row = mysqli_fetch_array($result))
            
        ?>

        <a href="index.php">Voltar</a>
    </table>
</body>
</html>