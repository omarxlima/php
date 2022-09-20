<?php

//funçoes anonimas | nao tem nome | nao tem return

function test($callback){
  //processo lento
  $callback();
}

  


    test(function(){
        echo "Terminou!";
    });


