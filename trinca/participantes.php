<!DOCTYPE html>
<html>
<head>
	<title>Participantes</title>
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
		</div>
			<span style="font-size:50px;cursor:pointer;color: white"  onclick="openNav()">&#9776;</span>
			<img src="trinca2.jpg" align="right">
	</header><br><br><br><br>

	<div class="container-principal">
	<h1>Adicionar Participante</h1>
	<form method="POST" action="addPart.php">
    <div class="form-group">
    	<label>Churras ID:</label>
    	<input type="number" class="form-control" name="churrasid" required="required" placeholder="Digite o ID do Churras ...">
    	<label>Nome:</label>
    	<input type="name" class="form-control" name="nome" required="required" placeholder="Digite o nome do participante ...">
    </div>
    <div class="form-group">
      	<label>Valor da Contribuição:</label>
      	<input type="number" class="form-control" placeholder="R$" name="contrib" required="required">
      	<label class="checkbox-inline"><input type="checkbox" name="check1">Pago?</label>
    </div>
    <div class="form-group">
      <label>Observações do Participante:</label>
      <textarea class="form-control" rows="3" placeholder="Comentários ..." name="observ"></textarea>
    <label class="checkbox-inline"><input type="checkbox" name="check2">Bebida?</label>
    <div class="cta"><button type="submit" class="botao1 cta">Salvar Participante</button></div>
  	</form>
	</div></div><br><br><br>

	<!-- Excluir Paticipante-->
	<div class="container-principal">
		<h1>Excluir Participante</h1>
		<form method="POST" action="delPart.php">
    		<div class="form-group">
    			<label>ID do Participante:</label>
    			<input type="number" class="form-control" name="delid" required="required" placeholder="Digite o ID do participante ...">
    			<label>Nome:</label>
    			<input type="name" class="form-control" name="nome" required="required" placeholder="Digite o nome do participante ...">
    		</div>
    		<div class="cta"><button type="submit" class="botao1 cta">Excluir Participante</button></div>
  		</form>
	</div><br><br><br>	

</body>
</html>