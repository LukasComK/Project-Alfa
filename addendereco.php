<?php

include_once("config.php");
include_once("protect.php");
$id = $_SESSION['id'];

$Estado = filter_input(INPUT_POST, 'Estado', FILTER_SANITIZE_STRING);
$Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_STRING);
$Bairro = filter_input(INPUT_POST, 'Bairro', FILTER_SANITIZE_STRING);
$CEP = filter_input(INPUT_POST, 'CEP', FILTER_SANITIZE_STRING);
$Endereco = filter_input(INPUT_POST, 'Endereco', FILTER_SANITIZE_STRING);
$Num = filter_input(INPUT_POST, 'Num', FILTER_SANITIZE_STRING);
$Comp = filter_input(INPUT_POST, 'Comp', FILTER_SANITIZE_STRING);

$EnderecoCompleto = "$Estado - $Cidade - $Bairro - $CEP - $Endereco $Num $Comp";

$sql_code = "INSERT INTO ClienteEnderecos (id_cliente,Estado,Cidade,Bairro,CEP,Numero,Complemento,Endereco,EnderecoCompleto)VALUES('$id', '$Estado', '$Cidade', '$Bairro','$CEP','$Num','$Comp','$Endereco','$EnderecoCompleto')";
$sql_query_into = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

?>