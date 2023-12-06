<?php 
    function data($dataLancamento){
        return date("d/m/Y",strtotime($dataLancamento));
    }