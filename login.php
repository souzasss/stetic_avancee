<?php
    include("config.php");

        $email = $_POST["email"];
        $senha = $_POST["senha"];
       
        $comando = $pdo -> prepare("SELECT * FROM cliente WHERE email = :email");

        $comando ->bindValue(":email",$email);

        $comando ->execute();

        if($comando->rowCount()== 1){
            $resultado = $comando->fetch();
  
            if ($resultado['senha']== $senha){
                    session_start();
                    $_SESSION['id_cliente'] = $resultado['id_cliente'];
                    $_SESSION['nivel_adm'] = $resultado['nivel_adm'];
                    $_SESSION['loggedin'] = true;
                    header("location:procedimento.html");
            }else{
                echo("Senha inválida");
            }
        }else{
            echo("Email Inválido");
        }
?>