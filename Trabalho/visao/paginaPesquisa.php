<?php 
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION ['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['result']);
  
  header('location: ../index.php');
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Tela de Pesquisa</title>
  <link rel="stylesheet" type="text/css" href="teste.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
	<script type="application/javascript" src="../js/login.js"></script>
</head>

<body>
		<div class="formButton" style="text-align: center">
		<h2>Tela de Pesquisa</h2>
		<td><input type = "button" value="Home"             onClick="telaPrincipal();"></input></td>	
		<td><input type = "button" value="Listar"           onClick="telaListarClientes();" ></input></td>
		<td><input type = "button" value="Cadastro"         onClick="telaCadastrar();"></input></td>
		<td><input type = "button" value="Editar/Pesquisa"  onClick="telaPesquisar();"></input>
        <td><input type = "button" value="Logout"           onClick="telaLogin();"></input>	
		


    <form method="POST" id="for-pesquisa" action="">
      <br><br><input type="text" name="pesquisa" id="busca" placeholder="Buscar Nome">
      <input type="submit" name="enviar" value="Pesquisar">
    </form>
    </div>

</body>
</html>