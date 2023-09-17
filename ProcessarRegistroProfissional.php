<?php

include_once("config.php");

$NomeProfissional = filter_input(INPUT_POST, 'NomeProfissional', FILTER_SANITIZE_STRING);
$CPFProfissional = filter_input(INPUT_POST, 'CPFProfissional', FILTER_SANITIZE_STRING);
$ContatoProfissional = filter_input(INPUT_POST, 'ContatoProfissional', FILTER_SANITIZE_STRING);
$CRM = filter_input(INPUT_POST, 'CRM', FILTER_SANITIZE_STRING);
$InstitutoAtuacao = filter_input(INPUT_POST, 'InstitutoAtuacao', FILTER_SANITIZE_STRING);
$Area = filter_input(INPUT_POST, 'Area', FILTER_SANITIZE_STRING);
$EmailProfissional = filter_input(INPUT_POST, 'EmailProfissional', FILTER_SANITIZE_STRING);
$SenhaProfissional = filter_input(INPUT_POST, 'SenhaProfissional', FILTER_SANITIZE_STRING);


$result = $conn->query("SELECT COUNT(*) FROM FormRegisterProfissional WHERE EmailProfissional = '{$EmailProfissional}' ");
$row = $result->fetch_row();
if ($row[0] > 0) {
    header('Location: error/erroremailcadastrado.html');
} 
else {        
$result = $conn->query("SELECT COUNT(*) FROM FormRegisterProfissional WHERE CPFProfissional = '{$CPFProfissional}' ");
$row = $result->fetch_row();
if ($row[0] > 0) {
    header('Location: error/errorcpfcadastrado.html');
} 
else {
$result = $conn->query("SELECT COUNT(*) FROM FormRegisterProfissional WHERE ContatoProfissional = '{$ContatoProfissional}' ");
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
     
      if($extensao != "jpg" && $extensao != 'png')
      die("/ Tipo De Arquivo não aceito /");
      $path = $pasta . $NovoNomeDoArquivo . "." . $extensao;
    
      $moveUpload = move_uploaded_file($arquivo["tmp_name"], $path);
      if($moveUpload){
        $result_register = "INSERT INTO FormRegisterProfissional (NomeProfissional,CPFProfissional,path_arquivo,ContatoProfissional,CRMProfissional,InstitutoProfissional,AreaProfissional,EmailProfissional,SenhaProfissional) VALUES ('$NomeProfissional','$CPFProfissional','$path','$ContatoProfissional','$CRM','$InstitutoAtuacao','$Area','$EmailProfissional','$SenhaProfissional')";
        $result_register_final = mysqli_query($conn, $result_register) or die("Falha na execução do código SQL: " . $conn->error);

        $result_register2 = "SELECT * FROM FormRegisterProfissional WHERE CPFProfissional='$CPFProfissional' ";
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