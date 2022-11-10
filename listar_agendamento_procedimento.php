<?php
    include("config.php");

    $id_agendamento = $_GET['id_agendamento'];

    $comando = $pdo->prepare("SELECT P.preco,P.nome_procedimento FROM agendamento AS A
    RIGHT JOIN procedimento AS P 
    ON A.fk_procedimento = P.id_procedimento
    WHERE A.id_agendamento = :agendamento;");

    $comando->bindValue(':agendamento', $id_agendamento);

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_procedimento_agendamento = $comando->fetchAll();
    }else{
        echo("Não há agendamento cadastrado.");
    }
?>