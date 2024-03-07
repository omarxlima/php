<?php 
//abstract não pode ter uma instancia, não sabe lhe dar com uma classe abstrata
abstract class Animal {
    //private - somente na classe
    public $nome;
    public $cor;
    public $raca;

    public function __construct($_nome)
    {
        $this->nome = $_nome;
    }

    public function dorme() {
        return $this->nome. " está dormindo" . "<br/>";
    }
    public function come($comida) //parametro 
     {
        return $this->nome. " está comendo " .$comida . "<br/>";
    }
}