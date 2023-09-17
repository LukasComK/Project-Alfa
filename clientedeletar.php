<?php


include('config.php');

$id = $_GET['id'];
$sql_code2 = "DELETE FROM FormRegisterCliente WHERE id = $id";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);

if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

header("Location: index.php");


?>

