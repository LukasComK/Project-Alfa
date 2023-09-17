<?php

include('config.php');



    $sql_code2 = "SELECT * FROM produtos";
    $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);


    while ($rows = mysqli_fetch_array($sql_query_r)) {
    ?>
         <table cellpadding="8" cellspacing="1" style="width:100%; border: 1px solid #21abcd; background-color:white">
            <tr>
                <td style="width:5%"><label style="color: red;">ID:</label><?php echo $rows['id']; ?></td>
                <td style="width:15%"><label style="color: red;">Nome:</label><?php echo $rows['NomeProduto']; ?></td>
                <td style="width:10%"><img style="width: 50px;border-radius: 50%;" src="<?php echo $rows['path_arquivo']; ?>"></td>
                <td style="width:10%"><label style="color: red;">Descrição:</label><?php echo $rows['DescricaoProduto']; ?></td>
                <td style="width:10%"><label style="color: red;">Valor:</label><?php echo $rows['ValorProduto']; ?></td>
                <td style="width:10%"><label style="color: red;">Quantidade:</label><?php echo $rows['QuantidadeProduto']; ?></td>
>
            </tr>
        </table>

    <?php
    } ?>