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
			<a href="listarsetor.php" class="botao-retornar"><img src="Imagens/voltar.png"><span>Voltar</span></a>
		</div>
	</div>

	<img class="wave-cadastro" src="Imagens/wave-cadastro.svg">

	<header>
		<?php 
			session_start();
			$id = $_GET['id'];
			$cadastros = $_SESSION['cadastros'];
			include_once 'banco.php';
		?>
	</header>
	
	<?php
		$sql = "SELECT * FROM cadastros WHERE id=$id";
		$result = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_assoc($result)) {
	?>

	<div class="container-cadastro">
		<section class="content-cadastro">
		
			<form action="atualizarsetor.php" method="POST">
				<img class="avatar" src="Imagens/avatar-female.svg">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="nome" placeholder="Altere seu nome" autofocus="autofocus" name="nomeCompleto" autocomplete="off" required 
								value="<?php 
									echo $row['nomeCompleto'];
								?>"/>
								<span class="field__label-wrap">
										<span class="field__label">Nome Completo</span>
								</span>
						</label>
					</div>
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="email" class="field__input" id="email" placeholder="Altere seu e-mail" autofocus="autofocus" name="email" autocomplete="off" required
								value="<?php 
									echo $row['email'];
								?>"/>
								<span class="field__label-wrap">
									<span class="field__label">E-mail</span>
								</span>
						</label>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="username" placeholder="Altere seu nome de usuário" autofocus="autofocus" name="username" autocomplete="off" required
								value="<?php 
									echo $row['user']; 
								?>">
								<span class="field__label-wrap">
									<span class="field__label">Username</span>
								</span>
						</label>
					</div>
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="password" class="field__input" id="senha" placeholder="Altere sua senha" autofocus="autofocus" name="password" autocomplete="off" required
							value="<?php 
								echo $row['password']; 
							?>">
								<span class="field__label-wrap">
									<span class="field__label">Senha</span>
								</span>
						</label>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label class="field field_v2">
							<input type="text" class="field__input cep" id="cep" placeholder="Altere seu CEP" autofocus="autofocus" name="cep" autocomplete="off" required
							value="<?php 
								echo $row['cep']; 
							?>">
								<span class="field__label-wrap">
									<span class="field__label">CEP</span>
								</span>
						</label>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="rua" placeholder="Altere sua rua" autofocus="autofocus" name="rua" autocomplete="off" required
							value="<?php 
								echo $row['rua']; 
							?>">
								<span class="field__label-wrap">
									<span class="field__label">Rua</span>
								</span>
						</label>
					</div>
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="number" class="field__input" id="numero" placeholder="Altere seu número" autofocus="autofocus" name="numero" autocomplete="off" required
							value="<?php 
								echo $row['numero']; 
							?>">
								<span class="field__label-wrap">
									<span class="field__label">Número</span>
								</span>
						</label>
					</div>
				</div>
				
				<div class="form-row">
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="cidade" placeholder="Altere sua cidade" autofocus="autofocus" name="cidade" autocomplete="off" required
							value="<?php 
								echo $row['cidade'] ; 
							?>">
								<span class="field__label-wrap">
									<span class="field__label">Cidade</span>
								</span>
						</label>
					</div>
					<div class="form-group col-md-6">
						<label class="field field_v2">
							<input type="text" class="field__input" id="estado" placeholder="Altere seu estado" autofocus="autofocus" name="estado" autocomplete="off" required
							value="<?php 
								echo $row['estado']; 
							?>">
								<span class="field__label-wrap">
									<span class="field__label">Estado</span>
								</span>
						</label>
					</div>
				</div>

				<input type="hidden" name="id" value="<?php echo $id; ?>"/>
				<button type="submit" class="custom-btn btn-3 botao-cadastro"><span>Salvar</span></button>
			</form>
		</section>
		
		<div class="imagem-cadastro">
			<img src="Imagens/undraw_my_app_re_gxtj.svg">
		</div>
	</div>	

	<?php
		}
	?>
		
	<!-- Imports -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>
