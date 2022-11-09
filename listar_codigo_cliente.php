<?php
    include("config.php");


    $comando = $pdo->prepare("SELECT * FROM cliente");
   
   $comando->execute();

    //Verifica se existe pelo menos um registro na tabela.
    if($comando->rowCount() >= 1)
    {
        //o fetch() transforma o retorno em uma matriz (Use quando você para um registro ou mais, ou seja, uma ou múltiplas linhas da tabela).
        $lista_clientes = $comando->fetchAll();
    }else{
        echo("Não há usuários cadastrados.");
    }
?>