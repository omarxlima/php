<?php

//[0]Joao
//[1]Maria
//[2]Jose
//[3]Joana

// $lista_nome = array();
// $lista_nome[] = "Joao";
// $lista_nome[] = "Maria";
// $lista_nome[] = "Jose";
// $lista_nome[] = "Joana";

// var_dump($lista_nome);

$lista_nome2 = ["João", "Maria", "José", "Joana"];

var_dump($lista_nome2);
echo "<hr>";
echo count($lista_nome2);
echo "<hr>";
echo $lista_nome2[3];
echo "<hr>";

$total_listaNome = count($lista_nome2); //4
for ($i = 0; $i < $total_listaNome; $i++) //variavel de controle; criterio de parada; incremento a cada iteração $i = $i + 1;
{
    echo "Olá,  " .$lista_nome2[$i] . "<br/>";
}
