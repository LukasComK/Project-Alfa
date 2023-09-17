<?php
include('protectadm.php');
include('config.php');
?>
<html>


<head>
    <title>Forum Administrador</title>
    <meta charset="UTF-8">

</head>

<body>
    <h1 align="center">Controle De Clientes</h1>
    <p align="center"><a href="logout.php">Logout</a></p>
    <h3>Guia</h3>
    <h4><a href="#cliente">Clientes Registrados</a></h4>
    <h4><a href="#afilial">Afiliados Registrados</a></h4>
    <h4><a href="#profissional">Profissional Registrados</a></h4>
    <h4><a href="#forum">Controle do Fórum</a></h4>

        
    <h2 id="cliente" align="center">Clientes Registrados</h2>
    <form method="post" action="procurarcliente.php">
    <h3>Procurar Cliente Pelo:</h3>
    <table>
        <tr>
            <td>Nome Completo:</td>
            <td><input type="text" name="procurarclientenome" id="procurarclientenome"></td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td><input type="text" name="procurarclientecpf" id="procurarclientecpf"></td>
        </tr>
        <tr>
            <td>Numero De Contato:</td>
            <td><input type="text" name="procurarclientecontato" id="procurarclientecontato"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="procurarclienteemail" id="procurarclienteemail"></td>
        </tr>
    </table>
    <button type="submit">Procurar</button>
    </form>
    
   


    <?php

    $sql_code2 = "SELECT * FROM FormRegisterCliente";
    $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);


    while ($rows = mysqli_fetch_array($sql_query_r)) {
    ?>
         <table cellpadding="8" cellspacing="1" style="width:100%; border: 1px solid #21abcd; background-color:white">
            <tr>
                <td style="width:5%"><label style="color: red;">ID:</label><?php echo $rows['id']; ?></td>
                <td style="width:15%"><label style="color: red;">Nome:</label><?php echo $rows['NomeCliente']; ?></td>
                <td style="width:10%"><img style="width: 50px;border-radius: 50%;" src="<?php echo $rows['path_arquivo']; ?>"></td>
                <td style="width:10%"><label style="color: red;">CPF:</label><?php echo $rows['CPFCliente']; ?></td>
                <td style="width:10%"><label style="color: red;">Contato:</label><?php echo $rows['NumeroContatoCliente']; ?></td>
                <td style="width:10%"><label style="color: red;">Endereço:</label><?php echo $rows['EnderecoCliente']; ?></td>
                <td style="width:15%"><label style="color: red;">Email:</label><?php echo $rows['EmailCliente']; ?></td>
                <td style="width:15%"><label style="color: red;">Senha:</label><?php echo $rows['SenhaCliente']; ?></td>
            </tr>
        </table>

    <?php
    } ?>
    <h2 id="afilial" align="center" >Afiliados Registrados</h2>
    <h3>Guia</h3>
    <h4><a href="#cliente">Clientes Registrados</a></h4>
    <h4><a href="#afilial">Afiliados Registrados</a></h4>
    <h4><a href="#profissional">Profissional Registrados</a></h4>
    <h4><a href="#forum">Controle do Fórum</a></h4>
    <h3>Procurar Afilial Pelo:</h3>
    <form method="post" action="procurarafilial.php">
    <table>
        <tr>
            <td>Nome Fantasia:</td>
            <td><input type="text" name="procurarafilialnome" id="procurarafilialnome"></td>
        </tr>
        <tr>
            <td>CNPJ:</td>
            <td><input type="text" name="procurarafilialcnpj" id="procurarafilialcnpj"></td>
        </tr>
        <tr>
            <td>Representante:</td>
            <td><input type="text" name="procurarrepresentante" id="procurarrepresentante"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="procurarafilialemail" id="procurarafilialemail"></td>
        </tr>
    </table>
    <button type="submit">Procurar</button>
    </form>
    <?php

    $sql_code2 = "SELECT * FROM FormRegisterAfilial";
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
    } ?>
    <h2 id="profissional" align="center">Profissionais Registrados</h2>
    <h3>Guia</h3>
    <h4><a href="#cliente">Clientes Registrados</a></h4>
    <h4><a href="#afilial">Afiliados Registrados</a></h4>
    <h4><a href="#profissional">Profissional Registrados</a></h4>
    <h4><a href="#forum">Controle do Fórum</a></h4>
    <h3>Procurar Profissional Pelo:</h3>
    <form method="post" action="procurarprofissional.php">
    <table>
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="procurarprofissionalnome" id="procurarprofissionalnome"></td>
        </tr>
        <tr>
            <td>CRM:</td>
            <td><input type="text" name="procurarprofissionalcrm" id="procurarprofissionalcrm"></td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td><input type="text" name="procurarprofissionalcpf" id="procurarprofissionalcpf"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="procurarprofissionalemail" id="procurarprofissionalemail"></td>
        </tr>
    </table>
    <button type="submit">Procurar</button>
    </form>
    
    <?php

    $sql_code2 = "SELECT * FROM FormRegisterProfissional";
    $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);


    while ($rows = mysqli_fetch_array($sql_query_r)) {
    ?>
         <table cellpadding="10" cellspacing="1" style="width:100%; border: 1px solid #21abcd; background-color:white">
            <tr>
                <td style="width:10%"><label style="color: red;">ID:</label><?php echo $rows['id_profissional']; ?></td>
                <td style="width:10%"><label style="color: red;">Nome:</label><?php echo $rows['NomeProfissional']; ?></td>
                <td style="width:10%"><img style="width: 50px;border-radius: 50%;" src="<?php echo $rows['path_arquivo']; ?>"></td>
                <td style="width:10%"><label style="color: red;">CPF:</label><?php echo $rows['CPFProfissional']; ?></td>
                <td style="width:10%"><label style="color: red;">Contato:</label><?php echo $rows['ContatoProfissional']; ?></td>
                <td style="width:10%"><label style="color: red;">CRM:</label><?php echo $rows['CRMProfissional']; ?></td>               
                <td style="width:10%"><label style="color: red;">Instituto:</label><?php echo $rows['InstitutoProfissional']; ?></td>
                <td style="width:10%"><label style="color: red;">Área:</label><?php echo $rows['AreaProfissional']; ?></td>
                <td style="width:10%"><label style="color: red;">Email:</label><?php echo $rows['EmailProfissional']; ?></td>
                <td style="width:10%"><label style="color: red;">Senha:</label><?php echo $rows['SenhaProfissional']; ?></td>
            </tr>
        </table>

    <?php
    } ?>
    <h1 id="forum" align="center">Controle Do Forum</h1>
    <h3>Guia</h3>
    <h4><a href="#cliente">Clientes Registrados</a></h4>
    <h4><a href="#afilial">Afiliados Registrados</a></h4>
    <h4><a href="#profissional">Profissional Registrados</a></h4>
    <h4><a href="#forum">Controle do Fórum</a></h4>

    <?php

    $sql_code2 = "SELECT * FROM forum_q";
    $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);


    while ($rows = mysqli_fetch_array($sql_query_r)) {
    ?>
         <table cellpadding="10" cellspacing="1" style="width:100%; border: 1px solid #21abcd; background-color:white">
            <tr>
                <td style="width:10%"><label style="color: red;">ID:</label><?php echo $rows['id']; ?></td>
                <td style="width:10%"><label style="color: red;">Topico:</label><?php echo $rows['topic']; ?></td>
                <td style="width:10%"><label style="color: red;">Criador:</label><img style="width: 50px;border-radius: 50%;" src="<?php echo $rows['foto_perfil']; ?>"><?php echo $rows['name']; ?></td>
                <td style="width:10%"><label style="color: red;">Detalhes:</label><?php echo $rows['detail']; ?></td>
                <td style="width:10%"><label style="color: red;">Foto Topico:</label><img style="width: 100px" src="<?php echo $rows['imagem']; ?>"></td>
                <td style="width:10%"><label style="color: red;"><?php  echo empty($rows['CRMProfissional']) ? $rows['CRMProfissional'] : "CRM: $rows[CRMProfissional]";?></td>               
                <td style="width:10%"><label style="color: red;"><?php  echo empty($rows['InstitutoProfissional']) ? $rows['InstitutoProfissional'] : "CRM: $rows[InstitutoProfissional]";?></td>
                <td style="width:10%"><label style="color: red;"><?php  echo empty($rows['AreaProfissional']) ? $rows['AreaProfissional'] : "CRM: $rows[AreaProfissional]";?></td>
                <td style="width:10%"><label style="color: red;">Postado:</label><?php echo $rows['datetime']; ?></td>

            </tr>
        </table>

    <?php
    } ?>


    


</body>

</html>