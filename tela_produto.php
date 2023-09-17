<?php

include('protect.php');
include('config.php');
$id=$_GET['id'];
$id_cliente = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <title>Alfa delivery</title>
  <link href="alfa_css_homeacc.css" rel="stylesheet">
  <link href="reset_css.css" rel="stylesheet">
  <link href="Alfa_css_footer.css" rel="stylesheet">
  <link rel="stylesheet" href="carrinho.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

  <style type="text/css">

    .pcontrol, .spcontrol, .hcontrol{
      display: none;
    }

    .secaoPratosDestaque__itemPrato{
      box-shadow: 0px 0px 0px 0px rgba(0,0,0, 0);
      margin-left: 0px
    }

  </style>
</head>
<link rel="icon" href="../assets/Alfanavlogo.png">


<!-- CORPO - CONTEÚDO -->
<body>

  <!-- CABEÇALHO PADRÃO (LOGO + MENU) -->

  <header class="cabecalho" id="idCabecalho">
    <div class="container">
      <div class="cabecalho__cadastro">

        <div class="cabecalho__fundoImagem">
          <img src="../assets/cnt_cli.png" alt="Entrar">
        </div>
        <p><a id="conta" href="alfa_cliente_alterar.php"><?php echo $_SESSION['NomeCliente']; ?></a></p>

        <div class="cabecalho__logoAlfa">
          <figure>
            <a href="../Alfa_homeCliente.html">
             <img src = "../assets/alfa_logo.png" alt="Logo Alfa">
           </a>
           <figcaption>Logo Alfa</figcaption>
         </figure>
       </div>

       <div class="Caixa__pesquisar">
         <button>
           <img src="../assets/lupa.png" alt="">
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
  <?php

		$sql_code2 = "SELECT * FROM carrinho WHERE id_cliente='$id_cliente'";
		$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
		
?>

  <div id="mySidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" id="closebtn">&times;</a>
   <div class="secaoCarrinho__conteudo">
    <!-- LISTA DE ITENS NO CARRINHO -->
    <ul class="secaoCarrinho__listaItens">
      <?php
		while($rows=mysqli_fetch_array($sql_query_r)){
		$valor = $rows['ValorProduto'];
		$total += $valor;
			?>
      <p><font size="5" color="purple">Produto: </font> <font size="5"><?php echo $rows['NomeProduto']; ?></font><br> <font size="5" color="purple">Preço: </font><font size="5">R$<?php echo $rows['ValorProduto']; ?></font><a style="text-decoration: none; color: black;" href="excluircarrinho.php?id=<?php echo $rows['id_carrinho']; ?>">&nbsp;&nbsp;<img style="background-color: #b80000; border-radius: 50%; width: 25px; " src="assets/erro.png"> </a> </p><br>

		<?php
		} ?>
    </ul>
    <div class="secaoCarrinho__total">
      <p>Total</p>
      <span><?php echo $total ?></span>
    </div>

    <div class="secaoCarrinho__formaPagamento">
        <a href="finalizarcarrinho.php?id=<?php echo $rows['id_produto']; ?>"><button id="finalizar" style="font-size: 18px; text-decoration:none;" class="add-cart">Finalizar
        </button></a>
     </div>
  </div>
</div>
<div class="carrinho_icone">
 <a id="opennav">
   <div class="carrinho_fundoImagem">
     <img src="../assets/carrinho.png" alt="Entrar">
   </div>
 </a>
</div>
<script>
  document.getElementById("opennav").addEventListener("click", function() {
    document.getElementById("mySidenav").style.width = "550px";
  })

  document.getElementById("closebtn").addEventListener("click", function() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  })
</script>

<main>
  <?php

$sql_code2 = "SELECT * FROM produtos WHERE id_produto='$id'";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);


$rows=mysqli_fetch_array($sql_query_r)
?>
<img class="produto-img" style="width: 340px;" src="<?php echo $rows['path_arquivo']; ?>">

<div class="produto-info">
    
    <p class="nome-farma"><img style="width: 75px;border-radius: 50%;" class="farma-logo-prod" src="<?php echo $rows['foto_perfil']; ?>"> <?php echo $rows['FornecedorProduto']; ?> </p><br>
    <h1 style="font-size: 42px;"><?php echo $rows['NomeProduto']; ?></h1>
    <p class="produto-infoDesc"><b>Descrição:</b><?php echo $rows['DescricaoProduto']; ?>
      <p class="produto-infoDesc"><b>Conteúdo:</b> <?php echo $rows['NomeProduto']; ?></p>
      <p class="produto-infoDesc">Unidades: <?php echo $rows['QuantidadeProduto']; ?></p>
      <h2 style="color: purple">R$<?php echo $rows['ValorProduto']; ?></h2>
    </div>
    <br>
    
    <a style="font-size: 24px; text-decoration:none;" class="add-cart" href="addcarrinho.php?id=<?php echo $rows['id_produto']; ?>">Adicionar Ao Carrinho</a>

    <section class="produtos-section">
     <div class="produto-link">
       <ul class="produto"></ul>
     </div>
   </section>


   <script type="text/javascript" src="../alfa_js.js"> </script>

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

<script type="text/javascript">

 document.getElementById("opennav").addEventListener("click", function() {
   document.getElementById("mySidenav").style.width = "550px";
 })

 document.getElementById("closebtn").addEventListener("click", function() {
   document.getElementById("mySidenav").style.width = "0";
   document.getElementById("main").style.marginLeft = "0";
 })


 const menuProdutos = [
 {
  id: 0,
  nome: 'Sabonete Flora',
  preco: 3.50,
  categoria: 'higiene',
  imagem: './assets/sabão1.png',
  link: './InterfaceDoProduto/tela_produto.html'
},
];

let listaDestaque = document.querySelector(".produto")
let listaCarrinho = document.querySelector('.secaoCarrinho__listaItens');

const containerTotal = document.querySelector('.secaoCarrinho__total > span');

function construirLayoutPratos(ulContainer, item, classePrato){

  let li = document.createElement("li")
  let a = document.createElement("a")
  let div = document.createElement("div")
  let h3 = document.createElement("h3")
  h3.className = "hcontrol";
  h3.innerText = item.nome

  let span = document.createElement("span")
  span.className = "spcontrol";
  span.innerText =  item.preco.toFixed(2) 

  let p = document.createElement("p")
  p.className = "pcontrol";
  p.innerText = "R$"



  let spanbtn = document.createElement("span")
  spanbtn.textContent = 'ㅤ';

  let divbtn = document.createElement("div")
  divbtn.className = "cart";
  let svg = document.createElement("svg")
  svg.setAttribute("viewBox","0 0 36 26")

  let polyline = document.createElementNS("http://www.w3.org/2000/svg","polyline")
  polyline.setAttributeNS("polyline","points","1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5")

  let polyline1 = document.createElementNS("http://www.w3.org/2000/svg","polyline")
  polyline1.setAttributeNS("polyline","points","15 13.5 17 15.5 22 10.5")

  li.appendChild(a)
  button.dataset.id = item.id;
    
    div.appendChild(h3)
    div.appendChild(p)
    div.appendChild(span)

    a.appendChild(div)
    div.appendChild(button)
    button.appendChild(spanbtn)
    button.appendChild(divbtn)
    divbtn.appendChild(svg)
    svg.appendChild(polyline)
    svg.appendChild(polyline1)

    li.classList.add(classePrato)
    ulContainer.appendChild(li)

    button.addEventListener('click', adicionarNoCarrinho);

    document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
     if(!button.classList.contains('loading')) {
       button.classList.add('loading');
       setTimeout(() => button.classList.remove('loading'), 3700);
     }
     e.preventDefault();
   }));

  }

  for(let cont = 0; cont < menuProdutos.length; cont++){
    let item = menuProdutos[cont]

    construirLayoutPratos(listaDestaque,item, "secaoPratosDestaque__itemPrato")
  }

  function construirLayoutCarrinho(item) {
    const li = document.createElement('li');
    const div = document.createElement('div');
    const h3 = document.createElement('h3');
    const span = document.createElement('span');
    const p = document.createElement('p');
    const button = document.createElement('button');

    h3.innerText = item.nome;
    span.innerText = item.preco.toFixed(2);
    button.innerText = 'Remover';

    div.appendChild(h3);
    div.appendChild(span);

    li.appendChild(div);
    li.appendChild(button);

    li.classList.add('secaoCarrinho__item');

    listaCarrinho.appendChild(li);

    button.addEventListener('click', removerDoCarrinho);
  }

  function adicionarNoCarrinho(evento) {

    const elementoClicado = evento.currentTarget;
    const idElementoClicado = elementoClicado.dataset.id;

    const pratoSelecionado = menuProdutos[idElementoClicado];

    construirLayoutCarrinho(pratoSelecionado);
    atualizarTotal();
  }

  function removerDoCarrinho(evento) {
    const elementoClicado = evento.currentTarget;
    const elementoPai = elementoClicado.parentElement;

    elementoPai.remove();
    atualizarTotal();
  }

  function atualizarTotal() {
    const listaPrecos = document.querySelectorAll('.secaoCarrinho__item > div > span');

    let total = 0;
    for(let contador = 0; contador < listaPrecos.length; contador++){
      const elementoSpan = listaPrecos[contador];
      const precoNumero = Number(elementoSpan.innerText);
      total += precoNumero;
    }

    total = total.toFixed(2);
    containerTotal.innerText = total;
  }

</script>
</body>
</html>