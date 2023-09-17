<?php

include_once('config.php');

if(isset($_POST['EmailLoginCliente']) || isset($_POST['SenhaLoginCliente'])) {

    if(strlen($_POST['EmailLoginCliente']) == 0) {
        header('Location: error/erroremailnull.html');
    } else if(strlen($_POST['SenhaLoginCliente']) == 0) {
        header('Location: error/errorsenhanull.html');
    } else {

        $email = $conn->real_escape_string($_POST['EmailLoginCliente']);
        $senha = $conn->real_escape_string($_POST['SenhaLoginCliente']);

        $sql_code = "SELECT * FROM FormRegisterCliente WHERE EmailCliente = '$email' AND SenhaCliente = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
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
            



            header("Location: alfa_cliente.php");

        } else {
            header('Location: error/errorsenhaemailerrado.html');
        }

    }

}

    


?>