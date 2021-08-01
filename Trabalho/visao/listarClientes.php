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
<title>Listar Clientes</title>
<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
	<script type="application/javascript" src="../js/login.js"></script>
			
	</script>
</head>
	
	<?php
    // instanciar clase cliente - Start
	$obj_cliente = new Cliente(); 
    // instanciar clase cliente - End
    $arrayClientes = $obj_cliente->busca();

	  ?>
	
<body>
		<div class="formButton" style="text-align: center">
		<h2>Tela de Listar</h2>
		<td><input type = "button" value="Home"             onClick="telaPrincipal();"></input></td>	
		<td><input type = "button" value="Listar"           onClick="telaListarClientes();" ></input></td>
		<td><input type = "button" value="Cadastro"         onClick="telaCadastrar();"></input></td>
		<td><input type = "button" value="Editar/Pesquisa"  onClick="telaPesquisar();"></input>
        <td><input type = "button" value="Logout"           onClick="telaLogin();"></input>	
		</div>

	<br><table border="2" width="700" cellspacing="0" style="text-align: center"
		align="center">
		<tr>	
			<th>Idade</th>	
			<th>Nome</th>
			<th>Ação</th>
			<th>Ação</th>
		</tr>
	
	<?php
	foreach($arrayClientes as $value){ /// Laço do retorno	
	?>
		<tr>
			
			<td><?php echo $value['idadeAluno']?> </td>
			<td><?php echo $value['nomeAluno']?></td>
			<td><input type="button" onClick="telaEditar(<?php echo $value['idAluno']?>);" value="Editar"</td>
			<td><input type="button" onClick="deletar(<?php echo $value['idAluno']?>);" value="Deletar"</td>		
		</tr>
	<?php
	}
	  ?>

	</table>

	<br>
	
	<form id="formulario" action="formEditarCadastro.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
	</form>	  
</body>
</html>