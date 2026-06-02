<?php
    // variaveis e o nome delas
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    // Coneção com o  novo banco de dados
    $conn = new mysqli($host,$user,$pass,$db);

    // ele mostra se deu certo ou errado a conexão com o banco
    if ($conn->connect_error){
        echo "<script> console.log('erro na conexão com o banco') </script>";
    }else{
        echo "<script> console.log('conexão com o banco foi um sucesso')</script>";
    }

?>