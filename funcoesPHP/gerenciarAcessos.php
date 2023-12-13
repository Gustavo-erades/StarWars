<?php 
    include_once("./conexaoBd/conexao.php");
    if(!isset($_SESSION["acesso_registrado"])){
        $ip=$_SERVER['REMOTE_ADDR'];
        $navegador=$_SERVER['HTTP_USER_AGENT'];
        $sql="INSERT INTO acessos(ip,navegador,diaHora) VALUES('$ip','$navegador',NOW());";
        mysqli_query($conexao,$sql);
        $_SESSION["acesso_registrado"]=true;   
    }
    $sqlConsulta="SELECT * FROM acessos;";
    $quantidade=mysqli_num_rows($conexao->query($sqlConsulta));