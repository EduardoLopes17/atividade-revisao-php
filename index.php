<?php

// iniciar sessão no servidor
session_start();

//incluir conexão com o banco
include("infra/db/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    echo "<script> console.log('usuario captado com sucesso $usuario') </script>";
    echo "<script> console.log('senha captado com sucesso $senha') </script>";

    $sql = "SELECT * FROM users WHERE username ='$usuario' AND password ='$senha'";

    $resultado = $conn -> query($sql);

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
    <title>Tela de Login</title>
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    <?php
    include("public/components/navbar.php")
    ?>
    <h1>Tela de Login - PHP</h1>
    <form method="POST">

        <label>Usuario</label>
        <input type="text" name="usuario"> <br>
        <label>Senha</label>
        <input type="password" name="senha"> <br>
        <?php
        
        if(isset($erro)){
            echo $erro;
        }
        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>