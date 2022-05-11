<?php

include './db.php';

include './header.php';

if (isset($_GET['pagina'])) {

    $pagina = $_GET['pagina'];
} else {

    $pagina = 'home';
}

switch ($pagina) {


    case 'home':
        include './views/home.php';
        break;
    case 'usuarios':
        include './views/usuarios.php';
        break;
    case 'inserir_usuario':
        include './views/inserir_usuario.php';
        break;
    default:
        include './views/home.php';
}


include './footer.php';
