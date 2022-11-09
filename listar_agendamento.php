<?php
    include("config.php");

    //comando sql.
    session_start();

    if($_SESSION['nivel_adm'] == 1 ){
        $comando = $pdo->prepare("SELECT * FROM agendamento");

    } else{
        $comando = $pdo->prepare("SELECT * FROM agendamento WHERE id_idcliente = :id_cliente");
    }
    $comando->bindValue(':id_cliente', $_SESSION['id_cliente']);

    //executa a consulta no banco de dados.
   $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
   
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
    $lista_agendamento = $comando->fetchAll();
   
?>