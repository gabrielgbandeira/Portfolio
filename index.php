<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Gabriel Bandeira Developer</title>
	
	<link rel="stylesheet" type="text/css" href="<?php ECHO INCLUDE_PATH; ?>css/all.css">
	<link href="<?php ECHO INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet"/>
	<meta charset="utf-8">
	<meta name= "Keywords" content="palavras-chave,do,meu,site">
	<meta name= "description" content= "descrição do meu website">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<header>
		<div class="center">
		<div class= "logo left"><p> Gabriel Bandeira</p></div><!--logo-->
		<nav class="desktop right">
			 <ul>
			 	<li><a href="<?php ECHO INCLUDE_PATH; ?>Home">Home</a></li>
			 	<li><a href="<?php ECHO INCLUDE_PATH; ?>Sobre">Sobre</a></li>
			 	<li><a href="<?php ECHO INCLUDE_PATH; ?>Serviços">Serviços</a></li>
			 	<li><a href="<?php ECHO INCLUDE_PATH; ?>Contato">Contato</a></li>
			 </ul>
		</nav>
		 <nav class="mobile right">
			 <div class="botao-menu-mobile">
			 	<i class="fa fa-bars" aria-hidden="true"></i>
			 </div>
				<ul>
				<li><a href="<?php ECHO INCLUDE_PATH; ?>Home">Home</a></li>
			 	<li><a href="<?php ECHO INCLUDE_PATH; ?>Sobre">Sobre</a></li>
			 	<li><a href="<?php ECHO INCLUDE_PATH; ?>Serviços">Serviços</a></li>
			 	<li><a href="<?php ECHO INCLUDE_PATH; ?>Contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>
<?php 
	$url = isset($_GET['url']) ? $_GET['url'] : 'Home';
	if(file_exists('pages/'.$url.'.php')){
		include('pages/'.$url.'.php');
	}
	else{
		//podemos fazer oq quiser pq a pagina n existe.
		$pagina404 = true;
		include('pages/404.php');
	}
?>
<footer>
	<div>
		<ul>
			<li><div class="logo center">
					<p>Gabriel Bandeira Developer</p>
			</div><!--logo--></li>
			<li><div class="contato-footer">
				<h3><a href="http://wa.me/5563991034984"></h3>
				<h2><i class="fa-brands fa-whatsapp">+55 (63) 99103-4984</i></h2>
				</a></h3>
			</div><!--contato-header--></li>
			<li><div class="link-footer left">
			<ul>
					<li><div class="insta"><h3><a href="<?php ECHO INCLUDE_PATH; ?>https://www.instagram.com/gbandeira_/"></h3>
				<h2><i class="fa-brands fa-instagram"></i></h2>
				</a></div><!--insta--></h3></li>
				<li><div class="github"><h3><a href="<?php ECHO INCLUDE_PATH; ?>https://github.com/gabrielgbandeira"></h3>
				<h2><i class="fa-brands fa-github"></i></h2>
				</a></div><!--github--></li>
				<li><div class="likedin"><h3><a href="<?php ECHO INCLUDE_PATH; ?>	https://www.linkedin.com/in/gabriel-gon%C3%A7alves-bandeira-filho-3b1285264/"></h3>
				<h2><i class="fa-brands fa-linkedin"></i></h2>
				</a></div><!--likedin--></li>
			</li>
			</ul>
			</div><!--links-header-->
		</ul>
		</div>
</footer>
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

</body>
</html>