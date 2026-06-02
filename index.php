<?php

// iniciar sessão no servidor
session_start();

//incluir conexão com o banco
include("infra/db/connect.php");

// se o servidor
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Criação das Variaveis e envia dados para o banco
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // aparece a mensagem se o login deu certo ou não com o banco
    echo "<script> console.log('usuario captado com sucesso $usuario') </script>";
    echo "<script> console.log('senha captado com sucesso $senha') </script>";

    // Chamou o banco, Pegou a tabela users e username, e depois guardou o nome do usuario e a senha dele
    $sql = "SELECT * FROM users WHERE username ='$usuario' AND password ='$senha'";

    //guarda a matriz dentro do banco de dados
    $resultado = $conn -> query($sql);

    //Se Usuario estiver certo ele vai para tela de Home,senão o Usuario ou a senha estiver errado aparece "Usuário ou senha inválidos"
    if($resultado->num_rows > 0){
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Titulo da Aba -->
    <title>Tela de Login</title>
    <!-- Link com o css a estilização do site -->
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <?php

    //inclui a pasta do navbar, que vai ser igual a todas nav bar
    include("public/components/navbar.php")

    ?>

    <!-- Titulo Normal -->
    <h1>Tela de Login - PHP</h1>

    <!-- Criação de um formulario-->
    <form method="POST">

    <!--label, e um rótulo  -->
        <label>Usuario</label>

    <!--Input dependo doque voçê vai escrever na Caixa se for numero coloca number e texto text  --> 
        <input type="text" name="usuario"> <br>

    <!--label, e um rótulo  -->
        <label>Senha</label>

    <!--Input dependo doque voçê vai escrever na Caixa se for numero coloca number e texto text  -->
        <input type="password" name="senha"> <br>

        <?php
        
    // exebição de algum erro possivel
        if(isset($erro)){

    // aparece na tela qe deu erro
            echo $erro;
        }
        
        ?>

        <br>
    <!-- um botão para entrar  -->
        <button type="submit">Entrar</button>
    </form>
</body>
</html>