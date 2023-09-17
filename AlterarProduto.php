

<?php

include('protectafilial.php');
include('config.php');
$id = $_GET['id'];


?>


<html>
    <head>
    </head>
    <body>



<h2 id="listar">Listagem De Produtos</h2>


<?php

$sql_code2 = "SELECT * FROM produtos WHERE id_produto = $id";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);


while ($rows = mysqli_fetch_array($sql_query_r)) {
?>
<form method="post" action="ProcessoAlterarProduto.php">
<table border="1">
    <tr>
        <td>ID:<input type="text" name="idproduto" id="idproduto" value=" <?php echo $rows['id_produto']; ?>" readonly></td>
        <td>Nome: <input type="text" name="nome" id="nome" value="<?php echo $rows['NomeProduto']; ?>"></td>
        <td>Descrição: <input type="text" name="descricao" id="descricao" value="<?php echo $rows['DescricaoProduto']; ?>"></td>
        <td><img style="width: 50px;" src="<?php echo $rows['path_arquivo']; ?>"> </td>
        <td>Valor: <input type="text" name="valor" id="valor" value="<?php echo $rows['ValorProduto']; ?>"></td>
        <td>Quantidade:<input type="text" name="quantidade" id="quantidade" value="<?php echo $rows['QuantidadeProduto']; ?>"></td>
        <td><input type="submit" value="Alterar"></td>
    </tr>
</table>





<?php
    } ?>







    </body>
    
</html>