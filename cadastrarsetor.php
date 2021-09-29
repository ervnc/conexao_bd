<!DOCTYPE html>
<html lang="pt-BR" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/style.css" rel="stylesheet" />
	<title>Desenvolvimento Web II</title>
</head>

<body>

	<div class="botao-voltar">
		<div>
			<a href="index.php" class="botao-retornar"><img src="Imagens/voltar.png"><span>Voltar</span></a>
		</div>
	</div>

	<img class="wave-cadastro" src="Imagens/wave-cadastro.svg">

	<div class="container-cadastro">

		<section class="content-cadastro">
			<form action="salvarsetor.php" method="POST" class="formulario-cadastro">
				<img class="avatar" src="Imagens/avatar-female.svg">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="nome" placeholder="Digite seu nome" autofocus="autofocus" name="nomeCompleto" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">Nome Completo</span>
								</span>
						</label>
					</div>
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="email" class="field__input" id="email" placeholder="Digite seu e-mail" autofocus="autofocus" name="email" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">E-mail</span>
								</span>
						</label>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="username" placeholder="Digite seu nome de usuário" autofocus="autofocus" name="user" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">Username</span>
								</span>
						</label>
					</div>
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="password" class="field__input" id="senha" placeholder="Digite sua senha" autofocus="autofocus" name="password" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">Senha</span>
								</span>
						</label>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label class="field field_v2">
							<input type="text" class="field__input cep" id="cep" placeholder="Digite seu CEP" autofocus="autofocus" name="cep" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">CEP</span>
								</span>
						</label>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="rua" placeholder="Digite sua rua" autofocus="autofocus" name="rua" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">Rua</span>
								</span>
						</label>
					</div>
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="number" class="field__input" id="numero" placeholder="Digite seu número" autofocus="autofocus" name="numero" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">Número</span>
								</span>
						</label>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="cidade" placeholder="Digite sua cidade" autofocus="autofocus" name="cidade" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">Cidade</span>
								</span>
						</label>
					</div>
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="estado" placeholder="Digite seu estado" autofocus="autofocus" name="estado" autocomplete="off" required>
								<span class="field__label-wrap">
									<span class="field__label">Estado</span>
								</span>
						</label>
					</div>
				</div>

				<input type="hidden" id="id" name="id" value=""/>
				<button type="submit" class="custom-btn btn-3 botao-cadastro"><span>Salvar</span></button>
			</form>
		</section>	
		
		<div class="imagem-cadastro">
			<img src="Imagens/undraw_my_app_re_gxtj.svg">
		</div>	
	</div>

	<!-- Imports -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>
