<?php

//faça enquanto -- dados no banco de dados

//foreache para arrays e coleções

// while para qualquer assunto - enquanto for verdadeiro

$condicao = true;

while ($condicao) {

    $numero = rand(1, 10);

    if ($numero ===3) {
        echo "TRÊS!!!";
        $condicao = false;
    }

    echo $numero . " ";
}