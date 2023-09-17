<?php


include('config.php');

$id = $_GET['id'];
$sql_code2 = "DELETE FROM carrinho WHERE id_carrinho = $id";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);

header("Location: index.php");


?>

