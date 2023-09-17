<?php

include_once("config.php");

$NomeCliente = filter_input(INPUT_POST, 'NomeCliente', FILTER_SANITIZE_STRING);
$CPFCliente = filter_input(INPUT_POST, 'CPFCliente', FILTER_SANITIZE_STRING);
$ContatoCliente = filter_input(INPUT_POST, 'ContatoCliente', FILTER_SANITIZE_STRING);
$EmailCliente = filter_input(INPUT_POST, 'EmailCliente', FILTER_SANITIZE_STRING);
$SenhaCliente = filter_input(INPUT_POST, 'SenhaCliente', FILTER_SANITIZE_STRING);
$EnderecoCliente = filter_input(INPUT_POST, 'EnderecoCliente', FILTER_SANITIZE_STRING);

$result = $conn->query("SELECT COUNT(*) FROM FormRegisterCliente WHERE EmailCliente = '{$EmailCliente}' ");
$row = $result->fetch_row();
if ($row[0] > 0) {
    header('Location: error/erroremailcadastrado.html');
} 
else {        
$result = $conn->query("SELECT COUNT(*) FROM FormRegisterCliente WHERE CPFCliente = '{$CPFCliente}' ");
$row = $result->fetch_row();
if ($row[0] > 0) {
    header('Location: error/errorcpfcadastrado.html');
} 
else {
$result = $conn->query("SELECT COUNT(*) FROM FormRegisterCliente WHERE NumeroContatoCliente = '{$ContatoCliente}' ");
$row = $result->fetch_row();
if ($row[0] > 0) {
    header('Location: error/errorcontatocadastrado.html');
} 
else {

 


    



if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];
  
     if($arquivo['error'])
     echo "/ Arquivo De Imagem de Perfil Obrigatoria Não Inserida /";
  
     if($arquivo['size'] > 5000000)
     header('Location: error/errorarquivosize.html');
     
      $pasta = "FotosPerfil/";
      $pastaforum = "ForumAlfa/";
      $NomeDoArquivo = $arquivo['name'];
      $NovoNomeDoArquivo = uniqid();
      $extensao = strtolower(pathinfo($NomeDoArquivo,PATHINFO_EXTENSION));
     
      if($extensao != "jpg" && $extensao != 'png' && $extensao != "gif")
      die("/ Tipo De Arquivo não aceito /");
      $path = $pasta . $NovoNomeDoArquivo . "." . $extensao;     
    
      $moveUpload = move_uploaded_file($arquivo["tmp_name"], $path);
      if($moveUpload){
        $result_register = "INSERT INTO FormRegisterCliente (NomeCliente,CPFCliente,NumeroContatoCliente,EmailCliente,SenhaCliente,path_arquivo,EnderecoCliente) VALUES ('$NomeCliente','$CPFCliente','$ContatoCliente','$EmailCliente','$SenhaCliente','$path','$EnderecoCliente')";
        $result_register_final = mysqli_query($conn, $result_register);

        $result_register2 = "SELECT * FROM FormRegisterCliente WHERE CPFCliente='$CPFCliente' ";
        $result_register_final2 = mysqli_query($conn, $result_register2);
        $rows=mysqli_fetch_array($result_register_final2);
        $arquivocopiado = $rows['path_arquivo'];
        $arquivo2 = $pastaforum/$arquivocopiado;
        if(copy($arquivocopiado, $pastaforum.$arquivocopiado)){
            header('Location: correct/correctcadastrado.html');
        }
        else{
            header('Location: error/errordefault.html');
        }
        
        

    }else
    header('Location: error/errordefault.html');
   
  }
}
}
}



?>