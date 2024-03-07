<?php 

include_once 'Animal.php';

class Cachorro extends Animal 
{
    public function latir()
    {
        return $this->nome. "Está latindo";
    }

}