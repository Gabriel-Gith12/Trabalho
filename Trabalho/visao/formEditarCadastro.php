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
<?php $id = $_POST["id"]?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
    <link rel="stylesheet" type="text/css" href="teste.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js"></script>
	<script type="application/javascript" src="../js/login.js"></script>
	</script>
</head>

	<?php
	$obj_cliente  = new Cliente(); 
    $arrayCliente = $obj_cliente->busca($id);

    $aluno_obj_resultado = new Busca();
    $arrayMunicipio      = $aluno_obj_resultado->municipio();

    $aluno_obj_resultado = new Busca();
    $arrayEstado         = $aluno_obj_resultado->estado();
	
    $aluno_obj_resultado = new Busca();
    $arrayPais           = $aluno_obj_resultado->pais();

    $aluno_obj_resultado = new BuscaSexo();
    $arraySexo           = $aluno_obj_resultado->sexo();

?>
<body>
		<div class="formButton" style="text-align: center">
		<h2>Tela de Editar</h2>
		<td><input type = "button" value="Home"             onClick="telaPrincipal();"></input></td>	
		<td><input type = "button" value="Listar"           onClick="telaListarClientes();" ></input></td>
		<td><input type = "button" value="Cadastro"         onClick="telaCadastrar();"></input></td>
		<td><input type = "button" value="Editar/Pesquisa"  onClick="telaPesquisar();"></input>
        <td><input type = "button" value="Logout"           onClick="telaLogin();"></input>	
		

	<form action=""> 
		
		<br>Idade: <br> <input type="number"  name="idade"     id="idade" value = "<?php echo $arrayCliente[0]['idadeAluno']?>"><br><br> 
		
		Nome: <br>  <input type="text"    name="nome"        id="nome" value = "<?php echo $arrayCliente[0]['nomeAluno']?>"><br>

		<br>Sexo:</br>

			<select name="sexo" id="sexo">
			<?php
				foreach($arraySexo as $values){
			?>
			 	<option value="<?php echo $values['idSexo']?>" <?php echo ($values['idSexo'] == $arrayCliente[0]['idSexo'])? 'selected' : '' ?>> <?php echo $values['nomeSexo'] ?></option>
			<?php
				} 
			?>
				
		</select>
		<br><br>Pais:</br>

			<select name="pais" id="pais">
			<?php
				foreach($arrayPais as $values){
			?>
			 	<option value="<?php echo $values['idPais']?>" <?php echo ($values['idPais'] == $arrayCliente[0]['idPais'])? 'selected' : '' ?>> <?php echo $values['nomePais'] ?></option>
			<?php
				}
			?>
		</select>
		<br><br>Estado:</br>

			<select name="estado" id="estado">
			<?php
				foreach($arrayEstado as $values){
			?>
			 	<option value="<?php echo $values['idEstado']?>" <?php echo ($values['idEstado'] == $arrayCliente[0]['idEstado'])? 'selected' : '' ?>> <?php echo $values['nomeEstado'] ?></option>
			<?php
				}
			?>
			</select>
         <br><br>Municipio:</br>

		<select name="municipio" id="municipio">
		<?php
				foreach($arrayMunicipio as $values){
		?>
			 	<option value="<?php echo $values['idMunicipio']?>" <?php echo ($values['idMunicipio'] == $arrayCliente[0]['idMunicipio'])? 'selected' : '' ?>> <?php echo $values['nomeMunicipio'] ?></option>
			<?php
				}
			?>	
			</select>
		<br><input type="hidden" name="id" id="id" value="<?php echo $arrayCliente[0]['idAluno']?>">
		
		<br><input type="reset" id="limpar" onClick="" value="Limpar">
		<input type="button" id = "atualizar" onClick="editar();" value="Alterar">
		<input type="hidden" name="acao" value="Altera">
		</div>
	</form>
		<br>
</body>
</html>