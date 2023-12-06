<?php 
    include_once("../APIs/API_starWarsFilme.php");
    include_once("../classes/StarWarsFilmes.php");
    include_once("../funcoesPHP/formatarData.php");
    // usa os métodos setters para armazenar valores específicos retornados da API
    $filme= new StarWarsFilmes();
    $filme->setLancamento(data($dadosStarWarsFilme->results[0]->release_date));