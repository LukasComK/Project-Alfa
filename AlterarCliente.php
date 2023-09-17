<?php


include_once('config.php');
$id = $_GET['id'];

$EmailCliente = filter_input(INPUT_POST, 'EmailCliente', FILTER_SANITIZE_STRING);

$result_alterar = "UPDATE FormRegisterCliente SET EmailCliente = '$EmailCliente' WHERE id='$id' ";
mysqli_query($conn, $result_alterar);
echo "Email: $EmailCliente e $id"


?>