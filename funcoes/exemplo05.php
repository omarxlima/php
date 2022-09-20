<?php

//funçoes por valor e por referência

//funçao por referencia tem o & 
$a= 10;

function trocaValor(&$a){
    $a += 50;
    return $a;

}

echo trocaValor($a);

echo "<br>";

echo $a;


