<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança";
}elseif ($qualASuaIdade < $idadeMaior) {
    echo "adolecente";
}elseif($qualASuaIdade < $idadeMelhor){
    echo "Adulto";
}else{
    echo "Idoso";
}

echo "<br>";
//operador ternário

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade": "Maior de Idade";