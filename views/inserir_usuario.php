<?php
if (!isset($_GET['editar'])) {

?>

    <h1>Inserir usuario</h1>

    <form action="./processa_usuario.php" method="post">

        <label for="nome">Nome: </label>
        <br>
        <input type="text" maxlength="255" name="nome" class="nome" id="">
        <br>

        <label for="sobrenome">Sobrenome: </label><br>
        <input type="text" maxlength="255" name="sobrenome" class="sobrenome" id="">
        <br>

        <label for="cpf">CPF: </label>
        <br>
        <input type="text" maxlength="14" name="cpf" class="cpf">
        <br>

        <label for="email">E-mail: </label>
        <br>
        <input type="text" maxlength="255" name="email" class="email" id=""> <span class="fecha + email">+</span><br>

        <div class="divEmail2">
            <label for="email2">E-mail2: </label>
            <br>
            <input type="text" maxlength="255" name="email2" class="email2" id="">
        </div>

        <label for="telefone">Telefone: </label>
        <br>
        <input type="text" maxlength="14" name="telefone" class="telefone" id=""> <span class="fecha + telefone">+</span> <br>

        <div class="divTelefone2">
            <label for="telefone2">Telefone2: </label><br>
            <input type="text" maxlength="14" name="telefone2" class="telefone2" id="">
        </div>

        <input type="submit" class="enviar">

    </form>

    <?php

} else {


    while ($linha = mysqli_fetch_array($consulta_usuarios)) {

        if ($linha['id_usuario'] == $_GET['editar']) { ?>

            <h1>Editar usuario</h1>

            <form action="./edita_usuario.php" method="post">

                <input type="hidden" name="id_usuario" value="<?php echo $linha['id_usuario'] ?>">

                <label for="nome">Nome: </label>
                <br>
                <input type="text" maxlength="255" name="nome" class="nome" value="<?php echo $linha['nome'] ?>" id=""><br>

                <label for="sobrenome">Sobrenome: </label>
                <br>
                <input type="text" maxlength="255" name="sobrenome" class="sobrenome" value="<?php echo $linha['sobrenome'] ?>" id=""><br>

                <label for="cpf">CPF: </label>
                <br>
                <input type="text" maxlength=" 14" name="cpf" class="cpf" value="<?php echo $linha['cpf'] ?>" id=""><br>

                <label for="email">E-mail: </label>
                <br>
                <input type="text" maxlength="255" name="email" class="email" value="<?php echo $linha['email'] ?>" id=""><br>


                <label for="email2">E-mail2: </label>
                <br>
                <input type="text" maxlength="255" name="email2" class="email2" value="<?php echo $linha['email2'] ?>" id="">
                <br>

                <label for="telefone">Telefone: </label>
                <br>
                <input type="text" maxlength="14" name="telefone" class="telefone" value="<?php echo $linha['telefone'] ?>" id=""><br>

                <label for="telefone2">Telefone2: </label><br>
                <input type="text" maxlength="14" name="telefone2" class="telefone2" value="<?php echo $linha['telefone2'] ?>" id=""><br>


                <input type="submit" value="Editar" class="enviar">


            </form>

<?php }
    }
}
?>