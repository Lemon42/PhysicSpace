<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- CSS -->
	<link rel="stylesheet" href="../css/function.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<title>Resposta - PhysicSpace</title>
	<link size="20x20px" rel='shortcut icon' href="../images/favicon.png" />
</head>

<body>
	<div class="container">
		<center>
			<img class="logo" src="../images/science.png">
			<h1>
				<?php
					$f = $_POST['f'];
					$m = $_POST['m'];
					$a = $_POST['a'];

					if($f == '')
					{
						echo 'F = '. $m .' . '. $a .'<br>';
						$resp = $m * $a;
						echo "Valor da força: ". $resp;
					} elseif($m == '') {
						echo $f .' = m . '. $a .'<br>';
						$resp = $f / $a;
						echo "Valor da massa: ". $resp;
					} else {
						echo $f .' = '. $m .' . a<br>';
						$resp = $f / $m;
						echo "Valor da aceleração: ". $resp;
					}
				?>
			</h1>
			<button class="btn-voltar" onclick="window.location.href='../pages/newton.php'">Voltar</button>
		</center>
	</div>

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

</body>
</html>