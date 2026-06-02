<?php

    // inicio de uma sessão
    session_start();

    //Caso o usuario saia da sessão ela destroy
    session_destroy();
     
    //Envia o usuário para outra pagina
    header("Location: ../index.php");
    exit();

?>