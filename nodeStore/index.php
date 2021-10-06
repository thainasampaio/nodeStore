<?php
	include_once'crud/bd_connect.php';
	include_once'crud/create.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>NodeStore</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/fundo.jpg"> 
</head>
<body>

	<header class="cabecalho">
		<h1 class="logo">
			<a href="index.php" title="NodeStore"> NodeStore </a>
		</h1>

		<!-- barra de pesquisa -->
		<form method="post" action="barra_pesquisa.php">
			<input type="text" placeholder="Faça uma busca aqui" name="pesquisar">
			<button type="submit" value="Enviar"><i class="fas fa-search"></i></button>
		</form>
	</header>

	<nav class="menu">
		<ul>
			<li><a href="home.html"> Home </a></li>
			<li><a href="games.html"> Games </a></li>
			<li><a href="servicos.html"> Serviços </a></li>
			<li><a href="contato.html"> Contatos </a></li>
		</ul>
		<div class="social">
			<a href="#" class="btn-facebook"> <i class="fab fa-facebook-square fa-lg"></i> </a>
			<a href="#" class="btn-instagram"> <i class="fab fa-instagram fa-lg"></i> </a>
			<a href="#" class="btn-google"> <i class="fab fa-google fa-lg"></i> </a>
		</div>
	</nav>
	<main class="principal">
		<article class="sobre">
			<h2>Sobre nós</h2>
			<img src="img/fundo.jpg" alt="NodeStore">
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
				<br><br>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
			</p>
		</article>
		<aside class="onde-estamos">
			<h2>Onde estamos ?</h2>
			<p>Av. Holanda do Vale, Maracanaú - Ce</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.7468653832766!2d-38.63549258555348!3d-3.864398144960484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7532347bcaa35%3A0x46e04dffe0ee7b57!2sAv.+Padre+Jos%C3%A9+Holanda+do+Vale%2C+Maracana%C3%BA+-+CE!5e0!3m2!1spt-BR!2sbr!4v1563484568564!5m2!1spt-BR!2sbr"></iframe>
			<h2> Contatos </h2>
			<ul>
				<br>
				<li> <i class="fa fa-phone fa-lg"></i> (85) 98413 - 5685</li><br>
				<li> <i class="fab fa-whatsapp"></i> (85) 98413 - 5685</li><br>
				<li> <i class="fa fa-envelope fa-lg"></i> goesthaina6@gmail.com </li><br>
			</ul>
		</aside>
	</main>
	<section class="newsletter">
		<h3> Newsletter </h3>
		<p>Receba nossas promoções por e-mail!</p>
		<form action="crud/create.php" method="POST">
			<input type="text" name="nome" id="nome" placeholder="Seu nome">
			<input type="email" name="email" id="email" placeholder="Seu e-mail">
			<button type="submit" name="btn-cadastro"> Cadastrar </button>

		</form>
	</section>
	<footer class="rodape">
		<p>NodeStore - Todos os direitos reservados By: Thainá Goes
		</p>
				
	</footer>
</body>
</html>
