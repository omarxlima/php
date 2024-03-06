<?php

//Formato JSON encode transforma array em json


$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Maria',
    'idade' => 30
));


echo json_encode($pessoas);