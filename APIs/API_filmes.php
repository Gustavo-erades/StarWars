<?php 
      // consome a API omdapi
      function consumirAPI($num_episodio){
            $urlFilme="http://www.omdbapi.com/?t=star+wars+episode+$num_episodio&apikey=23877d14";
            $dadosFilme=json_decode(file_get_contents($urlFilme));
            return $dadosFilme;
      }
      
