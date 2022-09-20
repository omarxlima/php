<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
    echo "Error" . $conn->connet_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login , $pass); // statement => string string ss - 

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "joao";
$pass = "#$%56";

$stmt->execute();