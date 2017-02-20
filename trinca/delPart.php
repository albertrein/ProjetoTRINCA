<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Deletando Participantes</title>
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

	$del = $_POST['delid'];
	$nome = $_POST['nome'];

	$sql = "DELETE FROM participantes WHERE id=$del";

	if (mysqli_query($conn, $sql)) {
    	echo ?><h1>Participante Deletado com Sucesso :)</h1><?php ;
	}else {
    	echo ?><h1>Error ao Deletar Participante :)</h1><?php . mysqli_error($conn);
	}
?>
	</div>
</body>
</html>

