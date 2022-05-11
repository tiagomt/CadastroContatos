<?php

include "db.php";

$id_usuario = $_GET["id_usuario"];

$query = "DELETE FROM usuarios WHERE id_usuario=$id_usuario";

mysqli_query($conexao, $query);


header('location:index.php?pagina=usuarios#tabela');
