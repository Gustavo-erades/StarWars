<?php 
    // inclui os arquivos para trabalhar com a API, mexer com classes e converter a data
    include_once("../APIs/API_filmes.php");
    include_once("../classes/Filmes.php");
    include_once("../funcoesPHP/formatarValores.php");
    // usa os métodos setters para armazenar valores específicos retornados da API
    $filme= new Filmes();
    $dados=consumirAPI("IV");
    $filme->setDataLancamento(formataData($dados->Released));
    $filme->setNotaIMDB($dados->Ratings[0]->Value);
    $filme->setIdIMDB($dados->imdbID);
    $filme->setQtVotosIMDB(formataVotos($dados->imdbVotes));
    $filme->setNotaRotenTomatoes($dados->Ratings[1]->Value);
    $filme->setnotaMetaCritica($dados->Ratings[2]->Value);
    $filme->setDiretor($dados->Director);
    $filme->setAtores($dados->Actors);
    $filme->setRoterista($dados->Writer);
    $filme->setDuracao($dados->Runtime);
    $filme->setBilheteria(formataBilheteria($dados->BoxOffice));
    $filme->setUrlImagem($dados->Poster);