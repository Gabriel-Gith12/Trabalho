<?php 
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION ['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['result']);

	header('location: ../index.php');
}
?>

<?php include("../controle/controle_cliente.php")?>
<?php include("../controle/controle_municipio.php")?>
<?php include("../controle/controle_sexo.php")?>
<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Formulário de Cadastro</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="application/javascript" src="../js/cliente.js"></script>
		<script type="application/javascript" src="../js/login.js"></script>
	</script>
</head>
</head>

<?php

$aluno_obj_resultado = new Busca();
$arrayMunicipio   = $aluno_obj_resultado->municipio();

$aluno_obj_resultado = new Busca();
$arrayEstado   = $aluno_obj_resultado->estado();

$aluno_obj_resultado = new Busca();
$arrayPais     = $aluno_obj_resultado->pais();

$aluno_obj_resultado = new BuscaSexo();
$arraySexo     = $aluno_obj_resultado->sexo();
?>

<body>
	<form>
	<div class="formButton" style="text-align: center">
		<h2>Tela de Cadastro</h2>
		<td><input type = "button" value="Home"             onClick="telaPrincipal();"></input></td>	
		<td><input type = "button" value="Listar"           onClick="telaListarClientes();" ></input></td>
		<td><input type = "button" value="Cadastro"         onClick="telaCadastrar();"></input></td>
		<td><input type = "button" value="Pesquisa"  onClick="telaPesquisar();"></input>
			<td><input type = "button" value="Logout"           onClick="telaLogin();"></input>	


				<br><br>Idade:</br>&nbsp;<input type="number" placeholder = "Sua Idade" id="idade"><br>

				<br>Nome:&nbsp;</br><input type="text" placeholder = "Seu Nome" id = "nome"><br>

				<br>Sexo:</br>
				<select name="sexo" id="sexo">
					<option value="">Escolha o Sexo</option>
					<?php
					foreach($arraySexo as $values){
						?>
						<option value="<?php echo $values['idSexo']?>"><?php echo $values['nomeSexo']?></option>
						<?php
					}
					?>
				</select>

				<br><br>Pais:</br>
				<select name="pais" id="pais">
					<option value="">Escolha o Pais</option>
					<?php
					foreach($arrayPais as $values){
						?>
						<option value="<?php echo $values['idPais']?>"><?php echo $values['nomePais']?></option>
						<?php
					}
					?>
					<br></select>

					<br><br>Estado:</br>
					<select name="estado" id="estado">
						<option value="">Escolha o Estado</option>
						<?php
						foreach($arrayEstado as $values){
							?>
							<option value="<?php echo $values['idEstado']?>"><?php echo $values['nomeEstado']?></option>
							<?php
						}
						?>
					</select>
					<br><br>Municipio:</br>
					<select name="municipio" id="municipio">
						<option value="">Escolha o Municipio</option>
						<?php
						foreach($arrayMunicipio as $values){
							?>
							<option value="<?php echo $values['idMunicipio']?>" ><?php echo $values['nomeMunicipio']?></option>
							<?php
						}
						?>	
					</select>
					<br><br><input type="reset" id="limpar" onClick="" value="Limpar">
					<input type="button" id="inserir" onClick="cadastrar();" value="Cadastrar">
					<input type="hidden" name="acao" value="insere">
				</div>
				<form>
			</body>
			</html>