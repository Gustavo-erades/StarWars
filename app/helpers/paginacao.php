<?php
session_start();
switch ($_GET['cod']) {

    case '0':
        echo 0;
    break;

    case '1':
        echo 1;
    break;

    case '2':
        echo 2;
    break;

    case '3':
        echo 3;
    break;

    case '404':
        echo 404;
    break;

    case '7':
        echo 7;
    break;

    case '8':
        echo 7;
    break;
    default:
        echo 404;
    break;
    
}
?>