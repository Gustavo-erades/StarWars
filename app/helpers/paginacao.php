<?php

switch ($_GET['cod']) {

    case '0':
        $conteudo = "index.php";
    break;

    case '1':
        $conteudo = "./episodios/episodio1.php";
    break;

    case '2':
        $conteudo = "./episodio2.php";
    break;

    case '3':
        $conteudo = "./episodio3.php";
    break;

    case '404':
        $conteudo = "erro404.html";
    break;

    case '7':
        $conteudo = "./paginas/creditos.php";
    break;

    case '8':
        $conteudo = "./paginas/sobre.php";
    break;
    default:
        $conteudo = "index.php";
    break;
    
}
header("Location:$conteudo");
?>