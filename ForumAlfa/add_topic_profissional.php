<?php

include('protectprofissional.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<title>Adicionar T&oacute;pico</title>
</head>
<body>
<?php
include_once('config.php');

$topic=$_POST['topic'];
$detail=$_POST['detail'];

$login = $_SESSION["id_profissional"];


$datetime=date("d/m/y h:i:s");

$sql_code = "SELECT * from FormRegisterProfissional where id_profissional = '$login' ";
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);





        $row = mysqli_fetch_assoc($sql_query);
        
$nome = $row["NomeProfissional"];
$fotoperfil = $row["path_arquivo"];
$area = $row["AreaProfissional"];
$instituto = $row["InstitutoProfissional"];
$crm = $row["CRMProfissional"];

if(isset($_FILES['imagem'])){
        $arquivo = $_FILES['imagem'];
      
    
         if($arquivo['size'] > 5000000)
          die("arquivo muito grande");
          $pasta = "ImagensForum/";
          $NomeDoArquivo = $arquivo['name'];
          $NovoNomeDoArquivo = uniqid();
          $extensao = strtolower(pathinfo($NomeDoArquivo,PATHINFO_EXTENSION));      
          $path = $pasta . $NovoNomeDoArquivo . "." . $extensao;   
          $moveUpload = move_uploaded_file($arquivo["tmp_name"], $path);  
          if($moveUpload){
                $sql_code = "INSERT INTO forum_q (topic, detail, name,foto_perfil,AreaProfissional,InstitutoProfissional,CRMProfissional,imagem)VALUES('$topic', '$detail', '$nome', '$fotoperfil','$area','$instituto','$crm','$path')";
                $sql_query_into = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
          }
           else{
                $sql_code = "INSERT INTO forum_q (topic, detail, name,foto_perfil,AreaProfissional,InstitutoProfissional,CRMProfissional)VALUES('$topic', '$detail', '$nome', '$fotoperfil','$area','$instituto','$crm')";
                $sql_query_into = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
           }
        


  
           if($sql_query_into){
                  header("Location: http://projectalfa.com.br/ForumAlfa/profissional.php");           
                }
                  else {
                         echo "ERRO";
                       }
        }   





?>
</body>
</html>

