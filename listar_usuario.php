

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>

<body>
    <h3>Listar Usuários:</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Data</th>
                <th>Hora</th>
                <th>Procedimento</th>
                <th>Id cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("listar.php");
            //verifica se a variável tem os valores da tabela.
            if (!empty($resultado)) {
                //seleciona linha por linha.
                foreach ($resultado as $linha) {?>
                    <tr>
                    <td> <?php echo $linha['data_agend']; ?></td>
                    <td> <?php echo $linha['hora']; ?></td>
                    <td> <?php echo $linha['fk_procedimento']; ?></td>
                    <td> <?php echo $linha['id_idcliente']; ?></td>
                    </tr>
                <?php }
            }
            ?>
        </tbody>
    </table>
</body>

</html>