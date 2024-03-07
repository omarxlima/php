<?php

$lista_nome = ["João", "Maria", "José", "Joana"];

reset($lista_nome);

$lista_nome = array_reverse($lista_nome);

while (key($lista_nome) !== null) {
    echo "Olá, " . current($lista_nome) . "<br/>";
    next($lista_nome);
}

echo "<hr/>";

foreach ($lista_nome as  $nome)
{
    echo "Olá, ". $nome . "<br/>";
}