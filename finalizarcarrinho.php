<?php

include('protect.php');
include('config.php');
$id_cliente = $_SESSION['id'];
$id = $_SESSION['id'];
$endereco = $_SESSION['EnderecoCliente'];

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
    <font size="6"><h1 align="center">Carrinho De Compras De <?php echo $_SESSION['NomeCliente'];?></h1></font>
    <font size="4"><h1 align="center"><a href="http://projectalfa.com.br/index.php">Pagina Inicial</a></h1></font>
    <?php

    $sql_code2 = "SELECT * FROM carrinho WHERE id_cliente='$id_cliente'";
    $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
    while($rows=mysqli_fetch_array($sql_query_r)){ 
        $valor = $rows['ValorProduto'];
		$total += $valor;
    ?>
    
    <p align="center"><font size="5" color="purple">Produto: </font> <font size="5"><?php echo $rows['NomeProduto']; ?> </font><font size="5" color="purple">Preço: </font><font size="5">R$<?php echo $rows['ValorProduto']; ?></font><a style="text-decoration: none; color: black;" href="excluircarrinho.php?id=<?php echo $rows['id_carrinho']; ?>">&nbsp;&nbsp;<img style="background-color: #b80000; border-radius: 50%; width: 25px; " src="assets/erro.png"> </a> </p><br>
    
    


        
 <?php
    } ?>
    <font size="5" color="green">
    <p>Total</p>
    <span>R$<?php echo $total ?></span><br>
</font>
<font size="5" color="red">
    <p>Escolha o Endereço</p>
</font><br>
<form id="form1" method="post" action="finalizarcarrinhodinheiro.php">
    <select name="select" id="select">
        <option selected><?php echo $endereco ?></option>
        <?php

        $sql_code2 = "SELECT * FROM ClienteEnderecos WHERE id_cliente='$id'";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        
        
        while($rows=mysqli_fetch_array($sql_query_r)){
        ?>        
        <option><?php echo $rows['EnderecoCompleto']; ?></option>
        <?php
        } ?>
    </select><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button id="finalizar1" type="submit" style="font-size: 18px; text-decoration:none;  top: 10px;
    right: 10px;
    width: 250px;
    height: 40px;
    font-weight: bold;
    background: #40e637;
    font-size: 15px;
    text-transform: uppercase;
    text-align: center;
    border:2px solid #40e637;
    color: #eee;
    text-align: center;
    border-radius: 15px;
    margin-left:100px;
    cursor: pointer;
    -webkit-appearance: none; 
    -moz-appearance: none; ">Dinheiro
</button></a><br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button id="finalizar2" style="font-size: 18px; text-decoration:none;  top: 10px;
    right: 10px;
    width: 250px;
    height: 40px;
    font-weight: bold;
    background: #40e637;
    font-size: 15px;
    text-transform: uppercase;
    text-align: center;
    border:2px solid #40e637;
    color: #eee;
    text-align: center;
    border-radius: 15px;
    margin-left:100px;
    cursor: pointer;
    -webkit-appearance: none; 
    -moz-appearance: none; ">PIX
</button></a><br><br>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button id="finalizar3" style="font-size: 18px; text-decoration:none;  top: 10px;
    right: 10px;
    width: 250px;
    height: 40px;
    font-weight: bold;
    background: #40e637;
    font-size: 15px;
    text-transform: uppercase;
    text-align: center;
    border:2px solid #40e637;
    color: #eee;
    text-align: center;
    border-radius: 15px;
    margin-left:100px;
    cursor: pointer;
    -webkit-appearance: none; 
    -moz-appearance: none; ">Cartão de Crédito
</button>
</form>
<script type="text/javascript">

document.getElementById('finalizar1').onclick = function() {
    document.getElementById('form1').action = '/finalizarcarrinhodinheiro.php';
}
document.getElementById('finalizar2').onclick = function() {
    document.getElementById('form1').action = '/finalizarcarrinhopix.php';
}
document.getElementById('finalizar3').onclick = function() {
    document.getElementById('form1').action = '/finalizarcarrinhocartao.php';
}
     </script>
</nav>

</main>
</body>
</html>