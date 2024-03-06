<?php

//do while executa ao menos uma vez

$total = 100;
$desconto = 0.9;

do {
    $total *= $desconto;
} while ($total > 100);

echo $total;


?>