<?php
include ("config.php");
$data_data = $_POST["data_data"];
$hora = $_POST["hora"];
$procedimento = $_POST["fk_procedimento"];
$cliente = $_POST["id_idcliente"]; //verificar inputs, verificar seção

$comando = $pdo->prepare("INSERT INTO agendamento   (data_data, hora, fk_procedimento, id_idcliente) VALUES(:data_data,:hora,:fk_procedimento, :id_idcliente) ");

    $comando->bindValue(":data_data",$data_data);
    $comando->bindValue(":hora",$hora);
    $comando->bindValue(":fk_procedimento",$procedimento);
    $comando->bindValue(":id_idcliente",$cliente);
   
    $comando->execute();
    header("location:pagamento.html");
?>