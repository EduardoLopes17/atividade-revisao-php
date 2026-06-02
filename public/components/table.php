
<!--Titulo da pagina-->
<h3>Usuários Cadastrados</h3>

<!--Tabela com os usuários cadastrados-->
<table border="1" cellpadding="3">

    <!--Cabeçalho da tabela-->
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>

    <?php
    
    // Consulta para selecionar todos os usuários cadastrados
    $sqlUsuarios = "SELECT * FROM users";
    $resultadoUsuarios = $conn->query($sqlUsuarios);
    
    // Loop para ver os resultados da consulta
    while($linha = $resultadoUsuarios->fetch_assoc()){

    // Exibe os dados de cada usuário em uma linha da tabela
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