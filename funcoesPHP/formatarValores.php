<?php 
    function formataData($dataLancamento){
        return date("d/m/Y",strtotime($dataLancamento));
    }
    function formataBilheteria($bilheteria){
        return str_replace(array("$",","),array("R$ ","."),$bilheteria);
    }
    function formataVotos($votos){
        return str_replace(",",".",$votos);
    }
    function formataAtores($atores){
        return explode(",",$atores);
    }