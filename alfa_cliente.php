<?php

include('protect.php');
include('config.php');
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
	<link rel="stylesheet" href="carrinho.css">
	<link href="categoria.css" rel="stylesheet">
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

					<img src="./assets/cnt_cli.png" alt="Entrar">
				</div>
				<p><a id="conta" href="alfa_cliente_alterar.php"><?php echo $_SESSION['NomeCliente']; ?></a></p>




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
				<li><a class="a1" href="#">Início</a></li>
				<li><a class="a1" href="#">Recomendados</a></li>
				<li><a class="a1" href="#">Em promoção</a></li>
				<li><a class="a1" href="#">Acompanhe aqui!</a></li>
				<li><a class="a1" href="ForumAlfa/usuario.php">Fórum</a></li>
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
       <img src="./assets/carrinho.png" alt="Entrar">
    </div>
 </a>
</div>

		<script>
        document.getElementById("opennav").addEventListener("click", function() {
            document.getElementById("mySidenav").style.width = "450px";
        })

        document.getElementById("closebtn").addEventListener("click", function() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        })
    </script>






		<main>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img class = "slideimg" src="./assets/img1.jpg" style="width:100%">
				</div>
				<div class="mySlides fade">
					<img class = "slideimg" src="./assets/img3.jfif" style="width:100%">
				</div>

				<div class="mySlides fade">
					<img class = "slideimg" src="./assets/img1.jpg" style="width:100%">
				</div>

			</div>
			<br>

			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div><br>

			<!-- CATEGORIAS -->
			<section class="sessao_categorias">
				
				<div class="categoria_med"> 
					<a href="">
						<img class="img_destaque_med" src="./assets/medicamentos.png">
					</a>
				</div>
				<div class="categoria_bel">      <a href="">
					<img class="img_destaque_bel" src="./assets/beleza2.png">
				</a>
			</div>
			<div class="categoria_inf"> 
				<a href="">						<img class="img_destaque_inf" src="./assets/infantil.png">
				</div>
			</a>
			<div class="categoria_nat">      <a href="">
				<img class="img_destaque_nat" src="./assets/natural.png">
			</a>
		</div>
		<div class="categoria_hig">
			<a href="">    						<img class="img_destaque_hig" src="./assets/higiene.png">
			</a>
		</div>
	</section>

	<section class="desc_categorias">
		<p>Medicamentos</p>
		<p class="desc2">Beleza</p>
		<p class="desc3">Infantil</p>
		<p class="desc4">Natural</p>
		<p class="desc5">Higiene</p>
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


	<section class="produtos-section">
		<?php

		$sql_code2 = "SELECT * FROM produtos";
		$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);
		
		
		while($rows=mysqli_fetch_array($sql_query_r)){
		?>
		
		
					<div class="produtos-section">
						<a class="produto-link" href="tela_produto.php?id=<?php echo $rows['id_produto']; ?>">
							<div class="produto">
								<img class="produto-imgmn" src="<?php echo $rows['path_arquivo']; ?>">
								<div class="produto-desc">
									<p><?php echo $rows['NomeProduto']; ?></p>
									<p>Fornecedor: <?php echo $rows['FornecedorProduto']; ?></p>
									<p><b>R$<?php echo $rows['ValorProduto']; ?></b></p>
		
								</div>
							</div>
						</a>
		<?php
		} ?>
</section>

	<div class="footer-clean">
		<footer>
			<div class="container">
				<div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-instagram"></i></a>
					<p class="copyright">Alfa Delivery © 2022</p>
				</div>
			</div>
	</footer>
</div>


<script type="text/javascript" src="alfa_js.js"> </script>
<script type="text/javascript" src="produto_add_carrinho.js"></script>
</main>
</body>
</html>