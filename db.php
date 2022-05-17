<?php

$dados = file_get_contents('./config.json');
$dadosArray = json_decode($dados, true);

$server = $dadosArray["server"];
$user = $dadosArray["user"];
$password = $dadosArray["password"];
$db = $dadosArray["database"];

$conexao = mysqli_connect($server, $user, $password, $db);

$query = 'SELECT * FROM usuarios';
$consulta_usuarios = mysqli_query($conexao, $query);
