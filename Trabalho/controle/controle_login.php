<?php

/// Load Modelo
require_once($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");

class Login{
	
	public function verificar ($email,$senha){
		
		$obj_con  = new ConexaoBD();
		$conectar=$obj_con->con();
		$sql = "SELECT * FROM login 
		WHERE emailLogin = '".$email."' AND senhaLogin = '".$senha."'";
		
		$resultado = mysqli_query($conectar,$sql) or die (mysqli_error($conectar));
		$linha     = mysqli_num_rows($resultado);
		return $linha;
	}
}
?>