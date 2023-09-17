<?php


include('config.php');

$id = $_GET['id'];
$sql_code2 = "DELETE FROM produtos WHERE id_produto = $id";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);

header("Location: index.php");


?>

