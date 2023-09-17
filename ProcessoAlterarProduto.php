<?php
   include('protectafilial.php');
   include('config.php');
   $id = $_SESSION['id_afiliado'];
?>

<html>

<head> </head>

<body>
    <?php
 

    


    $idproduto = filter_input(INPUT_POST, 'idproduto', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
    if (!empty($_POST['nome']) && (!empty($_POST['descricao']))){
        $sql_code2 = "UPDATE produtos set NomeProduto = '$nome', DescricaoProduto = '$descricao', QuantidadeProduto = '$quantidade', ValorProduto = '$valor' WHERE id_produto = $idproduto";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        echo "Produto Alterado Com Sucesso!<BR>";
        echo "<a href=index.php>Pagina Inicial!</a>";
    }






    











    ?>





</body>

</html>