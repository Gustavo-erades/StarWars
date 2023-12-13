<?php 
    include_once("../conexaoBd/conexao.php");
    if(!isset($_SESSION["acesso_registrado"])){
        $ipUser=$_SERVER['REMOTE_ADDR'];
        $navegadorUser=$_SERVER['HTTP_USER_AGENT'];
        $sql="INSERT INTO acessos(ip, navegador, diaHora) VALUES('$ipUser','$navegadorUser',NOW());";
        $conexao->query($sql) or die($conexao->error);
    }
    $_SESSION["acesso_registrado"]=true;
