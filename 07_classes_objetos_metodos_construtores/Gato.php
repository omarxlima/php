<?php 

include_once 'Animal.php';

class Gato extends Animal 
{
    public function miar()
    {
        return $this->nome. " Está miando";
    }
}