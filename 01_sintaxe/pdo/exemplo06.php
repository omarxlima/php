<?php

//delete

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ? ");

$id = 2;

$stmt->execute(array($id));

// $conn->rollBack();
$conn->commit();

echo "Dado DELETADO com sucesso!";


