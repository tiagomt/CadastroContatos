<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db = 'data';

$conexao = mysqli_connect($server, $user, $password, $db);

$query = 'SELECT * FROM usuarios';
$consulta_usuarios = mysqli_query($conexao, $query);
