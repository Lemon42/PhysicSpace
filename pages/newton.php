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

	<title>Leis de Newton - PhysicSpace</title>
	<link size="20x20px" rel='shortcut icon' href="../images/favicon.png" />
</head>

<body>

	<?php include("../models/nav-bar.php"); ?>	
	
	<img class="parallax" src="../images/wallpaper1.jpg" />
	<div class="container">
		<h1>As três leis de Newton</h1>
		<div class="texto">
		Primeiramente iremos começar mostrando uma das leis principais, que dão base a outros cálculos. As 3 leis de Newton.
		Começando pela” Lei da inércia”, Essa lei diz que, ao menos que haja alguma força resultante não nula sobre um corpo,
		esse deverá manter-se em repouso ou se mover ao longo de uma linha reta com velocidade constante. Além disso, quanto
		maior for a massa de um corpo, maior será sua inércia.<br><br>
		A segunda lei apresentada por Newton é a “Lei da Superposição de Forças”. Essa lei informa que o módulo da aceleração
		produzida sobre um corpo é diretamente proporcional ao módulo da força aplicada sobre ele e inversamente proporcional à
		sua massa. (As forças são grandezas vetoriais, portanto, são escritas com uma seta apontada sempre para direita acima de
		seu símbolo. Essa seta não indica o módulo ou a direção da grandeza vetorial, indica somente que elas são vetoriais).<br><br>
		Agora a terceira e última é a “Lei da Ação e Reação”. Essa lei diz que todas as forças surgem aos pares: ao aplicarmos
		uma força sobre um corpo (ação), recebemos desse corpo a mesma força (reação), com mesmo módulo e na mesma direção,
		porém com sentido oposto. Essa lei permite-nos entender que, para que surja uma força, é necessário que dois corpos
		interajam, produzindo forças de ação e reação. Além disso, é impossível que um par de ação e reação forme-se no mesmo
		corpo.
		</div>
		<br><br>
		<h1>2° Lei</h1>
		<h2>F = m . a</h2>
		<form method="post" action="../functions/new2.php" enctype="multipart/form-data">
			<div class="my-form">
				<input name="f" class="input-control form2" type="number" step="0.01" autocomplete="off" placeholder="F">
				<div class="form-text">=</div>
				<input name="m" class="input-control form2" type="number" step="0.01" autocomplete="off" placeholder="m">
				<div class="form-text">.</div>
				<input name="a" class="input-control form2" type="number" step="0.01" autocomplete="off" placeholder="a">
			</div>
			<button type="submit" onclick="return Validation('form2'); return false;" class="btn-envio">Calcular</button>
		</form>
		<li><strong>F</strong> = força</li>
		<li><strong>m</strong> = massa</li>
		<li><strong>a</strong> = aceleração</li>
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