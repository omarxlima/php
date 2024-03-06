<?php

//funçoes por valor e por referência

//funçao por referencia tem o & 


$pessoas = [
    'nome' => 'João',
    'idade' => 20
];

foreach ($pessoas as &$pessoa){

    if(gettype($pessoa)=== 'integer') $pessoa += 10;
    echo $pessoa ."<br>";
}

print_r($pessoas);

