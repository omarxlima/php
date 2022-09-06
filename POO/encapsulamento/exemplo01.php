<?php

//

class Pessoa{
    public $nome = "Rasmus lerdof"; //todo mundo ver
    protected $idade = 48; //
    private $senha = "123456"; //nem os herdeiros conseguem utilizar dentro da classe;

    public function verDados(){ //metodo na mesma classe
        echo $this->nome. "<br>";
        echo $this->idade. "<br>";
        echo $this->senha. "<br>";

    }
}

$objeto = new Pessoa();

// echo $objeto->idade."<br>";

$objeto->verDados();