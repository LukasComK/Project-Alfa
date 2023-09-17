<?php
include('protectprofissional.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<title>Alfa delivery</title>
	<link href="alfa_css_homeacc.css" rel="stylesheet">
	<link href="forum.css" rel="stylesheet">
	<link href="reset_css.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<link rel="icon" href="./assets/Alfanavlogo.png">


<!-- CORPO - CONTEÚDO -->
<body>


<?php
include_once('config.php');


$id=$_GET['id'];

$sql_code = "SELECT * FROM forum_q WHERE id='$id' ";
$sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);


$rows=mysqli_fetch_array($sql_query);
?>

<!-- CABEÇALHO PADRÃO (LOGO + MENU) -->

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

	<h2 class="forum-title-viewtopic">Fórum</h2>

	<div class="view-topic">
		<table cellpadding="0" cellspacing="1">
			<tr>
				<td><table width="100%" cellpadding="3" cellspacing="1">
					<tr>
						<img class="topico-user" style=" border-radius: 50%;" src="<?php echo $rows['foto_perfil']; ?>"> 

						<td class="borda3"><strong><p style="color:#7aef9d;">Autor:</p><?php  echo empty($rows['name']) ? $rows['name'] : "$rows[name]";?> <br>
                            <?php  echo empty($rows['CRMProfissional']) ? $rows['CRMProfissional'] : "CRM: $rows[CRMProfissional]<br>";?> 
                            <?php echo empty($rows['AreaProfissional']) ? $rows['AreaProfissional'] : "Área: $rows[AreaProfissional]<br>";?>
                            <?php echo empty($rows['InstitutoProfissional']) ? $rows['InstitutoProfissional'] : "Instituto: $rows[InstitutoProfissional]<br>";?></strong> 




<td class="borda3"><strong ><p style="color:#8973d9;">Tópico: <p><?php echo $rows['topic']; ?></p></p></strong></td>
</tr>
<tr>
    <td><img style="width: 300px;" src="<?php echo $rows['imagem']; ?>"></td>
</tr>
<tr>
	<td class="borda3"><p style="color:#8973d9;">Detalhes: 
		<p><?php echo $rows['detail']; ?></p></p></td>
	</tr>

	<tr>


	</tr>

	<tr>
		<td class="borda3"><strong>Data/Hora : </strong> <?php echo $rows['datetime']; ?></td>
	</tr>
</table></td>
</tr>
</table>
</div>

<br />

<?php


$sql_code2 = "SELECT * FROM forum_res WHERE question_id='$id' ";
$sql_query_r = $conn->query($sql_code2) or die("Falha na execução do código SQL: " . $conn->error);


while($rows=mysqli_fetch_array($sql_query_r)){
?>


	<div class="view-topic">
		<table  cellpadding="0" cellspacing="1">
			<tr>
				<td><table width="100%" cellpadding="3" cellspacing="1">
					<tr>
						<img class="topico-user" style=" border-radius: 50%;" src="<?php echo $rows['foto_perfil']; ?>"> 

						<td class="borda3"><strong>Resposta N°: <?php echo $rows['a_id']; ?><br><br><p style="color:#7aef9d;">Autor:</p><?php  echo empty($rows['a_name']) ? $rows['a_name'] : "$rows[a_name]";?><br>
<?php  echo empty($rows['a_crm']) ? $rows['a_crm'] : "CRM: $rows[a_crm]<br>";?> 
<?php echo empty($rows['a_area']) ? $rows['a_area'] : "Área: $rows[a_area]<br>";?>
<?php echo empty($rows['a_instituto']) ? $rows['a_instituto'] : "Instituto: $rows[a_instituto]<br>";?></strong><br>
						

</td>



</tr>
<tr>
    <td colspan="3"><img style="width: 300px; margin-left: auto; margin-right: auto;" src="<?php echo $rows['a_imagem']; ?>"></td>
</tr><tr>
	<td colspan="3" class="borda3"><p style="color:#8973d9;">Resposta: 
		<p><?php echo $rows['a_answer']; ?></p></p></td>
	</tr>

	<tr>


	</tr>

	<tr>
		<td class="borda3"><strong>Data/Hora : </strong> <?php echo $rows['a_datetime']; ?></td>
	</tr>
</table></td>
</tr>
</table>
</div>






 <?php
} ?>
<div class="view-topic">

<form name="form1" method="post" id="res" enctype="multipart/form-data" action="add_res_profissional.php">
<table width="200" border="0" align="center" cellpadding="0" cellspacing="1" class="borda2">
<tr>

<td>
<table width="50%" border="0" cellpadding="3" cellspacing="1" class="borda1">

<tr>
<td valign="top"><strong>Resposta</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="75" rows="10" ></textarea></td>
</tr>

<tr>
<td valign="top"><strong>Imagem (Opcional)</strong></td>
<td valign="top">:</td>
<td><input type="file" name="imagem"></td>
</tr>

<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"/></td>
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
</div>

<script type="text/javascript" src="alfa_js.js"> </script>

</main>
</body>
</html>

</body>
</html>
