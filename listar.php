<?php
    include("config.php");

    //comando sql.
    $comando = $pdo->prepare("SELECT data_data, hora, fk_procedimento, id_agendamento, id_idcliente FROM agendamento;");
    //executa a consulta no banco de dados.
   $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $resultado = $comando->fetchAll();
    }else{
        echo("Não há usuários cadastrados.");
    }
?>