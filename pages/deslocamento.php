<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSS -->
	<link rel="stylesheet" href="../css/default.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<title>Deslocamento - PhysicSpace</title>
	<link size="20x20px" rel='shortcut icon' href="../images/favicon.png" />
</head>

<body>

	<?php include("../models/nav-bar.php"); ?>
	
	<img class="parallax" src="../images/wallpaper3.jpg" />
	<div class="container">
		<h1>Cálculo de Deslocamento</h1>
		<div class="texto">
		Um dos principais cálculos da área da mecânica, o cálculo do deslocamento. 
		(Lembrando que a mecânica é uma área da física que estuda o movimento e repouso dos corpos).
		 Esse cálculo representa a distância da posição inicial até a final. Assim sendo, é a variação de um corpo em determinado espaço. A fórmula ao longo 
		 dos tempos foi abreviada para “sorvete”, para assim facilitar o estudo dos alunos.
		</div>
		<br><br>
		<h1>Função Horaria do Deslocamento</h1>
		<h2>S = S<small>0</small> + v · ΔT</h2>
		<form method="post" action="../functions/des.php" enctype="multipart/form-data">
			<div class="my-form">
				<input name="s" class="input-control form1" type="number" step="0.01" autocomplete="off" placeholder="S">
				<div class="form-text">=</div>
				<input name="s0" class="input-control form1" type="number" step="0.01" autocomplete="off" placeholder="s0">
				<div class="form-text">+</div>
				<input name="v" class="input-control form1" type="number" step="0.01" autocomplete="off" placeholder="v">
				<div class="form-text">.</div>
				<input name="t" class="input-control form1" type="number" step="0.01" autocomplete="off" placeholder="ΔT">
			</div>
			<button type="submit" onclick="return Validation('form1'); return false;" class="btn-envio">Calcular</button>
		</form>
		<li><strong>S</strong> = posição</li>
		<li><strong>S<small>0</small></strong> = posição inicial</li>
		<li><strong>v</strong> = velocidade</li>
		<li><strong>ΔT</strong> = intervalo de tempo</li>
	</div>
	
	<?php include("../models/footer.php"); ?>

	<!-- Bootstrap CSS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
		integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
		crossorigin="anonymous"></script>
	<!--- Validação -->
	<script src="../js/validation.js"></script>

</body>

</html>