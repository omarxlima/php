<?php
session_start();

include 'DAO/MYSQL.php';

try {

    $mysql = new MySQL();
    $sql = "SELECT id, nome
             FROM usuarios
             WHERE usuario=? AND senha=?";
    $stmt = $mysql->prepare($sql);
    $stmt->bindValue(1, $_POST["user"]);
    $stmt->bindValue(2, sha1($_POST["pass"]));
    $stmt->execute();

    $dados_do_usuario = $stmt->fetchObject(); //se a consulta retornar, organiza em objeto na variavel $dados_do_usuario
    if ($dados_do_usuario) {
        $_SESSION["usuario_logado"] = $dados_do_usuario->id;
        header("Location: index.php");
    } else {
        header("Location: login.php?falhou=true");
    }
} catch (Exception $e) {

    echo $e->getMessage();
}
