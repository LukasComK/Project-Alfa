<?php



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="forum.css" />
 <title>Pesquisa</title>
</head>
<body>
<?php
include_once('config.php');
$login = $_SESSION["id"];


      $tipo = $_POST["tipo"];
      $texto = $_POST["txt"];

	  ?>
	  
	   <h1>Pesquisa</h1>

      <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="40%" align="center" bgcolor="#E6E6E6"><strong>T&oacute;picos</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Autor</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Data/Hora</strong></td>

</tr>

<?php
      SWITCH($tipo){

      CASE "autor":
      $sql_code = "SELECT * FROM forum_q WHERE name='$texto'";
      $sql_query = $conn->query($sql_code) or die("1Falha na execução do código SQL: " . $conn->error);
      

     
     $t = 0;
     while($rows=mysqli_fetch_array($sql_query)){ // Inicia Loop
 ?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; $t = 1; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><br /> </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

</tr>

<?php
 }

   if($t == 0){
          print("<script language = 'javascript'>alert('N\u00e3o foi achado nenhum autor com este nome!');
         location.href = 'http://projectalfa.com.br/ForumAlfa/profissional.php';
         </script>");
         BREAK;
         }else {
         BREAK;
               }



      
      CASE "topico":

      $sql_code = "SELECT * FROM forum_q WHERE topic LIKE'%$texto%'";
      $sql_query = $conn->query($sql_code) or die("1Falha na execução do código SQL: " . $conn->error);
      
 
     

     $t = 0;
     while($rows=mysqli_fetch_array($sql_query)){ // Inicia Loop
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; $t = 1; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><br /> </td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>

</tr>

<?php

}
      if($t == 0){
          print("<script language = 'javascript'>alert('N\u00e3o foi achado nenhum t\u00f3pico com este nome!');
         location.href = 'http://projectalfa.com.br/ForumAlfa/profissional.php';
         </script>");
         BREAK;
         }else {
         BREAK;
               }



      


      CASE "mensagem":
      $sql_code = "SELECT q.id as c1,r.a_answer as c2,q.topic as c3,q.name as c4,r.a_datetime as c5 FROM forum_res r JOIN forum_q q ON r.question_id = q.id WHERE r.a_answer LIKE'%$texto%'";
      $sql_query = $conn->query($sql_code) or die("1Falha na execução do código SQL: " . $conn->error);
      


     

     $t = 0;
     while($rows=mysqli_fetch_array($sql_query)){ // Inicia Loop
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['c1']; $t = 1; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['c1']; ?>"><?php echo $rows['c3']; ?></a><br /></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['c4']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['c5']; ?></td>

</tr>

<p>
  <?php

}
      if($t == 0){
          print("<script language = 'javascript'>alert('N\u00e3o foi achado nenhuma referencia ao nome citado!');
         location.href = 'http://projectalfa.com.br/ForumAlfa/profissional.php';
         </script>");
         BREAK;
         }else {
         BREAK;
               }
      
      DEFAULT:
       print("<script language = 'javascript'>alert('N\u00e3o foi selecionada nenhuma op\u00e3\u00e3o!');
         location.href = 'http://projectalfa.com.br/ForumAlfa/profissional.php';
         </script>");
      BREAK;
      }
     
                         
	  ?>
</p>
<p>&nbsp;
  <a href="http://projectalfa.com.br/ForumAlfa/profissional.php">Voltar</a>
</p>
</body>
</html>







