<?php

include_once("config.php");

$NomeFantasia = filter_input(INPUT_POST, 'NomeFantasia', FILTER_SANITIZE_STRING);
$RazaoSocial = filter_input(INPUT_POST, 'RazaoSocial', FILTER_SANITIZE_STRING);
$Representante = filter_input(INPUT_POST, 'Representante', FILTER_SANITIZE_STRING);
$CNPJ = filter_input(INPUT_POST, 'CNPJ', FILTER_SANITIZE_STRING);
$ContatoAfiliado = filter_input(INPUT_POST, 'ContatoAfiliado', FILTER_SANITIZE_STRING);
$EmailAfiliado = filter_input(INPUT_POST, 'EmailAfiliado', FILTER_SANITIZE_STRING);
$SenhaAfiliado = filter_input(INPUT_POST, 'SenhaAfiliado', FILTER_SANITIZE_STRING);

$result = $conn->query("SELECT COUNT(*) FROM FormRegisterAfilial WHERE EmailAfiliado = '{$EmailAfiliado}' ");
$row = $result->fetch_row();
if ($row[0] > 0) {
    header('Location: error/erroremailcadastrado.html');
} 
else {        
$result = $conn->query("SELECT COUNT(*) FROM FormRegisterAfilial WHERE CNPJ = '{$CNPJ}' ");
$row = $result->fetch_row();
if ($row[0] > 0) {
    header('Location: error/errorcnpjcadastrado.html');
} 
else {
$result = $conn->query("SELECT COUNT(*) FROM FormRegisterAfilial WHERE RazaoSocial = '{$RazaoSocial}' ");
$row = $result->fetch_row();
if ($row[0] > 0) {
    header('Location: error/errorrazaocadastrado.html');
} 
else {




if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];
  
     if($arquivo['error'])
     echo "/ Arquivo De Imagem de Perfil Obrigatoria Não Inserida /";
  
     if($arquivo['size'] > 5000000)
     header('Location: error/errorarquivosize.html');
     

      $pasta = "FotosPerfil/";
      $NomeDoArquivo = $arquivo['name'];
      $NovoNomeDoArquivo = uniqid();
      $extensao = strtolower(pathinfo($NomeDoArquivo,PATHINFO_EXTENSION));
     
      if($extensao != "jpg" && $extensao != 'png' && $extensao != 'gif')
      
      die("/ Tipo De Arquivo não aceito /");

      $path = $pasta . $NovoNomeDoArquivo . "." . $extensao;
    
      $moveUpload = move_uploaded_file($arquivo["tmp_name"], $path);
      if($moveUpload){
        $result_register = "INSERT INTO FormRegisterAfilial (NomeFantasia,RazaoSocial,Representante,CNPJ,NumeroContatoAfiliado,EmailAfiliado,SenhaAfiliado,path_arquivo) VALUES ('$NomeFantasia','$RazaoSocial','$Representante','$CNPJ','$ContatoAfiliado','$EmailAfiliado', '$SenhaAfiliado', '$path')";
        $result_register_final = mysqli_query($conn, $result_register) or die("Falha na execução do código SQL: " . $conn->error);
        header('Location: correct/correctcadastrado.html');
     }else
     header('Location: error/errordefault.html');
      
    }
    }
    }
}
?>