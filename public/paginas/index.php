<?php 
    session_start();

    $path=$_SERVER["DOCUMENT_ROOT"].'/testes/StarWars/';
    $_SESSION["path"]=$path;
    $_SESSION["pathConBd"]=$path.'app/database/conexaoBd/conexao.php';
    $_SESSION["pathAcessos"]=$path.'app/helpers/funcoesPHP/gerenciarAcessos.php';
    $_SESSION["pathPaginacao"]=$path.'app/helpers/paginacao.php';
    $_SESSION["pathMenu"]=$path.'public/paginas/componentes/menu.php';

    include_once($_SESSION["pathPaginacao"]);
    include($conteudo);