<?php

include 'db.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$telefone = $_POST['telefone'];
$telefone2 = $_POST['telefone2'];

$query = "INSERT INTO usuarios(nome, sobrenome, cpf, email, email2, telefone, telefone2)
          VALUES('$nome','$sobrenome','$cpf','$email','$email2', '$telefone', '$telefone2')";

mysqli_query($conexao, $query);


header('location:index.php?pagina=usuarios');
