<?php
include ("config.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$comando = $pdo->prepare("INSERT INTO cadastro(nome, email, senha) VALUES(:nome,:email,:senha) ");

    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":email",$email);
    $comando->bindValue(":senha",$senha);
   
    $comando->execute();
    echo ("dados gravados");
?>