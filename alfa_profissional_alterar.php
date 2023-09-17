<?php
include('protectprofissional.php');
include('config.php');
$id = $_SESSION['id_profissional']
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
      <li><a class="a1" href="#">Início</a></li>
      <li><a class="a1" href="#">Recomendados</a></li>
      <li><a class="a1" href="#">Em promoção</a></li>
      <li><a class="a1" href="#">Acompanhe aqui!</a></li>
      <li><a class="a1"  href="#">Fórum</a></li>
      <li><a class="a1" href="#">Sobre</a></li>
    </ul>
  </nav>

  <div class="accountCli_info">

    <section class="sessao_categorias">
      <div class="categorias">   

        <a href=""> </a>
        <div class="cliente__fundoImagem">

          <img src="<?php echo $_SESSION['path_arquivo']; ?>" alt="Entrar">
        </div>

      </div>
    </section>
    <br><br>

    <h3 style="font-family: Montserrat;" align="center"><?php echo $_SESSION['NomeProfissional']; ?></h3><br><br>
    <h3 style="font-family: Montserrat;" align="center">Contato: <?php echo $_SESSION['ContatoProfissional']; ?> </h3>
    <h3 style="font-family: Montserrat;" align="center">Email: <?php echo $_SESSION['EmailProfissional']; ?> </h3>
    
    <p class="acc_link"><b><a href="">Instituto de atuação</a></b></p>
    <p class="acc_linkdesc"><?php echo $_SESSION['InstitutoProfissional']; ?></p>
    <p class="acc_link"><b><a href="">Área de atuação</a></b></p>
    <p class="acc_linkdesc"><?php echo $_SESSION['AreaProfissional']; ?></p>

    <p class="acc_link"><b><a id="show-altCli">Editar conta</a></b></p>
    <p class="acc_linkdesc">Altere suas informações</p>

    <p class="acc_link"><a id="show-excCli">Excluir conta</a></p>


    <p class="acc_link"><b><a href="logout.php">Sair</a></b></p>
  </div>

  <div class="popup-excCli">
    <div class="close-btnexcCli">&times;</div>
    <div class="form">
      <h2>:(</h2>
      <h3>Tem certeza que deseja excluir a conta?</h3>
      <div class="form-element">
   
       <button type="submit" class="voltar"><a style="text-align: center;font-size: 16px;color: #f5f5f5;" href="profissionaldeletar.php?id=<?php echo $id ?>">Sim</a></button>    
       <button type="reset" class="voltar"><a style="text-align: center;font-size: 16px;color: #f5f5f5;" href="alfa_cliente_alterar.php">Não</a></button>
   

     </div>
   </div>
 </div>

 <div class="popup-altCli">
  <div class="close-btnaltCli">&times;</div>
  <div class="form">
    <h3>Alterar dados</h3>
    <form method="post" action="profissionalalterar.php">
    <div class="form-element">
      <label for="nome">Seu ID Unico (Não é Possivel Alterar)</label>
      <input type="text" id="idprofissional" name="idprofissional" value="<?php echo $_SESSION['id_profissional']; ?>" readonly>
      <div class="form-element">
    <div class="form-element">
      <label for="nome">Nome completo</label>
      <input type="text" id="NomeNovoProfissional" name="NomeNovoProfissional" value="<?php echo $_SESSION['NomeProfissional']; ?>" placeholder="Novo usuário">
      <div class="form-element">
        <label for="contato">Número de contato</label>
        <input type="text" id="ContatoNovoProfissional" name="ContatoNovoProfissional" value="<?php echo $_SESSION['ContatoProfissional']; ?>" placeholder="Novo contato">
      </div>
      <div class="form-element">
        <label for="email">Email</label>
        <input type="text" id="EmailNovoProfissional" name="EmailNovoProfissional" placeholder="Novo email">
      </div>
      <div class="form-element">
        <label for="email">Confirme o email *</label>
        <input type="text" id="EmailNovoVeProfissional" name="EmailNovoVeProfissional">
      </div>
      <div class="form-element">
                        <label for="senha">Senha</label>
                        <input type="password" id="SenhaNovaProfissional" name="SenhaNovaProfissional" placeholder="Nova senha">
                    </div>
                    <div class="form-element">
                        <label for="senha">Confime a senha *</label>
                        <input type="password" id="SenhaNovaVeProfissional" name="SenhaNovaVeProfissional" >
                    </div>
                    <div class="form-element">
                      <button type="submit" style="text-align: center;font-size: 16px;color: #f5f5f5;background: #8973d9;border-radius: 10px;width: 100%;height: 40px;border: none;">Salvar</a></button>
                    </div>
                  </form>
    </div>
  </div>
</div>






<script> 

  document.querySelector(".popup-excCli .voltar").addEventListener("click",function(){

    document.querySelector(".popup-excCli").classList.remove("active");

  });

  document.querySelector("#show-excCli").addEventListener("click",function(){

    document.querySelector(".popup-excCli").classList.add("active");
     document.querySelector(".popup-altCli").classList.remove("active")

  });

  document.querySelector(".popup-excCli .close-btnexcCli").addEventListener("click",function(){

    document.querySelector(".popup-excCli").classList.remove("active");

  });




  document.querySelector("#show-altCli").addEventListener("click",function(){

    document.querySelector(".popup-altCli").classList.add("active");
     document.querySelector(".popup-excCli").classList.remove("active")

  });

  document.querySelector(".popup-altCli .close-btnaltCli").addEventListener("click",function(){

    document.querySelector(".popup-altCli").classList.remove("active");

  });

</script>

</main>
</body>
</html>