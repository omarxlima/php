<?php 
/***
 * classe = planta, da arquitetura
 *      - atributos = características
 *      - metodos = ações
 * 
 * objeto = casa
 * 
 */
// include 'Animal.php';
// include_once 'Cachorro.php';
include 'Gato.php';
include 'Cachorro.php';

try {
    $gato = new Gato("Mingau");
    echo $gato->dorme();
    echo $gato->come("ração wiskas");
    echo $gato->miar();

    $cachorro = new Cachorro("Snow");
    echo $cachorro->come("cookie");
    echo $cachorro->latir();

    echo $cachorro->nome;
    
} catch (Exception $e) {
    echo $e->getMessage();
}


 echo "<hr/>";

//  $cachorro = new Cachorro("Floki");
//  echo $cachorro->dorme();
//  echo $cachorro->come("carne");
