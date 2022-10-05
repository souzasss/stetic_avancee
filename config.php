<?php
  
    date_default_timezone_set('America/Sao_Paulo');
    
    try{
        $pdo = new PDO("mysql:dbname=stetic_avancee1;host=localhost;charset=utf8","root","");
    }
    catch(PDOException $erro)
    {
        echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
    }
?>