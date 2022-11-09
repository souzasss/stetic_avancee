<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];
    
    //comando sql.
    // Insira o comando SQL aqui.
    $comando = $pdo->prepare("DELETE FROM agendamento WHERE id_idcliente = :codigo;");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);
    
    //executa a consulta no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("location:informacoes_usuario.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>