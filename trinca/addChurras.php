<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionando Novo Churras</title>
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
		</div><span style="font-size:50px;cursor:pointer;color: white"  onclick="openNav()">&#9776;</span>
		<img src="trinca2.jpg" align="right">
	</header><br><br><br><br>

	<div class="container-principal">
<?php
	$servername = "localhost";
	$username = "wriker";
	$password = "qwert";
	$dbname = "trinca";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	date_default_timezone_set('America/Sao_Paulo');
	$data1 = date('Y-m-d');
	$data = $_POST["data"];
	$motivo = $_POST["motivo"];
	$obsv = $_POST["obsv"];
	
	$sql = "INSERT INTO churras (data, dataInsert, motivo, observ) VALUES ('$data','$data1','$motivo','$obsv')";

		if (mysqli_query($conn, $sql)) {
    		?><h1>Novo Churras Salvo com Sucesso :)</h1><?php
	    }else{
	    	?><h1>Error ao Salvar um Novo Churras :(</h1><?php
	    }
?>
	</div>

</body>
</html>
