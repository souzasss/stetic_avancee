<?php
    include("config.php");

    $comando = $pdo->prepare("SELECT fk_procedimento, data_data, hora FROM agendamento");

    $comando->execute();

    if($comando->rowCount() >= 1)
    {
        $lista_procedimento_agendamento = $comando->fetchAll();
    }else{
        echo("Não há agendamento cadastrado.");
    }
?>