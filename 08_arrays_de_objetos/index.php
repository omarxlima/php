<?php 

// i | value

//[0] Joao;
//[0] Maria;
//[0] José;
//[0] Joaquim;

include 'Gato.php';
include 'Cachorro.php';

// $arr_gatos = [
//     new Gato("Cinza"),
//     new Gato("Morfeu"),
//     new Gato("skywalker"),
//     new Gato("Neo"),
// ];

$arr_gatos[] = new Gato("Pacato");
$arr_gatos[] = new Gato("Mingau");
$arr_gatos[] = new Gato("Bruce");

$arr_gatos_size = count($arr_gatos);

for ($i=0; $i < $arr_gatos_size; $i++) { 
    // echo " O gato da posição $i é $arr_gatos[$i]->nome <br/>";
    echo  "O gato da posição ". $i ." é " . $arr_gatos[$i]->nome ."<br/>";
}
echo "</hr>";
//declaração arrays ficticios
$db_fake = array("floki", "pandora", "snow");
//array de objetos cachorro
$db_fake_size = count($db_fake);
$arr_cachorros = array();
//preenchendo o array de objetos cachorro
for ($i=0; $i < $db_fake_size ; $i++) { 
    $arr_cachorros[] = new Cachorro($db_fake[$i]);
}

// var_dump($arr_cachorros);
//mostrando o conteúdo do array de objetos cachorro.
$arr_cachorros_size = sizeof($arr_cachorros);
for ($i=0; $i < $arr_cachorros_size; $i++) { 
    // echo " O gato da posição $i é $arr_gatos[$i]->nome <br/>";
    echo  "O cachorro da posição ". $i ." é " . $arr_cachorros[$i]->nome ."<br/>";
}


