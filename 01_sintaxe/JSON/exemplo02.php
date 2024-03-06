<?php

//Formato JSON decode tranforma json em array


$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Maria","idade":30}]';

$data = json_decode($json, true); //true para n transformar em objeto

var_dump($data);