<p>Contatos</p>

<a href="?pagina=inserir_usuario">Inserir novo contato</a><br><br>

<input type="text" id="entradaSearch" onkeyup="search()" placeholder="Procurar por CPFs" title="Digite o CPF"><br><br>

<table id="tabela" style="border:1px solid black;">

    <tr class="header">

        <th>Nome</th>
        <th>Sobrenome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>E-mail2</th>
        <th>Telefone</th>
        <th>Telefone2</th>
        <th colspan="2">Ações</th>

    </tr>


    <?php

    while ($linha =  mysqli_fetch_array($consulta_usuarios)) {

        echo "<tr><td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['sobrenome'] . "</td>";
        echo "<td>" . $linha['cpf'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "<td>" . $linha['email2'] . "</td>";
        echo "<td>" . $linha['telefone'] . "</td>";
        echo "<td>" . $linha['telefone2'] . "</td>";
    ?>

        <td><a href="?pagina=inserir_usuario&editar=<?php echo $linha['id_usuario']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"> Editar</i></a></td>
        <td><a href="deleta_usuario.php?id_usuario=<?php echo $linha['id_usuario']; ?>" class="excluirContato"><i class="fa fa-trash" title="Excluir registro" aria-hidden="true"></i></a></td>

    <?php } ?>
</table>