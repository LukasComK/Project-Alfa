<!-- 
<?php

include('protect.php');

?> -->

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

<!-- <?php
    
    include_once('config.php');
  
   

    $tbl_name="forum_q";

    $sql_code = "SELECT * FROM forum_q ORDER BY id DESC";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);
       
    ?> -->


    <header class="cabecalho" id="idCabecalho">
      <div class="container">
        <div class="cabecalho__cadastro">


          <div class="cabecalho__fundoImagem">

            <img src="./assets/cnt_cli.png">
          </div>
          <p><a id="conta" href="http://projectalfa.com.br/alfa_cliente_alterar.php"><?php echo $_SESSION['NomeCliente']; ?></a></p>

          <div class="cabecalho__logoAlfa">
            <figure>
              <a href="Alfa_homeCliente.html">
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
    <li><a class="a1" href="Alfa_home.html">Início</a></li>
    <li><a class="a1" href="#">Recomendados</a></li>
    <li><a class="a1" href="#">Em promoção</a></li>
    <li><a class="a1" href="#">Acompanhe aqui!</a></li>
    <li><a class="a1"  href="usuario.php">Fórum</a></li>
    <li><a class="a1" href="#">Sobre</a></li>
      </ul>
    </nav>

    <main>



      <div class="tabela">
        <h2>Fórum</h2>
  <ul class="responsive-table">
  <li class="table-header">
    <div class="col col-1">#</div>
    <div class="col col-2">Tópico</div>
    <div class="col col-3">Autor</div>
    <div class="col col-4">Data/hora</div>
  </li></ul>
  
<?php

while($rows=mysqli_fetch_array($sql_query)){ // Inicia Looping tabela linha
?>

  <ul class="responsive-table">
  <a class="tabela-link" href="view_topic.php?id= <?php echo $rows['id']?>">
    <li class="table-row">
      <div class="col col-1" data-label="#"><?php echo $rows['id']; ?></div>
      <div class="col col-2" data-label="Tópico"><?php echo $rows['topic']; ?></div>
      <div class="col col-3" data-label="Autor"><?php echo $rows['name']; ?><p style="color:purple;"><?php 
        echo empty($rows['AreaProfissional']) ? $rows['AreaProfissional'] : "($rows[AreaProfissional])";
        ?></p></div>
        <div class="col col-4" data-label="Data/hora"><?php echo $rows['datetime']; ?></div>
      </li>
    </a>
  </ul>
</div>
<?php

}

?>

<tr>
  <td><a class="criar-topico" href="criar_tp.php"><strong>Criar Novo Tópico</strong> </a></td>
</tr>


<h4 class="pesquisa-titulo">Encontrar tópico</h4><br />
<form class="topico-pesquisa"action="pesquisa.php" method="post" name="pesquisa" onsubmit="return validaForm3()">
 <tr>
   <td valign="top" nowrap="nowrap" width="100%">


    <table cellspacing="0" cellpadding="2" border="0" width="100%">

     <tbody>


      <tr class="borda">
        <td align="right"></td>

        <td>

          <input id="txt" type="text" name="txt" class="novo" value="" /><br>

          <input class="buscar-topico" type="submit" value="Procurar"/><br>
        </td>
      </tr>

      <tr class="borda">
        <td align="right"></td>

        <td>
          <input class="filtro-topico" type="radio" value="autor" id="name"name="tipo" /> Autor
          <input type="radio" value="topico"  name="tipo" />T&oacute;pico
          <input  type="radio" value="mensagem" name="tipo" /> Corpo das Mensagens
        </td>
      </tr>
    </tbody>
  </table>
</tr>
</form>

<script type="text/javascript" src="alfa_js.js"> </script>

</main>
</html>
