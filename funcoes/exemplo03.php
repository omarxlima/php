<?php

//parametros ou argumentos


function ola($texto = 'mundo', $periodo = 'Bom dia'){
    return "Olá $texto! $periodo <br>";
}

echo ola();
echo ola("", 'Boa tarde');
echo ola('Lima', 'Boa Noite');
echo ola('Maria', "");



