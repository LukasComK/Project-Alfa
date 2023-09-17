<?php

include('config.php');
include('protectafilial.php');
$id = $_SESSION['id_afiliado'];
$fotoperfil = $_SESSION['path_arquivo'];

$nomeproduto = filter_input(INPUT_POST, 'nomeproduto', FILTER_SANITIZE_STRING);
$descricaoproduto = filter_input(INPUT_POST, 'descricaoproduto', FILTER_SANITIZE_STRING);
$fornecedorproduto = filter_input(INPUT_POST, 'fornecedorproduto', FILTER_SANITIZE_STRING);
$valorproduto = filter_input(INPUT_POST, 'valorproduto', FILTER_SANITIZE_STRING);
$quantidadeproduto = filter_input(INPUT_POST, 'quantidadeproduto', FILTER_SANITIZE_STRING);

if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];
  
     if($arquivo['error'])
     echo "/ Arquivo De Imagem de Perfil Obrigatoria Não Inserida /";
  
     if($arquivo['size'] > 5000000)
     header('Location: error/errorarquivosize.html');
      $pasta = "FotosProdutos/";
      $pastaforum = "ForumAlfa/";
      $NomeDoArquivo = $arquivo['name'];
      $NovoNomeDoArquivo = uniqid();
      $extensao = strtolower(pathinfo($NomeDoArquivo,PATHINFO_EXTENSION));
     
      if($extensao != "jpg" && $extensao != 'png')
      die("/ Tipo De Arquivo não aceito /");
      $path = $pasta . $NovoNomeDoArquivo . "." . $extensao;
    
      $moveUpload = move_uploaded_file($arquivo["tmp_name"], $path);
      if($moveUpload){
        $result_register = "INSERT INTO produtos (id_Fornecedor,NomeProduto,FornecedorProduto,DescricaoProduto,ValorProduto,QuantidadeProduto,path_arquivo,foto_perfil) VALUES ('$id','$nomeproduto','$fornecedorproduto','$descricaoproduto','$valorproduto','$quantidadeproduto','$path','$fotoperfil')";
        $result_register_final = mysqli_query($conn, $result_register) or die("Falha na execução do código SQL: " . $conn->error);    
            header('Location: correct/correctcadastrado.html');
        
  
     }else
     header('Location: error/errordefault.html');
   
  }






?>