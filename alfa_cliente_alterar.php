<?php
include('protect.php');
include('config.php');
$id = $_SESSION['id']
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <title>Alfa delivery</title>
  <link href="alfa_css_account.css" rel="stylesheet">
  <link href="reset_css.css" rel="stylesheet">
  <link href="Alfa_css_footer.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

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

          <img src="./assets/seta.png">
        </div>
        <a id="show-login"><?php echo $_SESSION['NomeCliente']; ?></a>
        <div class="cabecalho__logoAlfa">
          <figure>
            <a href="index.php">
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
      <li><a class="a1" href="#">Início</a></li>
      <li><a class="a1" href="#">Recomendados</a></li>
      <li><a class="a1" href="#">Em promoção</a></li>
      <li><a class="a1" href="#">Acompanhe aqui!</a></li>
      <li><a class="a1"  href="ForumAlfa/usuario.php">Fórum</a></li>
      <li><a class="a1" href="#">Sobre</a></li>
    </ul>
  </nav>



  <div class="accountCli_info">

    <section class="sessao_categorias">
      <div class="categorias">   

        <a href=""> </a>
        <div class="cliente__fundoImagem">

          <img style="border-radius: 30%;width: 100px;" src="<?php echo $_SESSION['path_arquivo']; ?>" alt="Entrar">
        </div>

      </div>
    </section>

    <h3 class="user_center"><?php echo $_SESSION['NomeCliente']; ?></h3>
    <div class="align">
      <p><b>Contato:</b><?php echo $_SESSION['NumeroContatoCliente']; ?><br><strong>Email:</strong><?php echo $_SESSION['EmailCliente']; ?></p>

    </div>
    <div class="a">
      <div class = "user_opc_icon">
        <img src="./assets/local.png">
      </div>
      <div class="user_opc">
        <p class="acc_link"><b><a id="show-endCli">Adicionar Endereço</a></b></p>
        <p class="acc_link"><b><a id="show-endCli">Endereços:<br></a></b></p>
        <p class="acc_linkdesc"><?php echo $_SESSION['EnderecoCliente']; ?></p><br>

        <?php

        $sql_code2 = "SELECT * FROM ClienteEnderecos WHERE id_cliente='$id'";
        $sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
        
        
        while($rows=mysqli_fetch_array($sql_query_r)){
        ?>        
        <p class="acc_linkdesc"><?php echo $rows['EnderecoCompleto']; ?></p><br>
        <?php
        } ?>



        
      </div>
    </div><br>
    <div class="a">
      <div class = "user_opc_icon">
        <img src="./assets/carteira.png">
      </div>
      <div class="user_opc">
        <p class="acc_link"><b><a id="show-endCli">Carteira</a></b></p>
        <p class="acc_linkdesc">Suas formas de pagamento</p>
      </div>
    </div><br>

    <div class="a">
      <div class = "user_opc_icon">
        <img src="./assets/editar.png">
      </div>
      <div class="user_opc">
        <p class="acc_link"><b><a id="show-altCli">Editar conta</a></b></p>
        <p class="acc_linkdesc">Altere suas informações</p>
      </div>
    </div>

    <p class="acc_link"><a id="show-excCli">Excluir conta</a></p>
    <p class="acc_link"><b><a href="logout.php">Sair</a></b></p>
  </div>

  <div class="popup-endCli">
    <div class="close-btnendCli">&times;</div>
    <div class="form">
      <h3>Endereços</h3>
      <div class="form-element">
       <button id="show-addend">Adicionar endereço</button>
     </div>
   </div>
 </div>
</div>

<div class="popup-addend">
  <div class="close-addend">&times;</div>
  <div class="form">
    <h3>Adicionar endereço</h3> 
    <form method="post" action="addendereco.php" >
    <div class="form-element">
        <label for="Cidade">Estado</label>
        <input type="text" id="Estado" name="Estado" required>
    </div>
    <div class="form-element">
      <label for="Cidade">Cidade</label>
      <input type="text" id="Cidade" name="Cidade" required>
      <div class="form-element">
        <label for="Bairro">Bairro</label>
        <input type="text" id="Bairro" name="Bairro" required>
      </div>
      <div class="form-element">
        <label for="CEP">CEP</label>
        <input type="text" id="CEP" name="CEP" required>
      </div>
      <div class="form-element">
        <label for="Endereço">Endereço</label>
        <input type="text" id="Endereco" name="Endereco" required>
      </div>
      <div class="form-element">
        <label for="Num">Número</label>
        <input type="text" id="Num" name="Num" required>
      </div>
      <div class="form-element">
        <label for="Comp">Complemento</label>
        <input type="text" id="Comp" name="Comp">
      </div>
      <div class="form-element">
        <button type="submit">Adicionar</button> 
      </div>
    </form>
    </div>
  </div>
</div>



<div class="popup-excCli">
  <div class="close-btnexcCli">&times;</div>
  <div class="form">
    <h2>:(</h2>
    <h3>Tem certeza que deseja excluir a conta?</h3>
    <div class="form-element">
      <button type="submit" class="voltar"><a style="text-align: center;font-size: 16px;color: #f5f5f5;" href="clientedeletar.php?id=<?php echo $id ?>">Sim</a></button> 
     <button type="submit" class="voltar" id="nao">Não</button>
   </div>
 </div>
</div>

<div class="popup-altCli">
  <div class="close-btnaltCli">&times;</div>
  <div class="form">
    <h3>Alterar dados</h3>
    <form method="post" action="clientealterar.php">
    <div class="form-element">
      <label for="nome">Nome completo</label>
      <input type="text" value="<?php echo $_SESSION['NomeCliente']; ?>" id="NomeNovoCliente" name="NomeNovoCliente" placeholder="Novo usuário">
      <div class="form-element">
        <label for="contato">Número de contato</label>
        <input type="text" value="<?php echo $_SESSION['NumeroContatoCliente']; ?>" id="ContatoNovoCliente" name="ContatoNovoCliente" placeholder="Novo contato">
      </div>
      <div class="form-element">
        <label for="email">Email</label>
        <input type="text" id="EmailNovoCliente" name="EmailNovoCliente" placeholder="Novo email">
      </div>
      <div class="form-element">
        <label for="email">Confirme o email *</label>
        <input type="text" id="EmailNovoVeCliente" name="EmailNovoVeCliente">
      </div>
      <div class="form-element">
        <label for="senha">Senha</label>
        <input type="password" id="SenhaNovaCliente" name="SenhaNovaCliente" placeholder="Nova senha">
      </div>
      <div class="form-element">
        <label for="senha">Confime a senha *</label>
        <input type="password" id="SenhaNovaVeCliente" name="SenhaNovaVeCliente" >
      </div>
      <div class="form-element">
        <button type="submit">Salvar</button> 
        </form>
      </div>
    </div>
  </div>
</div>






<script> 

  /* EXCLUIR CONTA */

  document.querySelector(".popup-excCli #nao").addEventListener("click",function(){

    document.querySelector(".popup-excCli").classList.remove("active");

  });

  document.querySelector("#show-excCli").addEventListener("click",function(){

    document.querySelector(".popup-excCli").classList.add("active");
    document.querySelector(".popup-altCli").classList.remove("active")
    document.querySelector(".popup-endCli").classList.remove("active")
    document.querySelector(".popup-addend").classList.remove("active")



  });

  document.querySelector(".popup-excCli .close-btnexcCli").addEventListener("click",function(){

    document.querySelector(".popup-excCli").classList.remove("active");

  });

  /* ALTERAR CONTA */

  document.querySelector("#show-altCli").addEventListener("click",function(){

    document.querySelector(".popup-altCli").classList.add("active");
    document.querySelector(".popup-excCli").classList.remove("active")
    document.querySelector(".popup-endCli").classList.remove("active")
    document.querySelector(".popup-addend").classList.remove("active")

  });

  document.querySelector(".popup-altCli .close-btnaltCli").addEventListener("click",function(){

    document.querySelector(".popup-altCli").classList.remove("active");

  });

  /* ADICIONA ENDEREÇO */

  document.querySelector("#show-endCli").addEventListener("click",function(){


    document.querySelector(".popup-endCli").classList.add("active");
    document.querySelector(".popup-excCli").classList.remove("active");
    document.querySelector(".popup-altCli").classList.remove("active")

  });

  document.querySelector(".popup-endCli .close-btnendCli").addEventListener("click",function(){

    document.querySelector(".popup-endCli").classList.remove("active");

  });

  /* ---- */


  document.querySelector("#show-addend").addEventListener("click",function(){


    document.querySelector(".popup-addend").classList.add("active");
    document.querySelector(".popup-excCli").classList.remove("active");
    document.querySelector(".popup-endCli").classList.remove("active");
    document.querySelector(".popup-altCli").classList.remove("active")

  });

  document.querySelector(".popup-addend .close-addend").addEventListener("click",function(){

    document.querySelector(".popup-addend").classList.remove("active");


  });




</script>

<div class="footer-clean">
  <footer>
    <div class="container">
      <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-instagram"></i></a>
        <p class="copyright">Alfa Delivery © 2022</p>
      </div>
    </div>
  </div>
</footer>
</div>

</main>
</body>
</html>