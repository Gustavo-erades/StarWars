<?php
    // consome a API swapi
    $urlStarWars="https://swapi.dev/api/films/";
    $dadosStarWarsFilme=json_decode(file_get_contents($urlStarWars));
    
