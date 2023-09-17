<?php

include('protect.php');
include('config.php');
$id_cliente = $_SESSION['id'];
$NomeCliente = $_SESSION['NomeCliente'];
$Endereco = filter_input(INPUT_POST, 'select', FILTER_SANITIZE_STRING);
$tipodepagamento = "Dinheiro";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<title>Alfa delivery</title>

	<link href="reset_css.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<link rel="icon" href="./assets/carrinho.png">

<!-- CORPO - CONTEÚDO -->
<body>

    <header>
	<figure>
		<center><img style="width: 175px;" src = "./assets/alfa_logo.png" alt="Logo Alfa"></center>
		<figcaption></figcaption>
	</figure>
</header>

<nav style="background-color: #f2f2f2;">
<center>
<font size="4" color="green">
<h1>Tipo De Pagamento: Dinheiro/Pagar Na Entrega</h1>
<h2>Pedido Confirmado Para <?php echo $Endereco ?></h2>
<h2>Lista Do(s) Pedido(s):</h2><br><br>
</font>
</center>
<?php
$sql_code2 = "SELECT * FROM carrinho WHERE id_cliente='$id_cliente'";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
while($rows=mysqli_fetch_array($sql_query_r)){ 
	$valor = $rows['ValorProduto'];
	$total += $valor;
    $produtos = $rows['NomeProduto'];
?>
<p align="center"><font size="5" color="purple">Produto: <font size="5"><?php echo $rows['NomeProduto']; ?> </font><font size="5" color="purple">Preço: </font><font size="5">R$<?php echo $rows['ValorProduto']; ?></font><a style="text-decoration: none; color: black;" href="excluircarrinho.php?id=<?php echo $rows['id_carrinho']; ?>">&nbsp;&nbsp;<img style="background-color: #b80000; border-radius: 50%; width: 25px; " src="assets/erro.png"> </a> </p><br>
           
<?php
   } ?>
<?php   $produtowhere = $rows['NomeProduto']; ?>
   <!--Insere nos pagamentos -->
<?php
$result_register = "INSERT INTO pagamentos (Produtos,TipoDePagamento,Endereco,NomeCliente) VALUES ('$produtos','$tipodepagamento','$Endereco','$NomeCliente')";
$result_register_final = mysqli_query($conn, $result_register) or die("Falha na execução do código SQL: " . $conn->error); 
?>
<!--Altera o Estoque -->
<?php
$QuantidadeProduto = $rows['QuantidadeProduto'];
$QuantidadeProdutoNew = $QuantidadeProduto - 1;
$sql_code2 = "UPDATE produtos set QuantidadeProduto = '$QuantidadeProdutoNew' WHERE NomeProduto = $produtowhere";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
?>
</nav>

</main>
</body>
</html>