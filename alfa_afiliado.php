

<?php

include('protectafilial.php');
include('config.php');
$id = $_SESSION['id_afiliado']


?>


<html>
    <head>
    </head>
    <body>
<h1>Bem Vindo a Sua Tela Inicial Como Afiliado</h1>
<h1>Perfil: <img style="border-radius: 35%;" src="<?php echo $_SESSION['path_arquivo']; ?>"> <?php echo $_SESSION['RazaoSocial']; ?> </h1>
<h4><a href="logout.php">Logout</a></h4><br><br>
<h4>Guia</h4>
<h4><a href="#cadastrar">Cadastro De Produtos</a></h4>
<h4><a href="#listar">Listagem De Produtos</a></h4>
<h2 id="cadastrar">Cadastro De Produtos</h2>
<form method="post" enctype="multipart/form-data" action="CadastrarProduto.php">
<label>Nome Do Produto:</label><input type="text" name="nomeproduto" id="nomeproduto"><br>
<label>Descrição Do Produto:</label><input type="text" name="descricaoproduto" id="descricaoproduto"><br>
<label>Fornecedor:</label><input type="text" name="fornecedorproduto" id="fornecedorproduto" value="<?php echo $_SESSION['NomeFantasia']; ?>" readonly><br>
<label>Foto Do Produto:</label><input type="file" name="arquivo" id="arquivo"><br>
<label>Valor Do Produto:</label><input type="text" name="valorproduto" id="valorproduto"><br>
<label>Quantidade Do Produto:</label><input type="text" name="quantidadeproduto" id="quantidadeproduto"><br>
<input type="submit" value="Cadastrar Produto">
</form>



<h2 id="listar">Listagem De Produtos</h2>


<?php

$sql_code2 = "SELECT * FROM produtos WHERE id_Fornecedor = $id";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);


while ($rows = mysqli_fetch_array($sql_query_r)) {
?>
<table border="1">
    <tr>
        <td>ID: <?php echo $rows['id_produto']; ?></td>
        <td>Nome: <?php echo $rows['NomeProduto']; ?></td>
        <td>Descrição:<?php echo $rows['DescricaoProduto']; ?></td>
        <td><img style="width: 50px;" src="<?php echo $rows['path_arquivo']; ?>"> </td>
        <td>Valor:<?php echo $rows['ValorProduto']; ?></td>
        <td>Quantidade:<?php echo $rows['QuantidadeProduto']; ?></td>
        <td><a href="AlterarProduto.php?id=<?php echo $rows['id_produto']; ?>">Alterar </a><a href="ExcluirProduto.php?id=<?php echo $rows['id_produto']; ?>"> Exluir</a></td>
    </tr>
</table>





<?php
    } ?>







    </body>
    
</html>