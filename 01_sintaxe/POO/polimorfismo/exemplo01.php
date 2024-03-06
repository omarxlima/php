<?php

//polimorfismo -- herança
//muitas formas -- 

abstract class animal {
    public function falar(){
        return "som";
    }
    public function mover(){
        return "anda";
    }

}

class Cachorro extends Animal{ //polimorfismo
    public function falar(){
        return "Late";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "canta";
    }

    public function mover(){
        return "Voa e ". parent::mover(); //chama mover da classe pai animal
    }
}

$dog = new Cachorro();
echo $dog->falar(). "<br>";
echo $dog->mover(). "<br>";

echo "<hr>";

$cat = new Gato();
echo $cat->falar(). "<br>";
echo $cat->mover(). "<br>";

echo "<hr>";

$ave = new Passaro();
echo $ave->falar(). "<br>";
echo $ave->mover(). "<br>";
