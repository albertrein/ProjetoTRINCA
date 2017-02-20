<!DOCTYPE html>
<html>
<head>
	<title>Churras</title>
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

	<div class="container-principal">
	<h1>Novo Churras</h1>
	<form method="POST" action="addChurras.php">
    <div class="form-group">
      <label>Quando?</label>
      <input type="date" class="form-control" name="data">
    </div>
    <div class="form-group">
      <label>Porquê?</label>
      <input type="text" class="form-control" name="motivo" placeholder="Motivo ...">
    </div>
    <div class="form-group">
      <label>Observações:</label>
      <textarea class="form-control" rows="3" name="obsv" placeholder="Comentários ..."></textarea>
    </div>
    <br><p>Valores Sujeridos</p>
  	<p><strong>Sem Bebida = R$ 15,00</strong></p>
  	<p><strong>Com Bebida = R$ 35,00</strong></p>
    <div class="cta"><button type="submit" class="botao1 cta">Salvar Churras ...</button></div>    
  	</form>
	</div>	

</body>
</html>