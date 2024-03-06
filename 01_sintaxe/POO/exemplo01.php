<?php




class Pessoa {
    public $nome; //Atributo

    public function falar(){ //método

        return "O meu nome é". $this->nome; 
    }
}

$joao = new Pessoa();
$joao->nome = " Joao Pedro";
echo $joao->falar();