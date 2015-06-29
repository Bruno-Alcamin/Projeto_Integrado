<!DOCTYPE HTML>

<html>

<head>
<meta charset="utf-8">
<title>Painel</title>

<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css1.2/principal.css" rel="stylesheet">
<link href="css1.2/breadcrumbs.css" rel="stylesheet">
<link href="css1.2/footer.css" rel="stylesheet">
<link href="css1.2/painel.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>
<?php
	
		$ilogin = $_POST["login"]; 
		$isenha = $_POST["senha"];
		if(($ilogin =="adm@digiudo.com")&&($isenha == "digiudo")){
			echo "
		
<header>
	<a href='index.html' ><h1>Digiúdo</h1></a>	
	
	<p>
		<label>
		<span>minha conta</span>
		<select name='minha-conta'>
			<option value='ID'>Minha Conta</option>
			<option value='DADO'>MEUS DADOS</option>
			<option value='END'>MEU ENDEREÇO</option>
			<option value='ALTMAIL'>ALTERAR E-MAIL</option>
			<option value='ALTSEN'>ALTERAR SENHA</option>
			<option value='PRE'>PREFERÊNCIAS</option>
			<option value='Sair'>SAIR</option>
		</select>
		</label>
	</p>
	
	<div id='area-busca'>
	<label><span>Pesquisar</span>
	<input type='search' name='pesq' id='pesq' placeholder='Pesquisar' >
	</label>
	<a href='#'><img src='imagens/icones/busq.png' alt='iconebusca'></a>
	</div>
	
</header>


<nav id='menu-superior'>	
	<ul>
		<li><a href='#'><img src='imagens/icones/icone-painel.png' title='Painel' alt='Painel' class='icone'></a></li>
		<li><a href='#'><img src='imagens/icones/icone-comprar.png' title='Comprar' alt='Comprar' class='icone'></a></li>
		<li><a href='#'><img src='imagens/icones/icone-minhas-compras.png' title='Minhas Compras' alt='icone-minhas-compras' class='icone'></a></li>
		<li><a href='#'><img src='imagens/icones/icone-vender.png' title='Vender' alt='icone-vender' class='icone'></a></li>
		<li><a href='#'><img src='imagens/icones/icone-minhas-vendas.png' title='Minhas Vendas' alt='icone-minhas-vendas' class='icone'></a></li>
		<li><a href='#'><img src='imagens/icones/icone-meus-ganhos.png' title='Meus Ganhos' alt='icone-meus-ganhos' class='icone'></a></li>
		<li><a href='#'><img src='imagens/icones/icone-carrinho.png' title='Carrinho' alt='icone-carrinho' class='icone'></a></li>
	</ul>
	
</nav>
<div id='breadcrumbs'>
	<ul>
		<li><a href='index.html'>Home</a></li>
		<li>painel</li>
	</ul>
	
</div>

<main>
	<div id='perfil'>
		<img src='imagens/outras/foto-perfil.jpg' alt='Foto do Perfil' id='foto-perfil'>
		<h2>Olá Marco,</h2>
		<p>Bem vindo(a)</p>
	</div>
	
	<div id='ganhos'>
		<img src='imagens/outras/grafico-de-ganhos.png' alt='Foto do Perfil' id='foto-ganhos'>
		<h2>Ganhos da semana...</h2>
		<p>R$ 629,99</p>
		
	</div>
</main>

<aside id='principal'>
	<h2>Destaques aqui...</h2>
	<div class='anuncio'>
		
		<img src='imagens/comprar/energizesuavidasquared.jpg' alt='banner Lateral' class='anuncio1'>
		<h2 class='dest'>Energize Sua Vida</h2>
		<p class='tvideo'>eBook</p>
		<p>
			Por apenas:<br>
			<span>R$ 36,89.</span>
		</p>
		
		<input type='submit' value='Adicionar ao Carrinho' class='boton'>
		
		<a href='#' class='link'>Ver mais detalhes</a>
	</div>
	
	<div class='anuncio'>
		
		<img src='imagens/comprar/hm_dreamweaver.jpg' alt='banner Lateral' class='anuncio1'>
		<h2 class='dest'>Dreamweaver Total</h2>
		<p class='tvideo'>Video</p>
		<p>
			Por apenas:<br>
			<span>R$ 91,69.</span>
		</p>
		
		<input type='submit' value='Adicionar ao Carrinho' class='boton'>
		
		<a href='#' class='link'>Ver mais detalhes</a>
	</div>
	
	<div class='anuncio'>
		
		<img src='imagens/comprar/capahotmart.jpg' alt='banner Lateral' class='anuncio1'>
		<h2 class='dest'>Máquina de Falar Inglês</h2>
		<p class='tvideo'>Video</p>
		<p>
			Por apenas:<br>
			<span>R$ 56,99.</span>
		</p>
		
		<input type='submit' value='Adicionar ao Carrinho' class='boton'>
		
		<a href='#' class='link'>Ver mais detalhes</a>
	</div>
	<div class='anuncio'>
		
		<img src='imagens/comprar/AudioJusLogo.jpg' alt='banner Lateral' class='anuncio1'>
		<h2 class='dest'>Concurso Publico</h2>
		<p class='tvideo'>Áudio</p>
		<p>
			Por apenas:<br>
			<span>R$ 11,59.</span>
		</p>
		
		<input type='submit' value='Adicionar ao Carrinho' class='boton'>
		
		<a href='#' class='link'>Ver mais detalhes</a>
	</div>
	
</aside>	


<footer class='vcard'> <!-- hcard-->
<div class='blocos-footer'>
	<p>Redes Sociais</p>
	<a href='#' class='url'><img src='imagens/icones/face.png' alt='icone Facebook' class='photo'></a> <!-- hcard-->
	<a href='#' class='url'><img src='imagens/icones/g+.png' alt='icone Google mais' class='photo'></a> <!-- hcard-->
	<a href='#' class='url'><img src='imagens/icones/youtube.png' alt='icone youtube' class='photo'></a> <!-- hcard-->
	<a href='#' class='url'><img src='imagens/icones/twitter.png' alt='icone twitter' class='photo'></a> <!-- hcard-->
</div>
<div class='blocos-footer'>
	<p>Ligue grátis:</p>
	<img src='imagens/icones/telefone.png' alt='icone telefone' class='photo'> <!-- hcard-->
	<div id='ligue-gratis' class='tel'>0800 726 2020</div> <!-- hcard-->
</div>
<div class='blocos-footer'>
	<div class='correio'><a href='mailto:digiudo@digiudo.com' class='email'>E-mail</a></div> <!-- hcard-->
	<div class='correio'><a href='#'>Chat</a></div>
</div>

<h3 class='h3-footer'>© 2015 - Todos os direitos reservados - <span class='fn'>Digiúdo® Tecnologia</span></h3> <!-- hcard-->
<p>CNPJ: 08.077.938/0001-11</p>
	<div class='adr'> <!-- hcard-->
		<span class='street-address'>Av. Paulista, 1785, Conj 77 e 78</span><br>
		<span class='locality'>Bela Vista</span> - <span class='region'>SP</span> - <span class='postal-code'>01311-200</span>
	</div>

</footer>
";
}else{
	echo "<h3>Senha Invalida</h3>";
}
	?>
</body>
</html>
