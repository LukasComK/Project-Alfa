<?php
include('protectprofissional.php');
include('config.php');
$id = $_SESSION['id_profissional']
?>

<html>

<head> </head>

<body>




    <?php
      

    



    $sql_code2 = "SELECT * FROM FormRegisterProfissional WHERE id_profissional = '$id'";
    $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
    $rows = mysqli_fetch_assoc($sql_query_r);
    $DefaultEmail = $rows['EmailProfissional'];
    $DefaultSenha = $rows['SenhaProfissional'];





    if (!empty($_POST['NomeNovoProfissional']) && (!empty($_POST['ContatoNovoProfissional']))) {
        $NomeNovoProfissional = filter_input(INPUT_POST, 'NomeNovoProfissional', FILTER_SANITIZE_STRING);
        $sql_code2 = "UPDATE FormRegisterProfissional set NomeProfissional = '$NomeNovoProfissional' WHERE id_profissional = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        $ContatoNovoProfissional = filter_input(INPUT_POST, 'ContatoNovoProfissional', FILTER_SANITIZE_STRING);
        $sql_code2 = "UPDATE FormRegisterProfissional set ContatoProfissional = '$ContatoNovoProfissional' WHERE id_profissional = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: operacaosucesso.php');
    }

    //Email
    $EmailNovoProfissional = filter_input(INPUT_POST, 'EmailNovoProfissional', FILTER_SANITIZE_STRING);
    $EmailNovoVeProfissional = filter_input(INPUT_POST, 'EmailNovoVeProfissional', FILTER_SANITIZE_STRING);
    if (empty($_POST['EmailNovoProfissional']) && (empty($_POST['EmailNovoVeProfissional']))) {
        $sql_code2 = "UPDATE FormRegisterProfissional set EmailProfissional = '$DefaultEmail' WHERE id_profissional = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: operacaosucesso.php');
    } elseif ($EmailNovoProfissional != $EmailNovoVeProfissional) {
        header('Location: error/erroremailconfirmar.html');
    } elseif (!empty($_POST['EmailNovoProfissional']) && (!empty($_POST['EmailNovoVeProfissional']))) {

        $sql_code2 = "UPDATE FormRegisterProfissional set EmailProfissional = '$EmailNovoProfissional' WHERE id_profissional = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: operacaosucesso.php');
    }
    // Senha
    $SenhaNovaProfissional = filter_input(INPUT_POST, 'SenhaNovaProfissional', FILTER_SANITIZE_STRING);
    $SenhaNovaVeProfissional = filter_input(INPUT_POST, 'SenhaNovaVeProfissional', FILTER_SANITIZE_STRING);
    if (empty($_POST['SenhaNovaProfissional']) && (empty($_POST['SenhaNovaVeProfissional']))) {
        $sql_code2 = "UPDATE FormRegisterProfissional set SenhaProfissional = '$DefaultSenha' WHERE id_profissional = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
    } elseif ($SenhaNovaProfissional != $SenhaNovaVeProfissional) {
        header('Location: error/errorsenhaconfirmar.html');
    } elseif (!empty($_POST['SenhaNovaProfissional']) && (!empty($_POST['SenhaNovaVeProfissional']))) {
        $sql_code2 = "UPDATE FormRegisterProfissional set SenhaProfissional = '$SenhaNovaProfissional' WHERE id_profissional = $id";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: operacaosucesso.php');
    }
        $sql_code = "SELECT * FROM FormRegisterProfissional WHERE id_profissional = '$id'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

           
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
            










    ?>





</body>

</html>