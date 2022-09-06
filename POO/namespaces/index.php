<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Ronaldinho Gaucho");
$cad->setEmail("ronaldinho99@gmail.com");
$cad->setSenha("123456");

// echo $cad;

$cad->registrarVenda();