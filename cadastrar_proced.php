<?php
include ("config.php");
$nome_procedimento = $_POST["nome_procedimento"];
$preco = $_POST["preco"];

$comando = $pdo->prepare("INSERT INTO procedimento (nome_procedimento, preco) VALUES(:n,:p) ");

    $comando->bindValue(":n",$nome_procedimento);
    $comando->bindValue(":p",$preco);
   
    $comando->execute();
    header("Location:procedimento.html");
?>