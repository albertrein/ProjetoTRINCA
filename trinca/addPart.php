<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionando Participante</title>
	<link rel="stylesheet" type="text/css" href="stilo.css">
	<script>
		function openNav() {
    		document.getElementById("mySidenav").style.display = "block";
		}
		function closeNav() {
    		document.getElementById("mySidenav").style.display = "none";
		}
	</script>
</head>
<body>
	<header>	
		<div id="mySidenav" class="sidenav">
  			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  			<a href="index.php">Página Inicial</a>
  			<a href="churras.php">Churras</a>
  			<a href="participantes.php">Participantes</a>
		</div>
			<span style="font-size:50px;cursor:pointer;color: white"  onclick="openNav()">&#9776;</span>
			<img src="trinca2.jpg" align="right">
	</header><br><br><br><br>

	<div class="container-principal">

<?php
	$servername = "localhost";
	$username = "wriker";
	$password = "qwert";
	$dbname = "trinca";
	$conn = mysqli_connect($servername, $username, $password, $dbname); 

	$nome = $_POST["nome"];
	$contrib = $_POST["contrib"];
	$obs = $_POST["observ"];
	$churrasid = $_POST["churrasid"];
	$pago = 0;
	$bebida = 0;

	if (isset($_POST['check1'])) {
		$pago++;
	}
	if (isset($_POST['check2'])) {
		$bebida++;
	}
	$sql = "INSERT INTO participantes (churras, nome, contrib, pago, observ, bebida) VALUES ('$churrasid','$nome','$contrib','$pago','$obs','$bebida')";

	if (mysqli_query($conn, $sql)) {
   		?><h1>Participante Adicionado com Sucesso :)</h1><?php
    }else{
    	?><h1>Erro ao Registrar o Participante :(</h1><?php
    }
?>
		</div>
</body>
</html>



