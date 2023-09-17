<?php

session_start();
if (isset($_SESSION['id'])){
    echo 'está logado';
    header("Location: alfa_cliente.php");
} else if (isset($_SESSION['id_afiliado'])){
  echo 'está logado';
  header("Location: alfa_afiliado.php");
}
else if (isset($_SESSION['id_profissional'])){
  echo 'está logado';
  header("Location: alfa_profissional.php");
}




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

    <header class="cabecalho" id="idCabecalho">
        <div class="container">
            <div class="cabecalho__cadastro">
                <div class="cabecalho__fundoImagem">
                    <img src="./assets/seta.png" alt="Entrar">
                </div>
                <a id="show-login">Login/Cadastro</a>

                <div class="cabecalho__logoAlfa">
                    <figure>
                        <img src="./assets/alfa_logo.png" alt="Logo Alfa">
                        <figcaption>Logo Alfa</figcaption>
                    </figure>
                </div>

                <div class="Caixa__pesquisar">
                    <button>
                        <img src="./assets/lupa.png" alt="">
                    </button>
                    <input type="text">
                </div>
            </div>

            <div class="popup">
                <div class="close-btn">&times;</div>
                <div class="form">
                    <h2>Entrar</h2>

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
                    </div>
                    <br><br><br><br>
                    <div class="acc_desc">
                        <p><b>⠀⠀Conta Afiliado </b></p>
                        <p><b> ⠀ ⠀ ⠀⠀Conta Cliente </b></p>
                        <p><b> ⠀⠀ ⠀Conta Profissional </b></p>
                    </div>

                </div>
            </div>

            <!-- CADASTRO DE CLIENTE -->

            <div class="popup-cli">
                <div class="close-btn-cli">&times;</div>
                <div class="form">
                    <h2>Entrar</h2>
                    <form method="post" action="LoginCliente.php">
                        <div class="form-element">
                            <label for="email">Email</label>
                            <input type="text" id="EmailLoginCliente" name="EmailLoginCliente"
                                placeholder="Insira email">
                        </div>
                        <div class="form-element">
                            <label for="senha">Senha</label>
                            <input type="password" id="SenhaLoginCliente" name="SenhaLoginCliente"
                                placeholder="Insira a senha">
                        </div>
                        <div class="form-element">
                            <input type="checkbox" id="lembrar">
                            <label for="lembrar">Lembre de mim</label>
                        </div>
                        <div class="form-element">
                            <a id="show-cliregister">Criar conta</a><br>
                            <a>Esqueceu a senha?</a>
                        </div>
                        <div class="form-element">
                            <button type="submit">Entrar na Alfa</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="popup-Cadcli">
            <div class="close-btn-Cadcli">&times;</div>
            <div class="form">
                <form method="post" enctype="multipart/form-data" action="ProcessarRegistro.php">
                    <h2>Criar conta</h2>
                    <div class="form-element">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="NomeCliente" name="NomeCliente" required>
                    </div>
                    <div class="form-element">
                        <label for="cpf">CPF</label>
                        <input type="text" id="CPFCliente" name="CPFCliente" required>
                    </div>
                    <h1 align="center"> <img style="width: 150px;border-radius: 50%;" src="./assets/icone_conta.png">
                    </h1>                                           
                        <h1 align="center"><input class="inputcustom" type="file" name="arquivo" id="arquivo" required></h1>
                    <div class="form-element">
                        <label for="contato">Número de contato</label>
                        <input type="text" id="ContatoCliente" name="ContatoCliente" required>
                    </div>
                    <div class="form-element">
                        <label for="contato">Endereço</label>
                        <input type="text" id="EnderecoCliente" name="EnderecoCliente" required>
                    </div>
                    <div class="form-element">
                        <label for="email">Email</label>
                        <input type="text" id="EmailCliente" name="EmailCliente" required>
                    </div>
                    <div class="form-element">
                        <label for="senha">Senha</label>
                        <input type="password" id="SenhaCliente" name="SenhaCliente" minlength="8" required>
                    </div>
                <div class="form-element">
                    <button type="submit">Entrar na Alfa</button>
                </form>
                </div>
                
            </div>
        </div>
        </div>

        <!-- CADASTRO DE AFILIADO  -->

        <div class="popup-afi">
            <div class="close-btn-afi">&times;</div>
            <div class="form">
                <h2>Entrar</h2>
                <div class="form-element">
                    <form method="post" action="LoginAfilial.php">
                        <label for="email">Email</label>
                        <input type="text" id="EmailLoginAfiliado" name="EmailLoginAfiliado" placeholder="Insira email">
                </div>
                <div class="form-element">
                    <label for="senha">Senha</label>
                    <input type="password" id="SenhaLoginAfiliado" name="SenhaLoginAfiliado"
                        placeholder="Insira a senha">
                </div>
                <div class="form-element">
                    <input type="checkbox" id="lembrar">
                    <label for="lembrar">Lembre de mim</label>
                </div>
                <div class="form-element">
                    <a id="show-afiregister">Criar conta</a><br>
                    <a>Esqueceu a senha?</a>
                </div>
                <div class="form-element">
                    <button type="submit">Entrar na Alfa</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="popup-Cadafi">
            <div class="close-btn-Cadafi">&times;</div>
            <div class="form">
                <form method="post" enctype="multipart/form-data" action="ProcessarRegistroAfilial.php">
                    <h2>Criar conta</h2>
                    <div class="form-element">
                        <label for="nome_fantasia">Nome fantasia</label>
                        <input type="text" id="NomeFantasia" name="NomeFantasia" required>
                    </div>
                    <h1 align="center"> <img style="width: 150px;border-radius: 50%;" src="./assets/icone_conta.png">
                    </h1>                                           
                        <h1 align="center"><input class="inputcustom" type="file" name="arquivo" id="arquivo" required></h1>
                    </h1>
                    <div>
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
                        <input type="text" id="CNPJ" name="CNPJ" required>
                    </div>
                    <div class="form-element">
                        <label for="num">Número de contato</label>
                        <input type="text" id="ContatoAfiliado" name="ContatoAfiliado" required>
                    </div>
                    <div class="form-element">
                        <label for="email">Email</label>
                        <input type="text" id="EmailAfiliado" name="EmailAfiliado" required>
                    </div>
                    <div class="form-element">
                        <label for="email">Senha</label>
                        <input type="text" id="SenhaAfiliado" name="SenhaAfiliado" minlength="8" required>
                    </div>
                    <div class="form-element">
                        <button type="submit">Seja Afiliado!</button>
                    </div>
                </form>
            </div>
        </div>
        </div>

        <!-- CADASTRO DE PROFISSIONAL -->

        <div class="popup-pro">
            <div class="close-btn-pro">&times;</div>
            <div class="form">
                <h2>Entrar</h2>
                <div class="form-element">
                    <form method="post" action="LoginProfissional.php">
                        <label for="email">Email</label>
                        <input type="text" id="EmailLoginProfissional" name="EmailLoginProfissional"
                            placeholder="Insira email">
                </div>
                <div class="form-element">
                    <label for="senha">Senha</label>
                    <input type="password" id="SenhaLoginProfissional" name="SenhaLoginProfissional"
                        placeholder="Insira a senha">
                </div>
                <div class="form-element">
                    <input type="checkbox" id="lembrar">
                    <label for="lembrar">Lembre de mim</label>
                </div>
                <div class="form-element">
                    <a id="show-proregister">Criar conta</a><br>
                    <a>Esqueceu a senha?</a>
                </div>
                <div class="form-element">
                    <button type="submit">Entrar na Alfa</button>
                </div>
                </form>
            </div>
        </div>

        <div class="popup-Cadpro">
            <div class="close-btn-Cadpro">&times;</div>
            <div class="form">
                <form method="post" enctype="multipart/form-data" action="ProcessarRegistroProfissional.php">
                    <h2>Criar conta</h2>
                    <div class="form-element">
                        <label for="nome_pro">Nome completo</label>
                        <input type="text" id="NomeProfissional" name="NomeProfissional" required>
                    </div>
                    <div class="form-element">
                        <label for="cpf_pro">CPF</label>
                        <input type="text" id="CPFProfissional" name="CPFProfissional" required>
                    </div>
                    <h1 align="center"> <img style="width: 150px;border-radius: 50%;" src="./assets/icone_conta.png">
                    </h1>                                           
                        <h1 align="center"><input class="inputcustom" type="file" name="arquivo" id="arquivo" required></h1>
                    <div class="form-element">
                        <label for="contato_pro">Número de contato</label>
                        <input type="text" id="ContatoProfissional" name="ContatoProfissional" required>
                    </div>
                    <div class="form-element">
                        <label for="crm">CRM</label>
                        <input type="text" id="CRM" name="CRM" required>
                    </div>
                    <div class="form-element">
                        <label for="inst_atu">Instituição de atuação</label>
                        <input type="text" id="InstitutoAtuacao" name="InstitutoAtuacao" required>
                    </div>
                    <div class="form-element">
                        <label for="area">Área (ginecologia, elergologia, psicologia, fisioterapia...)</label>
                        <!-- MUDAR PARA DROPDOWN LIST -->
                        <input type="text" id="Area" name="Area" required>
                    </div>
                    <div class="form-element">
                        <label for="email_pro">Email</label>
                        <input type="text" id="EmailProfissional" name="EmailProfissional" required>
                    </div>
                    <div class="form-element">
                        <label for="senha_pro">Senha</label>
                        <input type="password" id="SenhaProfissional" name="SenhaProfissional" minlength="8" required>
                    </div>
                    </p>
                    <div class="form-element">
                        <button type="submit">Entre no time!</button>
                    </div>
                </form>
            </div>
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
            <li><a class="a1" href="#">Fórum</a></li>
            <li><a class="a1" href="#">Sobre</a></li>
        </ul>
    </nav>
    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img class="slideimg" src="./assets/img1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img class="slideimg" src="./assets/img2.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img class="slideimg" src="./assets/img3.jfif" style="width:100%">
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
            <p><a href="validaradm.php">Login ADM</a></p>
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