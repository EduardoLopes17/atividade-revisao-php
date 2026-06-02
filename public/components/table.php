<h3>Usuários Cadastrados</h3>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>

    <?php
    
    $sqlUsuarios = "SELECT * FROM users";
    $resultadoUsuarios = $conn->query($sqlUsuarios);
    
    while($linha = $resultadoUsuarios->fetch_assoc()){

        echo "
        <tr>
            <td>" . $linha["id"]."</td>
            <td>" . $linha["username"]."</td>
            <td>" . $linha["password"]."</td>
        </tr>
        ";

    }


    ?>

</table>