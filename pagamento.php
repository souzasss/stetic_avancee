<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="agend_cliente.css">
    <title>Pagamento</title>
    
</head>
<style>
input[type=text]
{
    border-radius: 15px;
    padding: 15px;
    width: 871px;
    border-style: none;
    margin-top: auto;
    margin-bottom: auto;
    background-color: #E9E9E9;
    height: 40px;
}
.inputs
{
    display: flex;
    flex-direction:column;
    align-items: center;
    align-content: center;
    justify-content: space-between;
    justify-items: center;
}
.frase
{
    display: flex;
    flex-direction:column;
    align-items: center;
    align-content: center;
    justify-content: space-between;
    justify-items: center;
    font-size: 35px;
    margin-top: -3px;
}
#pagamento
{
    border-radius: 15px;
    border-style: none;
    width: 300px;
    font-size: 20px;
    margin-left: 369px;
    margin-top: 36px;
    background-color: #EDEDED;
    color: #B87648;
    height: 52px;
}

#id_agendamento
{
    border-radius: 15px;
    padding: 15px;
    width: 900px;
    border-style: none;
    margin-top: 20px;
    margin-bottom: auto;
    background-color: #E9E9E9;
    height: 62px;
}
</style>
<body>
    <div class="back coluna alinhamento">
        <DIV class="branco alinhamento">
            <img src="logo.png" class="logo">
        </DIV>
        <br><br>
        <h1 id="titulo">Pagamento:</h1>
        <div class="bloco coluna alinhamento">
            <div class="inputs">

                <select id="id_agendamento" name="id_agendamento" onchange="Recarregar();">
                    <?php
    
                        include("listar_agendamento.php");
                        foreach ($lista_agendamento as $linha) {
                            $id_agendamento=$linha["id_agendamento"];
                            echo("<option>$id_agendamento</option>");
                        }

                    ?>
                </select>

<br><br>

            <form action="resumoped.php" method="POST"></form>
           <input type="text" name="resumo" placeholder="Resumo do pedido"> 
        </form>
            <br><br>
            <input type="text" name="total" placeholder="Total">
            <br><br>
        </div>
            <div class="frase"> Formas de pagamento:</div>
            <a href="cred_deb.html">  <button id="pagamento" >Débito/Crédito</button> </a> 

        </div>
            
  <script>
    function Recarregar()
    {
        window.open("pagamento.php?id_agendamento="+id_agendamento)
    }


  </script>     
</body>
</html>