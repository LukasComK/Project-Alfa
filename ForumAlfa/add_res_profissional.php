<?php

include('protectprofissional.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
<title>Adicionar Resposta</title>
</head>
<body>
<?php
include_once('config.php');
$login = $_SESSION["id_profissional"];

$id=$_POST['id'];

$sql_code = "SELECT MAX(a_id) AS Maxa_id FROM forum_res WHERE question_id='$id'";
$sql_query = $conn->query($sql_code) or die("1Falha na execução do código SQL: " . $conn->error);
$rows=mysqli_fetch_array($sql_query);


if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}


$a_answer=$_POST['a_answer'];




$sql_code2 = "SELECT * from FormRegisterProfissional where id_profissional = '$login' ";
$sql_query2 = $conn->query($sql_code2) or die("2Falha na execução do código SQL: " . $conn->error);
$row2 = mysqli_fetch_assoc($sql_query2);

$a_nome = $row2["NomeProfissional"];
$a_foto_perfil = $row2["path_arquivo"];
$a_area = $row2["AreaProfissional"];
$a_instituto = $row2["InstitutoProfissional"];
$a_crm = $row2["CRMProfissional"];

$datetime=date("d/m/y H:i:s");


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
            $sql_code = "INSERT INTO forum_res (question_id,a_id,a_name,a_answer,foto_perfil,a_area,a_instituto,a_crm,a_imagem)VALUES('$id', '$Max_id', '$a_nome', '$a_answer','$a_foto_perfil','$a_area','$a_instituto','$a_crm','$path')";
            $sql_query_into = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
      }
       else{
            $sql_code = "INSERT INTO forum_res (question_id,a_id,a_name,a_answer,foto_perfil,a_area,a_instituto,a_crm)VALUES('$id', '$Max_id', '$a_nome', '$a_answer','$a_foto_perfil','$a_area','$a_instituto','$a_crm')";
            $sql_query_into = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
       }
    


       ?><?php 
       if($sql_query_into){
         ?>
         <script type="text/javascript"> window.history.back()</script>
         <?php
       }
         else {
                echo "ERRO";
              }
}   





?>
</body>
</html>
