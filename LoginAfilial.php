<?php

include_once('config.php');

if(isset($_POST['EmailLoginAfiliado']) || isset($_POST['SenhaLoginAfiliado'])) {

    if(strlen($_POST['EmailLoginAfiliado']) == 0) {
        header('Location: error/erroremailnull.html');
    } else if(strlen($_POST['SenhaLoginAfiliado']) == 0) {
        header('Location: error/errorsenhanull.html');
    } else {

        $email = $conn->real_escape_string($_POST['EmailLoginAfiliado']);
        $senha = $conn->real_escape_string($_POST['SenhaLoginAfiliado']);

        $sql_code = "SELECT * FROM FormRegisterAfilial WHERE EmailAfiliado = '$email' AND SenhaAfiliado = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $afiliado = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_afiliado'] = $afiliado['id_afiliado'];
            $_SESSION['CNPJ'] = $afiliado['CNPJ'];
            $_SESSION['RazaoSocial'] = $afiliado['RazaoSocial'];
            $_SESSION['path_arquivo'] = $afiliado['path_arquivo'];
            $_SESSION['Representante'] = $afiliado['Representante'];
            $_SESSION['ContatoAfiliado'] = $afiliado['ContatoAfiliado'];
            $_SESSION['NomeFantasia'] = $afiliado['NomeFantasia'];
            $_SESSION['EmailAfiliado'] = $afiliado['EmailAfiliado'];
            $_SESSION['SenhaAfiliado'] = $afiliado['SenhaAfiliado'];
            



            header("Location: alfa_afiliado.php");

        } else {
            header('Location: error/errorsenhaemailerrado.html');
        }

    }

}

    


?>