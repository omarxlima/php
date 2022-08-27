<?php

// include "inc/exemplo01.php";

require_once "inc/exemplo01.php";

$resultado = somar(10,25);

echo $resultado;


/* 

REQUIRE -> obriga que o arquivo exista e funcionando corretamente.

INCLUDE -> tenta funcionar mesmo que o arquivo não exista ou não esteja funcionando corretamente e tem mais recursos.

acesso ao include patch


evitar um laço

require_once e include_once


*/