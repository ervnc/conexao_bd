<!DOCTYPE html>
<html lang="pt" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/style.css" rel="stylesheet" />
	<title>Desenvolvimento Web II</title>
</head>

<body>
	<header>
		<?php 
		    session_start();
		?>

		<nav>
			<?php
				include "menu_lateral.php";
			?>
		</nav>

	</header>

	<section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>

	<div class="container">	
		<section>
			<div class="table-responsive">
				<table class="styled-table">
					<thead>
						<tr>
							<th>#</th>
							<th>Nome Completo</th>
							<th>E-mail</th>
							<th>Username</th>
							<th>CEP</th>
							<th>Rua</th>
							<th>Número</th>
							<th>Cidade</th>
							<th>Estado</th>
							<th>Ação</th>
						</tr>
					</thead>

					<tbody>
						<?php
							include_once 'banco.php';
							
							$sql = "SELECT * FROM cadastros";
							$result = mysqli_query($conn, $sql);
							while ($row = mysqli_fetch_assoc($result)) {
						?>

						<tr>
							<td>
								<?php  
									echo $row['id']; 
								?>	
							</td>

							<td>
								<?php
									echo $row['nomeCompleto']; 
								?>	
							</td>

							<td>
								<?php
									echo $row['email']; 
								?>	
							</td>

							<td>
								<?php
									echo $row['user']; 
								?>	
							</td>

							<td>
								<?php
									echo $row['cep']; 
								?>	
							</td>

							<td>
								<?php
									echo $row['rua']; 
								?>	
							</td>

							<td>
								<?php
									echo $row['numero']; 
								?>	
							</td>

							<td>
								<?php
									echo $row['cidade']; 
								?>	
							</td>

							<td>
								<?php
									echo $row['estado']; 
								?>	
							</td>
							
							<td>
								<a href="editarsetor.php?id=<?php  echo $row['id']; ?>" role="button">
									<img class="imagem" src="https://icons.iconarchive.com/icons/flat-icons.com/flat/256/Pencil-icon.png">
								</a>
								<a class="btn btn-danger btn-sm" href="removersetor.php?id=<?php  echo $row['id']; ?>" role="button">
									<img class="imagem" src="https://icon-library.com/images/delete-icon-png/delete-icon-png-16.jpg">
								</a>
							</td>
						</tr>

						<?php 
							}
						?>
					</tbody>
				</table>
			</div>
		</section>		
	</div>

	<!-- Imports -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>
