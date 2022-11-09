<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="agend_cliente.css">
    <title>Agendamento Clientes</title>
    
</head>
<body>
    <div class="back coluna alinhamento">
        <DIV class="branco alinhamento">
            <img src="logo.png" class="logo">
        </DIV>
        <br><br>
        <h1 id="titulo">Agendamento dos clientes:</h1>
        <div class="bloco coluna alinhamento">
              
        <table border="1">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Procedimento</th>
                    <th>Código agendamento</th>
                    <th>Código cliente</th>
                </tr>
            </thead>
            <tbody>
                <?php
    
                include("listar_agendamento.php");
                //verifica se a variável tem os valores da tabela.
                
                if (!empty($lista_agendamento)) {
                    //seleciona linha por linha.
                    foreach ($lista_agendamento as $linha) {?>
                        <tr>
                        <td> <?php echo $linha['data_data']; ?></td>
                        <td> <?php echo $linha['hora']; ?></td>
                        <td> <?php echo $linha['fk_procedimento']; ?></td>
                        <td> <?php echo $linha['id_agendamento']; ?></td>
                        <td> <?php echo $linha['id_idcliente']; ?></td>
                        </tr>
                        <td> <a href="editar.php?codigo=<?php echo $linha['id_idcliente']?>">
                                <input type="button" value="Editar">
                            </a>
                        </td>
                        <td> <a href="excluir_usuario.php?codigo= <?php echo $linha['id_idcliente'];?>">
                                <input type="button" value="Excluir">
                            </a>
                        </td>
                    </tr>
                    <?php }
                }
                ?>
            </tbody>
        </table>

        </div>
            
       
</body>
</html>