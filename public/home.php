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

    // Verifica se o método de requisição é POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Recebe os dados do formulário
        $novoUsuario = $_POST["usuario"];
        $novaSenha = $_POST["senha"];

    // Insere os dados no banco
        $sql = "INSERT INTO users(username, password) VALUES ('$novoUsuario','$novaSenha')";

    // Verifica se a query foi executada com sucesso
        if($conn->query($sql) === TRUE){

    // Exibe um alerta de sucesso
            echo "<script> alert('Usuário Cadastrado com Sucesso!');</script>";

    // Redireciona para a mesma página para atualizar a tabela
            header("Location: home.php");
            exit();

    // Se a query não foi executada com sucesso, exibe um alerta de erro
        }else{
            echo "<script> alert('Erro: Usuário Não Cadastrado!');</script>";  
        }

    }

?>
<html lang="en">
<!-- O código HTML começa aqui -->
    <head>

    <!-- Titulo da pagina-->
        <title>Home</title>

    <!-- Link para o arquivo de estilos CSS -->
        <link rel="stylesheet" href="../styles/style.css">

    </head>
<body>

    <?php
    // Inclui o navbar
    include("components/navbar.php")
    ?>

    <!-- Exibe uma mensagem de boas-vindas ao usuário logado -->
    <h1>Bem vindo, <?php echo $_SESSION["usuario"]; ?> </h1>

    <!-- Link para a página de logout -->
    <a href="logout.php">Sair</a>

    <hr>
    <!-- Um titulo maior -->
    <h3>Cadastrar Novos Usuários</h3>

    <!-- Formulário para cadastrar novos usuários -->
    <form method="POST">

    <!-- Campos para o nome de usuário e senha -->
        <label>Usuario</label>
        <input type="text" name="usuario"> <br>
        <label>Senha</label>
        <input type="password" name="senha"> <br>
        <br>

    <!-- Botão para enviar o formulário -->
        <button type="submit">cadastrar</button>
    </form>

    <hr>

    <?php
    // Inclui a tabela de usuários
    include("components/table.php")
    ?>


</body>
</html>