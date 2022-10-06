<?php
    include("config.php");

        $email = $_POST["email"];
        $senha = $_POST["senha"];
       
        $comando = $pdo- > prepare("SELECT id_cliente,senha From cliente where email = :email");

        $comando- >bindValue(":email",$email);

        $comando- >execute();

        if($comando->rowCount()== 1){
            $resultado = $comando->fetch();
            if ($resultado['senha']== MD5($senha)){
                    header("location:procedimento.html");
            }else{
                echo("Email ou senha inválidos");
            }
        }else{
            echo("Email ou senha Inválido");
        }
?>