<?php

//posição da string strposition

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

var_dump($texto);


$texto2 = substr($frase, $q + strlen($palavra), strlen($frase) ); //começa na palavra e vai até o final da frase

echo "<br>";

var_dump($texto2);

