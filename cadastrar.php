<?php
include ("config.php");
$nome=$_POST["nome"];
$email=$_POST["email"];
$senha=$_POST["senha"];

$res = $pdo->prepare("INSERT INTO cadastro(nome_completo, email, senha) VALUES(:nome,:email,:senha) ");

    $res->bindValue(":nome",$nome);
    $res->bindValue(":email",$email);
    $res->bindValue(":senha",$senha);
   
    $res->execute();
    
<<<<<<< HEAD
?>

<script>
   window.open("procedimento.html","_self");
</script>
   
=======
    // Comando para pegar o último código:
    $codigo = $pdo->lastInsertId();
    echo($codigo);
?>
>>>>>>> 81e8e22e81f507b3c517f120db142c26e750e533
