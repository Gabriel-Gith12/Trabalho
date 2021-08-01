<?php
include("../../controle/controle_cliente.php");
include("../../controle/controle_login.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$acao  = $_POST["acao"];


$obj_cliente = new Cliente();
$obj_login   = new Login();

if($acao == 'logar'){
	
	$result = $obj_login->verificar($email,$senha);
	
	if($result == 1){
		session_start();
		$_SESSION['email']  = $email;
		$_SESSION['result'] = $result;
		
	}else{
		
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		
	}
	
	echo $result;
}

?>
