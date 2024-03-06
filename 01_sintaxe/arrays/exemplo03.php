<?php

//array bidimencional


$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Maria',
    'idade' => 30
));


// print_r($pessoas);

print_r($pessoas[0]['nome']);