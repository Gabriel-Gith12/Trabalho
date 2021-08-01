<?php 
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION ['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['result']);
	
	header('location: ../index.php');
}
?>

<?php include("../controle/controle_cliente.php")?>
<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Pagina Principal</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="application/javascript" src="../js/cliente.js"></script>
		<script type="application/javascript" src="../js/login.js"></script>
	</head>

	<body>
		<div class="formButton" style="text-align: center">
			<h2>Tela Principal</h2>
			<td><input type = "button" value="Home"             onClick="telaPrincipal();"></input></td>	
			<td><input type = "button" value="Listar"           onClick="telaListarClientes();" ></input></td>
			<td><input type = "button" value="Cadastro"         onClick="telaCadastrar();"></input></td>
			<td><input type = "button" value="Pesquisa"         onClick="telaPesquisar();"></input>
				<td><input type = "button" value="Logout"           onClick="telaLogin();"></input>	
				</div>
			</body>
			</html>