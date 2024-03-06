<?php

$nome1 = "Marx";

$sobreNome = "Maciel";

$nomeCompleto = $nome1 ." ". $sobreNome;

echo $nomeCompleto; 
exit;

echo $nome1;

echo "</br>";

unset($nome1);

if(isset($nome1)){
    echo $nome1;
}
