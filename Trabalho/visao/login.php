<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Formulário de Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="application/javascript" src="../js/login.js"></script>
		
	</script>
</head>

<body>
	<form>
		<fieldset id'gabriel'>
			<h2>Tela de Login</h2>
			<label>Email: </label>
			<input type="text" name="email" id="email"  /><br />
			<label>Senha: </label>
			<input type="password" name="senha" id="senha" /><br />
			
			<input type="hidden" name="acao" id="acao" value="logar"/>
			
			<input type="button" onClick="verificar();" value="Entrar"/> 
		</fieldset>
	</form>	 
</body>
</html>