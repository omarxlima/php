<?php
session_start();
include 'DAO/MYSQL.php';

//página protegida
//verifica se o usuário está logado
if(!isset($_SESSION["usuario_logado"]))
    header("Location: login.php");
//logout
if(isset($_GET["sair"])) {
    unset($_SESSION["usuario_logado"]);
    header("Location: login.php");
}

try {

    $mysql = new MySQL();
    $stmt = $mysql->prepare("SELECT nome FROM usuarios WHERE id=:marcador_id");
    $stmt->execute(array('marcador_id' => $_SESSION['usuario_logado'])); //substitui o marcador pelo usuario logado

    $dados_do_usuario = $stmt->fetchObject(); //se a consulta retornar, organiza em objeto na variavel $dados_do_usuario
  
} catch (Exception $e) {

    echo $e->getMessage();
}


?>

<h3>Bem-vindo  <strong><?=strtoupper($dados_do_usuario->nome) ?></strong> a area restrita</h3>

<a href="index.php?sair=true">Sair</a>
<hr>
<a href="cadastrar_categoria.php">Cadastra Categoria</a>
<hr>
<a href="index_categoria.php">Listar Categoria</a>

