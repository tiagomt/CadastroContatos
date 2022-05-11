<?php

include './db.php';

$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];

$query = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', email = '$email', email2 = '$email2', telefone = '$telefone', telefone2 = '$telefone2'
          WHERE id_usuario=$id_usuario";

mysqli_query($conexao, $query);


header('location:index.php?pagina=usuarios');
