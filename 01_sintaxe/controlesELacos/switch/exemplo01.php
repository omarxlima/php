<?php

$diaDaSemana = date("w");

// echo $diaDaSemana; exit;

switch ($diaDaSemana) {
    case '0':
        echo "Domingo";
        break;
    case '1':
        echo "segunda-feira";
    break;
    case '2':
        echo "terça-feira";
    break;
    case '3':
        echo "quarta-feira";
    break;
    case '4':
        echo "quinta-feira";
    break;
    case '5':
        echo "sexta-feira";
    break;
    case '6':
        echo "sábado";
    break;
    
    default:
        echo "data inválida";
        break;
}