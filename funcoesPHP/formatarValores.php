<?php 
    function formataData($dataLancamento){
        return date("d/m/Y",strtotime($dataLancamento));
    }
    function formataBilheteria($bilheteria){
        return str_replace(array("$",","),array("R$","."),$bilheteria);
    }