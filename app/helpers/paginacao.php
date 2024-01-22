<?php
session_start();
switch ($_GET['cod']) {

    case '0':
        $conteudo = $_SESSION("path").'public/index.php';
    break;

    case '1':
        $conteudo = $_SESSION("path").'paginas/episodio1.php';
    break;

    case '2':
        $conteudo = $_SESSION("path").'paginas/episodio2.php';
    break;

    case '3':
        $conteudo = $_SESSION("path").'paginas/episodio3.php';
    break;

    case '404':
        $conteudo = $_SESSION("path").'erro404.html';
    break;

    case '7':
        $conteudo = $_SESSION("path").'./paginas/creditos.php';
    break;

    case '8':
        $conteudo = $_SESSION("path").'./paginas/sobre.php';
    break;
    default:
        $conteudo = $_SESSION("path").'index.php';
    break;
    
}
header("Location:$conteudo");
?>