<?php

include_once('config.php');

if(isset($_POST['EmailLoginProfissional']) || isset($_POST['SenhaLoginProfissional'])) {

    if(strlen($_POST['EmailLoginProfissional']) == 0) {
        header('Location: error/erroremailnull.html');
    } else if(strlen($_POST['SenhaLoginProfissional']) == 0) {
        header('Location: error/errorsenhanull.html');
    } else {

        $email = $conn->real_escape_string($_POST['EmailLoginProfissional']);
        $senha = $conn->real_escape_string($_POST['SenhaLoginProfissional']);

        $sql_code = "SELECT * FROM FormRegisterProfissional WHERE EmailProfissional = '$email' AND SenhaProfissional = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $profissional = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_profissional'] = $profissional['id_profissional'];
            $_SESSION['CPFProfissional'] = $profissional['CPFProfissional'];
            $_SESSION['ContatoProfissional'] = $profissional['ContatoProfissional'];
            $_SESSION['NomeProfissional'] = $profissional['NomeProfissional'];
            $_SESSION['EmailProfissional'] = $profissional['EmailProfissional'];
            $_SESSION['SenhaProfissional'] = $profissional['SenhaProfissional'];
            $_SESSION['path_arquivo'] = $profissional['path_arquivo'];
            $_SESSION['CRMProfissional'] = $profissional['CRMProfissional'];
            $_SESSION['AreaProfissional'] = $profissional['AreaProfissional'];
            $_SESSION['InstitutoProfissional'] = $profissional['InstitutoProfissional'];

            



            header("Location: alfa_profissional.php");

        } else {
            header('Location: error/errorsenhaemailerrado.html');
        }

    }

}

    


?>