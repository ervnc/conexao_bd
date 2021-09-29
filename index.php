<!DOCTYPE html>
<html lang="pt-BR" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/style.css" rel="stylesheet"/>
	<title>Desenvolvimento Web II</title>
</head>

<body>

	<img class="wave-login" src="Imagens/wave-login.svg">

	<?php 
		session_start();
		if (!isset($_SESSION['cadastros'])){
			$_SESSION['cadastros'] = array();
		}

	?>

	<div class="container-login">
		<div class="imagem-login">
			<img src="Imagens/undraw_Emails_re_cqen.svg">
		</div>

		<div class="login">

			<form action="autenticar.php" class="formulario-login" method="POST">
				<img class="avatar" src="Imagens/avatar-male.svg">
				<h2>Welcome</h2>
				<div class="input-login">
					<label class="field field_v2">
						<input type="text" class="field__input" id="username" placeholder="Digite seu nome de usuário" autofocus="autofocus" name="user" autocomplete="off" required>
						<span class="field__label-wrap">
							<span class="field__label">Username</span>
						</span>
					</label>
				</div>
				<div class="input-login">
					<label class="field field_v2">
						<input type="password" class="field__input" id="senha" placeholder="Digite sua senha" autofocus="autofocus" name="password" autocomplete="off" required>
						<span class="field__label-wrap">
							<span class="field__label">Senha</span>
						</span>
					</label>
				</div>

				<button type="submit" class="custom-btn btn-3 botao-login"><span>Login</span></button>
				<h5 class="cadastrar-login">Não tem uma conta?<a href="cadastrarsetor.php" class="cadastrar-login"> Cadastre-se</a></h5>
			</form>
		</div>
	</div>

	<!-- Imports -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>