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

	<title>Calorimetria - PhysicSpace</title>
	<link size="20x20px" rel='shortcut icon' href="../images/favicon.png" />
</head>

<body>
	<nav id="menu" class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="#"><img class="logo-img" src="../images/science.png" />PhysicSpace</a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="../index.html">Introdução</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="sobre.html">Sobre nós</a>
				</li>
			</ul>
		</div>
	</nav>
	<img class="parallax" src="../images/wallpaper2.jpg" />
	<div class="container">
		<h1>Calorimetria</h1>
		<div class="texto">
        Calorimetria é a área da Física responsável pelo estudo das trocas de energia térmica em forma de calor que ocorrem
        entre dois ou mais corpos e suas vizinhanças. Por meio da Calorimetria, é possível saber qual é a temperatura de
        equilíbrio de um sistema de corpos e qual é a quantidade de energia térmica necessária para que se observem variações de
        temperatura ou mudanças de estado físico no sistema.<br><br>A unidade de calor no Sistema Internacional de Unidades é o Joule
        (J), no entanto, o uso da unidade caloria (cal) é bastante comum em todo o mundo. Uma caloria é o equivalente à
        quantidade de energia térmica necessária para se elevar a temperatura de 1,0 g de água pura, inicialmente a 14,5ºC, para
        15,5ºC e vale 4,186 J.<br><br>
        Lembrando que a calorimetria, é uma área da física, ou seja, pode vir a ter vários cálculos como calor latente ou calor
        específico. O cálculo explorado e apresentado aqui por nós é só o cálculo do calor sensível de uma substância.
		</div>
		<br><br>
		<h1>Calor Específico</h1>
		<h2>ΔQ = m · c · ΔT</h2>
		<form method="post" action="../functions/cal1.php" enctype="multipart/form-data">
			<div class="my-form">
				<input name="q" class="input-control form1" type="number" step="0.01" autocomplete="off" placeholder="ΔQ">
				<div class="form-text">=</div>
				<input name="m" class="input-control form1" type="number" step="0.01" autocomplete="off" placeholder="m">
				<div class="form-text">.</div>
				<input name="c" class="input-control form1" type="number" step="0.01" autocomplete="off" placeholder="c">
				<div class="form-text">.</div>
				<input name="t" class="input-control form1" type="number" step="0.01" autocomplete="off" placeholder="ΔT">
			</div>
			<button type="submit" onclick="return Validation('form1'); return false;" class="btn-envio">Calcular</button>
		</form>
		<li><strong>ΔQ</strong> = quantidade de calor</li>
		<li><strong>m</strong>  = massa</li>
		<li><strong>c</strong>  = calor específico</li>
		<li><strong>ΔT</strong> = variação da temperatura</li>
		<br><br>
		<h1>Calor Latente</h1>
		<h2>ΔQ = m · L</h2>
		<form method="post" action="../functions/cal2.php" enctype="multipart/form-data">
			<div class="my-form">
				<input name="q" class="input-control form2" type="number" step="0.01" autocomplete="off" placeholder="ΔQ">
				<div class="form-text">=</div>
				<input name="m" class="input-control form2" type="number" step="0.01" autocomplete="off" placeholder="m">
				<div class="form-text">.</div>
				<input name="l" class="input-control form2" type="number" step="0.01" autocomplete="off" placeholder="L">
			</div>
			<button type="submit" onclick="return Validation('form2'); return false;" class="btn-envio">Calcular</button>
		</form>
		<li><strong>ΔQ</strong> = quantidade de calor</li>
		<li><strong>m</strong>  = massa</li>
		<li><strong>L</strong>  = calor latente</li>
		<br><br>
		<h1>Capacidade Térmica</h1>
		<h2>C = ΔQ / ΔT</h2>
		<form method="post" action="../functions/cal3.php" enctype="multipart/form-data">
			<div class="my-form">
				<input name="c" class="input-control form3" type="number" step="0.01" autocomplete="off" placeholder="C">
				<div class="form-text">=</div>
				<input name="q" class="input-control form3" type="number" step="0.01" autocomplete="off" placeholder="ΔQ">
				<div class="form-text">/</div>
				<input name="t" class="input-control form3" type="number" step="0.01" autocomplete="off" placeholder="ΔT">
			</div>
			<button type="submit" onclick="return Validation('form3'); return false;" class="btn-envio">Calcular</button>
		</form>
		<li><strong>C</strong>  = capacidade térmica</li>
		<li><strong>ΔQ</strong> = quantidade de calor</li>
		<li><strong>ΔT</strong> = variação da temperatura</li>

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