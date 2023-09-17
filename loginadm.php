<?php

include_once('config.php');
session_destroy();

if(isset($_POST['EmailADM']) || isset($_POST['SenhaADM'])) {

    if(strlen($_POST['EmailADM']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['SenhaADM']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $conn->real_escape_string($_POST['EmailADM']);
        $senha = $conn->real_escape_string($_POST['SenhaADM']);

        $sql_code = "SELECT * FROM AdministradorForum WHERE Email = '$email' AND Senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $adm = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_adm'] = $adm['id_adm'];   
             header("Location: alfa_adm.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}

    


?>