<?php
switch ($_GET['cod']) {

    case '0':
       $conteudo=$_SESSION["path"].'public/paginas/home.php';
    break;

    case '1':
        $conteudo=$_SESSION["path"].'public/paginas/creditos.php';
    break;

    case '2':
        $conteudo=$_SESSION["path"].'public/paginas/sobre.php';
    break;

    case 'ep1':
        $conteudo=$_SESSION["path"].'public/paginas/episodio1.php';
    break;

    case 'ep2':
        $conteudo=$_SESSION["path"].'public/paginas/episodio2.php';
    break;

    case 'ep3':
        $conteudo=$_SESSION["path"].'public/paginas/episodio3.php';
    break;

    case '404':
        $conteudo=$_SESSION["path"].'public/erro404.html';
    break;

    default:
        $conteudo=$_SESSION["path"].'public/paginas/home.php';
    break;
    
}
?>