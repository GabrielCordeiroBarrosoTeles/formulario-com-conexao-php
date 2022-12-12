<!--
    Banco de dados seu pobre 




CREATE DATABASE av_carlos;
use  av_carlos;
CREATE TABLE professor(
id int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(40),
    email varchar(40),
    formacao varchar(40),
    cpf varchar(40),
    endereco varchar(40)
);



-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Nome:<input type="text" name="nome" id=""><br>
        E-MAIL:<input type="text" name="email" id=""><br>
        FORMAÇÃO:<input type="text" name="formação" id=""><br>
        CPF:<input type="text" name="cpf" id=""><br>
        ENDEREÇO:<input type="text" name="endereco" id=""><br>
        <input type="submit" value="CADASTRAR">
    </form>
    <?php
        include './conexao.php';
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $formaçao = $_POST['formacao'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $inserir = $con -> query
        ("INSERT INTO professor VALUES(0,'$nome', 
        '$email','$formaçao','$cpf','$endereco')");
        if($inserir){
          echo "Cadastro realizado com sucesso";
          echo "<script>ok() </script>";
        }else{
            echo "Cadastro não realizado";
            echo "<script>ok() </script>";
        }
    ?>
</body>
</html>
