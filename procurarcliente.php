<?php
include('protect.php');
include('config.php');
$id = $_SESSION['id'];
$DefaultEmail = $_SESSION['EmailCliente'];
$DefaultSenha = $_SESSION['SenhaCliente'];
?>

<html>

<head> </head>

<body>



    <?php

    if (!empty($_POST['NomeNovoCliente']) && (!empty($_POST['ContatoNovoCliente']))) {
        $NomeNovoCliente = filter_input(INPUT_POST, 'NomeNovoCliente', FILTER_SANITIZE_STRING);
        $sql_code2 = "UPDATE FormRegisterCliente set NomeCliente = '$NomeNovoCliente' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        $ContatoNovoCliente = filter_input(INPUT_POST, 'ContatoNovoCliente', FILTER_SANITIZE_STRING);
        $sql_code2 = "UPDATE FormRegisterCliente set NumeroContatoCliente = '$ContatoNovoCliente' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        $sql_code2 = "UPDATE FormRegisterCliente set EmailCliente = '$DefaultEmail', SenhaCliente = '$DefaultSenha' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);

        $EmailNovoCliente = filter_input(INPUT_POST, 'EmailNovoCliente', FILTER_SANITIZE_STRING);
        $EmailNovoVeCliente = filter_input(INPUT_POST, 'EmailNovoVeCliente', FILTER_SANITIZE_STRING);

        if ($EmailNovoCliente === $EmailNovoVeCliente){

            $sql_code2 = "UPDATE FormRegisterCliente set EmailCliente = '$EmailNovoCliente', SenhaCliente = '$DefaultSenha' WHERE id = $id";
            $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        } elseif($EmailNovoCliente != $EmailNovoVeCliente) {
        echo "os Emails Não se coencidem";        
        }

        
        $SenhaNovaCliente = filter_input(INPUT_POST, 'SenhaNovaCliente', FILTER_SANITIZE_STRING);
        $SenhaNovaVeCliente = filter_input(INPUT_POST, 'SenhaNovaVeCliente', FILTER_SANITIZE_STRING);

        if ($SenhaNovaCliente === $SenhaNovaVeCliente){
            $sql_code2 = "UPDATE FormRegisterCliente set EmailCliente = '$DefaultEmail', SenhaCliente = '$SenhaNovaCliente' WHERE id = $id";
            $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        }elseif($SenhaNovaCliente != $SenhaNovaVeCliente){
        echo "as Senhas Não se coencidem";        
        } 


    }
    


?>





</body>

</html>