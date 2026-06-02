<?php

    // Inicia a sessão
    session_start();

    // Se a sessão do usuário não estiver definida
    if(!isset($_SESSION["usuario"])){
    // ele envia o usuario para outra pagina
        header("Location: ../index.php");
        exit();
    }

    // Inclui a Coneção com o banco
    include("../infra/db/connect.php");

    //
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $novoUsuario = $_POST["usuario"];
        $novaSenha = $_POST["senha"];

        $sql = "INSERT INTO users(username, password) VALUES ('$novoUsuario','$novaSenha')";

        if($conn->query($sql) === TRUE){

            echo "<script> alert('Usuário Cadastrado com Sucesso!');</script>";

        }else{
            echo "<script> alert('Erro: Usuário Não Cadastrado!');</script>";  
        }

    }

?>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

    <?php
    include("components/navbar.php")
    ?>

    <h1>Bem vindo, <?php echo $_SESSION["usuario"]; ?> </h1>

    <a href="logout.php">Sair</a>

    <hr>
    <h3>Cadastrar Novos Usuários</h3>
    <form method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario"> <br>
        <label>Senha</label>
        <input type="password" name="senha"> <br>
        <br>
        <button type="submit">cadastrar</button>
    </form>

    <hr>

    <?php
    include("components/table.php")
    ?>


</body>
</html>