<?php 
      // consome a API omdapi
      $urlFilme="http://www.omdbapi.com/?i=tt3896198&apikey=23877d14";
      $dadosFilme=json_decode(file_get_contents($urlFilme));
      // usa os métodos setters para armazenar valores específicos retornados da API
