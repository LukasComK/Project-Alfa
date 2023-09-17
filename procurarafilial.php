<?php

include_once("config.php");

?>
<html>

<head> </head>

<body>



    <?php

    if (!empty($_POST['procurarafilialnome'])) {
        $procurarafilialnome = filter_input(INPUT_POST, 'procurarafilialnome', FILTER_SANITIZE_STRING);

        $sql_code2 = "SELECT * FROM FormRegisterAfilial WHERE NomeFantasia = '$procurarafilialnome'";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        while ($rows = mysqli_fetch_array($sql_query_r)) {
    ?>
            <table cellpadding="9" cellspacing="1" style="width:100%; border: 1px solid #21abcd; background-color:white">
            <tr>
                <td style="width:5%"><label style="color: red;">ID:</label><?php echo $rows['id_afiliado']; ?></td>
                <td style="width:10%"><label style="color: red;">Nome:</label><?php echo $rows['NomeFantasia']; ?></td>
                <td style="width:10%"><label style="color: red;">Representante:</label><?php echo $rows['Representante']; ?></td>
                <td style="width:10%"><img style="width: 50px;border-radius: 50%;" src="<?php echo $rows['path_arquivo']; ?>"></td>
                <td style="width:10%"><label style="color: red;">Razão Social:</label><?php echo $rows['RazaoSocial']; ?></td>
                <td style="width:10%"><label style="color: red;">Contato:</label><?php echo $rows['NumeroContatoAfiliado']; ?></td>
                <td style="width:10%"><label style="color: red;">CNPJ:</label><?php echo $rows['CNPJ']; ?></td>
                <td style="width:15%"><label style="color: red;">Email:</label><?php echo $rows['EmailAfiliado']; ?></td>
                <td style="width:15%"><label style="color: red;">Senha:</label><?php echo $rows['SenhaAfiliado']; ?></td>
            </tr>
        </table>

        <?php
        }
    } elseif (!empty($_POST['procurarafilialcnpj'])) {
        $procurarafilialcnpj = filter_input(INPUT_POST, 'procurarafilialcnpj', FILTER_SANITIZE_STRING);

        $sql_code2 = "SELECT * FROM FormRegisterAfilial WHERE CNPJ = '$procurarafilialcnpj'";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        while ($rows = mysqli_fetch_array($sql_query_r)) {
        ?>
            <table cellpadding="9" cellspacing="1" style="width:100%; border: 1px solid #21abcd; background-color:white">
            <tr>
                <td style="width:5%"><label style="color: red;">ID:</label><?php echo $rows['id_afiliado']; ?></td>
                <td style="width:10%"><label style="color: red;">Nome:</label><?php echo $rows['NomeFantasia']; ?></td>
                <td style="width:10%"><label style="color: red;">Representante:</label><?php echo $rows['Representante']; ?></td>
                <td style="width:10%"><img style="width: 50px;border-radius: 50%;" src="<?php echo $rows['path_arquivo']; ?>"></td>
                <td style="width:10%"><label style="color: red;">Razão Social:</label><?php echo $rows['RazaoSocial']; ?></td>
                <td style="width:10%"><label style="color: red;">Contato:</label><?php echo $rows['NumeroContatoAfiliado']; ?></td>
                <td style="width:10%"><label style="color: red;">CNPJ:</label><?php echo $rows['CNPJ']; ?></td>
                <td style="width:15%"><label style="color: red;">Email:</label><?php echo $rows['EmailAfiliado']; ?></td>
                <td style="width:15%"><label style="color: red;">Senha:</label><?php echo $rows['SenhaAfiliado']; ?></td>
            </tr>
        </table>

        <?php
        }
    } elseif (!empty($_POST['procurarrepresentante'])) {
        $procurarrepresentante = filter_input(INPUT_POST, 'procurarrepresentante', FILTER_SANITIZE_STRING);

        $sql_code2 = "SELECT * FROM FormRegisterAfilial WHERE Representante = '$procurarrepresentante'";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        while ($rows = mysqli_fetch_array($sql_query_r)) {
        ?>
            <table cellpadding="9" cellspacing="1" style="width:100%; border: 1px solid #21abcd; background-color:white">
            <tr>
                <td style="width:5%"><label style="color: red;">ID:</label><?php echo $rows['id_afiliado']; ?></td>
                <td style="width:10%"><label style="color: red;">Nome:</label><?php echo $rows['NomeFantasia']; ?></td>
                <td style="width:10%"><label style="color: red;">Representante:</label><?php echo $rows['Representante']; ?></td>
                <td style="width:10%"><img style="width: 50px;border-radius: 50%;" src="<?php echo $rows['path_arquivo']; ?>"></td>
                <td style="width:10%"><label style="color: red;">Razão Social:</label><?php echo $rows['RazaoSocial']; ?></td>
                <td style="width:10%"><label style="color: red;">Contato:</label><?php echo $rows['NumeroContatoAfiliado']; ?></td>
                <td style="width:10%"><label style="color: red;">CNPJ:</label><?php echo $rows['CNPJ']; ?></td>
                <td style="width:15%"><label style="color: red;">Email:</label><?php echo $rows['EmailAfiliado']; ?></td>
                <td style="width:15%"><label style="color: red;">Senha:</label><?php echo $rows['SenhaAfiliado']; ?></td>
            </tr>
        </table>
        <?php
        }
    } elseif (!empty($_POST['procurarafilialemail'])) {
        $procurarafilialemail = filter_input(INPUT_POST, 'procurarafilialemail', FILTER_SANITIZE_STRING);

        $sql_code2 = "SELECT * FROM FormRegisterAfilial WHERE EmailAfiliado = '$procurarafilialemail'";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        while ($rows = mysqli_fetch_array($sql_query_r)) {
        ?>
            <table cellpadding="9" cellspacing="1" style="width:100%; border: 1px solid #21abcd; background-color:white">
            <tr>
                <td style="width:5%"><label style="color: red;">ID:</label><?php echo $rows['id_afiliado']; ?></td>
                <td style="width:10%"><label style="color: red;">Nome:</label><?php echo $rows['NomeFantasia']; ?></td>
                <td style="width:10%"><label style="color: red;">Representante:</label><?php echo $rows['Representante']; ?></td>
                <td style="width:10%"><img style="width: 50px;border-radius: 50%;" src="<?php echo $rows['path_arquivo']; ?>"></td>
                <td style="width:10%"><label style="color: red;">Razão Social:</label><?php echo $rows['RazaoSocial']; ?></td>
                <td style="width:10%"><label style="color: red;">Contato:</label><?php echo $rows['NumeroContatoAfiliado']; ?></td>
                <td style="width:10%"><label style="color: red;">CNPJ:</label><?php echo $rows['CNPJ']; ?></td>
                <td style="width:15%"><label style="color: red;">Email:</label><?php echo $rows['EmailAfiliado']; ?></td>
                <td style="width:15%"><label style="color: red;">Senha:</label><?php echo $rows['SenhaAfiliado']; ?></td>
            </tr>
        </table>
    <?php
        }
    } ?> 
    <h3>Funções:</h3>
    <form method="post"><label>Deletar:</label><input type="text" name="idafilial" id="idafilial" placeholder="Insira o ID do Afiliado"><button type="submit">Deletar Afiliado</button>
    <?php

    if (isset($_POST['idafilial']))
     $idafilial = filter_input(INPUT_POST, 'idafilial', FILTER_SANITIZE_STRING);

    $sql_code2 = "DELETE FROM FormRegisterAfilial WHERE id_afiliado = '$idafilial'";
    $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
    ?>
    </form>






















</body>

</html>