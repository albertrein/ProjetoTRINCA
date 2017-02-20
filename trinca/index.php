<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Churras da Trinca</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
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


	<?php
		$servername = "localhost";
		$username = "wriker";
		$password = "qwert";
		$dbname = "trinca";

		$db = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
 		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

 		$query = $db->query('SELECT * FROM churras ORDER BY id DESC');

 		while ($row = $query->fetch()) { 
 			$id = $row['id']; ?>

			<div class="container-principal">
				<h1><?php echo $row['motivo']; ?></h1>
				<p><strong>ID do Churras: </strong> <?php echo $row['id']; ?></p><br>
				<p><strong>Dia:</strong> <?php echo $row['data']; ?></p><br>
				<p><strong>Observações:</strong> <?php echo $row['observ']; ?></p><br>			

 				<table class="table">
    				<thead>
      						<tr>
      						<th>ID do Part.</th>
        					<th>Nome</th>
        					<th>Valor Contribuído</th>
        					<th>Pago</th>
        					<th>Bebida</th>
        					<th>Observação</th>        				
      					</tr>
    				</thead>
	<?php 	ftabela($id);	?>
	
	</table>
		<div class="cta"><a class="botao1" href="participantes.php">Adiciona Novo Participante</a></div><br>
	</div><br><br><br>		
	<?php }	

	function ftabela($idchurras){
		$servername = "localhost";
		$username = "wriker";
		$password = "qwert";
		$dbname = "trinca";

		$vtotal = 0;
		$pessoas = 0;

		$db = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
 		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

 		$query = $db->query('SELECT * FROM participantes ORDER BY churras DESC');

 		while ($row = $query->fetch()) { 
 			if($row['churras'] == $idchurras){	?>
 				<tbody>
      				<tr>
      					<td><?php echo $row['id']; ?></td>
        				<td><?php echo $row['nome']; ?></td>
        				<td>R$ <?php echo $row['contrib']; ?></td>
        				<td><?php echo $row['pago']; ?></td>
        				<td><?php echo $row['bebida']; ?></td>
        				<td><?php echo $row['observ']; ?></td>
        			</tr>        			
    			</tbody>
 				<?php
 				if ($row['pago'] == 1) {
 					$vtotal += $row['contrib'];
 				}
 				$pessoas++;
 			}
 		}
 		?> 
 			<p><strong>Total de PARTICIPANTES: </strong> <?php echo $pessoas; ?></p><br>
 		 	<p><strong>Valor Total Arrecadado: R$</strong> <?php echo $vtotal; ?></p><br>
 	<?php } ?>

	<footer>
		<h2>TRINCA</h2>
	</footer>
</body>
</html>