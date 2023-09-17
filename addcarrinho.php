<?php

include('protect.php');
include('config.php');
$id=$_GET['id'];
$id_cliente = $_SESSION['id'];
?>
<?php

$sql_code2 = "SELECT * FROM produtos WHERE id_produto='$id'";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
$rows=mysqli_fetch_array($sql_query_r);
$NomeProduto = $rows['NomeProduto'];
$ValorProduto = $rows['ValorProduto'];
$result_register = "INSERT INTO carrinho (id_cliente,NomeProduto,ValorProduto) VALUES ('$id_cliente','$NomeProduto','$ValorProduto')";
$result_register_final = mysqli_query($conn, $result_register) or die("Falha na execução do código SQL: " . $conn->error);    



?>

