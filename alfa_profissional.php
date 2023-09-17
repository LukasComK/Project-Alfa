<?php

include('protectprofissional.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <title>Alfa delivery</title>
  <link href="alfa_css.css" rel="stylesheet">
  <link href="reset_css.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<link rel="icon" href="./assets/Alfanavlogo.png">


<!-- CORPO - CONTEÚDO -->
<body>

  <!-- CABEÇALHO PADRÃO (LOGO + MENU) -->

  <header class="cabecalho" id="idCabecalho">
    <div class="container">
      <div class="cabecalho__cadastro">


        <div class="cabecalho__fundoImagem">

          <img src="./assets/seta.png" alt="Entrar">
        </div>
        <a id="show-login"><?php echo $_SESSION['NomeProfissional']; ?></a>


        <div class="popup">
        <div class="close-btn">&times;</div>
          <h4>Meu Perfil / Informações</h4><br>
          <h1 align="center"> <img style="width: 150px;border-radius: 50%;" src="<?php echo $_SESSION['path_arquivo']; ?>"> </h1> 
          <label><b>Nome:</b> <?php echo $_SESSION['NomeProfissional']; ?></label><br>
          <label><b>CPF:</b> <?php echo $_SESSION['CPFProfissional']; ?></label><br>
          <label><b>CRM:</b> <?php echo $_SESSION['CRMProfissional']; ?></label><br>
          <label><b>instituto:</b> <?php echo $_SESSION['InstitutoProfissional']; ?></label><br>
          <label><b>Área:</b> <?php echo $_SESSION['AreaProfissional']; ?></label><br>
          <label><b>Número Para Contato:</b> <?php echo $_SESSION['ContatoProfissional']; ?></label><br>
          <label><b>Email:</b> <?php echo $_SESSION['EmailProfissional']; ?></label><br>
          
          <h4><a href="alfa_profissional_alterar.php">Deseja Alterar Algo? Clique aqui</a></h4><br>
          <h4><a href="logout.php">Logout</a></h4><br><br>
       </div>



       <div class="popup-register">
        <div class="close-btn-register">&times;</div>
        <div class="form">

          <h2>Tipo de conta</h2>

         <div class="conta_afiliado">
          <a id="show-accAfi">
          <img src="./assets/afl_acc.png" alt="Afiliado">
          </a>
        </div>

          <div class="conta_cliente">
            <a id="show-accCli">
           <img src="./assets/cnt_acc.png" alt="Cliente">
         </a>
         </div>

        <div class="conta_profissional">
          <a id="show-accPro">
          <img src="./assets/prf_acc.png" alt="Profissional">
          </a>
        </div><br><br><br><br>


      <div class="acc_desc">
        <p><b>Conta Afiliado </b></p>
        <p><b> ⠀   ⠀ ⠀⠀Conta Cliente </b></p>
        <p><b> ⠀ ⠀Conta Profissional </b></p>
      </div>
      </div>


    </div>


          <div class="popup-cli">
          <div class="close-btn-cli">&times;</div>
          <div class="form">
            <form method="post" action="ProcessarRegistro.php">
            <h2>Criar conta</h2>
            <div class="form-element">
              <label for="nome">Nome completo</label>
              <input type="text" id="NomeCliente" name="NomeCliente" required>
            </div>
               <div class="form-element">
              <label for="cpf">CPF</label>
              <input type="text" id="CpfCliente" name="CpfCliente" required>
            </div>
            <div class="form-element">
              <label for="contato">Número de contato</label>
              <input type="text" id="ContatoCliente" name="ContatoCliente" required>
            </div>
            <!--
            <h2>Endereço</h2>
            <div class="form-element">
              <label for="estado">Estado</label>
              <input type="text" id="estado">
            </div>
            <div class="form-element">
             <label for="cidade">Cidade</label>
              <input type="text" id="cidade">
            </div>
              <div class="form-element">
             <label for="bairro">Bairro</label>
              <input type="text" id="bairro">
            </div>
             <div class="form-element">
             <label for="cep">CEP</label>
              <input type="text" id="cep">
            </div>
              <div class="form-element">
             <label for="numero">Número</label>
              <input type="text" id="numero">
            </div>
              <div class="form-element">
             <label for="complemento">Complemento</label>
              <input type="text" id="complemento">
            </div>
          -->
            <h2>Conta</h2>
              <div class="form-element">
             <label for="email">Email</label>
              <input type="text" id="EmailCliente" name="EmailCliente" required>
            </div>
              <div class="form-element">
             <label for="senha">Senha</label>
              <input type="password" id="SenhaCliente" name="SenhaCliente" required>
            </div>
            <div class="form-element">
              <button type="submit"> Cadastrar </button>
            </form>
            </div>
          </div>
        </div>




          <div class="popup-afi">
          <div class="close-btn-afi">&times;</div>
          <div class="form">
            <h2>Criar conta</h2>
            <form method="post" action="ProcessarRegistroAfilial.php">
            <div class="form-element">
              <label for="nome_fantasia">Nome fantasia</label>
              <input type="text" id="NomeFantasia" name="NomeFantasia">
            </div>
               <div class="form-element">
              <label for="razao_social">Razão social</label>
              <input type="text" id="RazaoSocial" name="RazaoSocial" required>
            </div>
            <div class="form-element">
              <label for="representante">Representante</label>
              <input type="text" id="Representante" name="Representante" required>
            </div>
              <div class="form-element">
             <label for="cnpj">CNPJ</label>
              <input type="text" id="CNPJ" name="CNPJ">
            </div>
              <div class="form-element">
             <label for="num">Número de contato</label>
              <input type="text" id="ContatoAfiliado" name="ContatoAfiliado" required>
            </div>
              <div class="form-element">
             <label for="email">Email</label>
              <input type="text" id="EmailAfiliado" name="EmailAfiliado" required>
            </div>
              <p>A senha será fornecida por email! Fique atento e cheque sua caixa de spam.</p>
            <div class="form-element">
              <button type="submit"> Seja Afliado </button>
            </form>
            </div>
          </div>
        </div>









      <div class="cabecalho__logoAlfa">
        <figure>
          <img src = "./assets/alfa_logo.png" alt="Logo Alfa">
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
    <li><a class="a1" href="#">Início</a></li>
    <li><a class="a1" href="#">Recomendados</a></li>
    <li><a class="a1" href="#">Em promoção</a></li>
    <li><a class="a1" href="#">Acompanhe aqui!</a></li>
    <li><a class="a1"  href="ForumAlfa/profissional.php">Fórum</a></li>
    <li><a class="a1" href="#">Sobre</a></li>
  </ul>
</nav>



<main>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img class = "slideimg" src="./assets/img1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img class = "slideimg" src="./assets/img2.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img class = "slideimg" src="./assets/img3.jfif" style="width:100%">
    </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>

  <!-- CATEGORIAS -->
  <section class="sessao_categorias">
    <div class="categorias">      
      <a href=""> </a>
    </div>
    <div class="categorias">      
      <a href=""> </a>
    </div>
    <div class="categorias">      
      <a href=""> </a>
    </div>
    <div class="categorias">      
      <a href=""> </a>
    </div>
    <div class="categorias">      
      <a href=""> </a>
    </div>
  </section>

  <!-- FILTROS -->

  <section class="sessao_filtros">

   <p><a href="">Para retirar</a></p>
   <p><a href="">Distância</a></p>
   <p><a href="">24 Horas</a></p>
   <p><a href="">Melhor avaliação</a></p>
   <p><a href="">Melhor preço</a></p>
   <p><a href="">Mais vendidos</a></p>


 </section>


 <script type="text/javascript" src="alfa_js.js"> </script>


</main>
</body>
</html>