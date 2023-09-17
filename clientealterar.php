<?php
include('protect.php');
include('config.php');
$id = $_SESSION['id']
?>

<html>

<head> </head>

<body>




    <?php

    if (!isset($_SESSION)) {
        session_start();
    }

    



    $sql_code2 = "SELECT * FROM FormRegisterCliente WHERE id = '$id'";
    $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
    $rows = mysqli_fetch_assoc($sql_query_r);
    $DefaultEmail = $rows['EmailCliente'];
    $DefaultSenha = $rows['SenhaCliente'];





    if (!empty($_POST['NomeNovoCliente']) && (!empty($_POST['ContatoNovoCliente']))) {
        $NomeNovoCliente = filter_input(INPUT_POST, 'NomeNovoCliente', FILTER_SANITIZE_STRING);
        $sql_code2 = "UPDATE FormRegisterCliente set NomeCliente = '$NomeNovoCliente' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        $ContatoNovoCliente = filter_input(INPUT_POST, 'ContatoNovoCliente', FILTER_SANITIZE_STRING);
        $sql_code2 = "UPDATE FormRegisterCliente set NumeroContatoCliente = '$ContatoNovoCliente' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: operacaosucesso.php');
    }

    //Email
    $EmailNovoCliente = filter_input(INPUT_POST, 'EmailNovoCliente', FILTER_SANITIZE_STRING);
    $EmailNovoVeCliente = filter_input(INPUT_POST, 'EmailNovoVeCliente', FILTER_SANITIZE_STRING);
    if (empty($_POST['EmailNovoCliente']) && (empty($_POST['EmailNovoVeCliente']))) {
        $sql_code2 = "UPDATE FormRegisterCliente set EmailCliente = '$DefaultEmail' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: operacaosucesso.php');
    } elseif ($EmailNovoCliente != $EmailNovoVeCliente) {
        header('Location: error/erroremailconfirmar.html');
    } elseif (!empty($_POST['EmailNovoCliente']) && (!empty($_POST['EmailNovoVeCliente']))) {

        $sql_code2 = "UPDATE FormRegisterCliente set EmailCliente = '$EmailNovoCliente' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: operacaosucesso.php');
    }
    // Senha
    $SenhaNovaCliente = filter_input(INPUT_POST, 'SenhaNovaCliente', FILTER_SANITIZE_STRING);
    $SenhaNovaVeCliente = filter_input(INPUT_POST, 'SenhaNovaVeCliente', FILTER_SANITIZE_STRING);
    if (empty($_POST['SenhaNovaCliente']) && (empty($_POST['SenhaNovaVeCliente']))) {
        $sql_code2 = "UPDATE FormRegisterCliente set SenhaCliente = '$DefaultSenha' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
    } elseif ($SenhaNovaCliente != $SenhaNovaVeCliente) {
        header('Location: error/errorsenhaconfirmar.html');
    } elseif (!empty($_POST['SenhaNovaCliente']) && (!empty($_POST['SenhaNovaVeCliente']))) {
        $sql_code2 = "UPDATE FormRegisterCliente set SenhaCliente = '$SenhaNovaCliente' WHERE id = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: operacaosucesso.php');
    }
        $sql_code = "SELECT * FROM FormRegisterCliente WHERE id = '$id'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

           
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['CPFCliente'] = $usuario['CPFCliente'];
            $_SESSION['NumeroContatoCliente'] = $usuario['NumeroContatoCliente'];
            $_SESSION['NomeCliente'] = $usuario['NomeCliente'];
            $_SESSION['EmailCliente'] = $usuario['EmailCliente'];
            $_SESSION['SenhaCliente'] = $usuario['SenhaCliente'];
            $_SESSION['EnderecoCliente'] = $usuario['EnderecoCliente'];
            $_SESSION['path_arquivo'] = $usuario['path_arquivo'];
            










    ?>





</body>

</html>