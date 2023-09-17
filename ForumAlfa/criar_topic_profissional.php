<?php

include('protectprofissional.php');

?>
<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <title>Alfa delivery</title>
  <link href="forum.css" rel="stylesheet">
  <link href="alfa_css_homeacc.css" rel="stylesheet">
  <link href="reset_css.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<link rel="icon" href="./assets/Alfanavlogo.png">

<body>

    <header class="cabecalho" id="idCabecalho">
      <div class="container">
        <div class="cabecalho__cadastro">


          <div class="cabecalho__fundoImagem">

            <img src="./assets/seta.png">
          </div>
          <p><a id="conta" href="http://projectalfa.com.br/alfa_profissional_alterar.php"><?php echo $_SESSION['NomeProfissional']; ?></a></p>

          <div class="cabecalho__logoAlfa">
            <figure>
              <a href="http://projectalfa.com.br/index.php">
               <img src = "./assets/alfa_logo.png" alt="Logo Alfa">
             </a>
             <figcaption>Logo Alfa</figcaption>
           </figure>
         </div>

         <div class="Caixa__pesquisar">
           <button>
             <img src="./assets/lupa.png" alt="">
           </button>
           <input type="text" >
         </div>
       </div>
     </header>
     <nav class="linebar">
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
    <li><a class="a1" href="http://projectalfa.com.br/index.php">Início</a></li>
    <li><a class="a1" href="#">Recomendados</a></li>
    <li><a class="a1" href="#">Em promoção</a></li>
    <li><a class="a1" href="#">Acompanhe aqui!</a></li>
    <li><a class="a1"  href="profissional.php">Fórum</a></li>
    <li><a class="a1" href="#">Sobre</a></li>
      </ul>
    </nav>

    <main>
<?php
include_once('config.php');

$topic=$_POST['topic'];
$detail=$_POST['detail'];

$login = $_SESSION["id_profissional"];

           ?>
           
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" class="tabela-novotp">
<tr>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="add_topic_profissional.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="borda1">
<tr>

<td colspan="3" class="borda"><strong>Criar Novo T&oacute;pico</strong> </td>
</tr>

<tr>
    <td width="14%"><strong>Título</strong></td>
    <td width="84%"><input class="titulo" name="topic" type="text" id="topic" size="50" /></td>
    
    <tr>
    <td><strong>Detalhes</strong></td>
    <td><textarea class="detalhes" name="detail" cols="50" rows="3" id="detail"></textarea></td>
    </tr>
</table>
<tr>
<td valign="top"><strong>Imagem (Opcional)<input style="width: 200px;
    height: 10px;
    background-color: rgb(137, 115, 217);
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    text-align: center;
    display: block;
    margin-top: 10px;
    cursor: pointer;
    padding: 20px 10px;
    transition: all 0.5s ease 0s;
    border-radius: 10px;" type="file" name="imagem"></strong></td>

</tr>


<tr>

<td><input style="top: 10px;
    right: 10px;
    width: 130px;
    height: 40px;
    background: #40e637;
    font-size: 15px;
    text-transform: uppercase;
    text-align: center;
    border:2px solid #40e637;
    color: #eee;
    text-align: center;
    border-radius: 15px;
    margin-top: 20px;
    margin-left:20px;
    cursor: pointer;
    -webkit-appearance: none; 
    -moz-appearance: none; " type="submit" name="Submit" onclick="validaForm5 ()" value="Enviar"/> 
    
    <input style="top: 10px;
    right: 10px;
    width: 130px;
    height: 40px;
    background: #40e637;
    font-size: 15px;
    text-transform: uppercase;
    text-align: center;
    border:2px solid #40e637;
    color: #eee;
    text-align: center;
    border-radius: 15px;
    margin-top: 20px;
    margin-left:20px;
    cursor: pointer;
    -webkit-appearance: none; 
    -moz-appearance: none; " type="reset" name="Submit2" value="Limpar"/>
<input style="top: 10px;
right: 10px;
width: 130px;
height: 40px;
background: #7866a7;
font-size: 15px;
text-transform: uppercase;
text-align: center;
border:2px solid #7866a7;
color: #eee;
text-align: center;
border-radius: 15px;
margin-top: 20px;
margin-left:20px;
cursor: pointer;
-webkit-appearance: none; 
-moz-appearance: none; " type="button" name="Submit3" value="Home" onclick="window.location.href='http://projectalfa.com.br/ForumAlfa/profissional.php'"/>
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</body>
</html>

