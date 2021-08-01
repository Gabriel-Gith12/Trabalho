<?php
/// Modulos - Start
include("../../controle/controle_cliente.php");

/// Modulos - End

/// Recebe Valores - Start

$idAluno     = $_POST["id"];
$idadeAluno  = $_POST["idade"];
$nomeAluno   = $_POST["nome"];
$idSexo      = $_POST["sexo"];
$idPais      = $_POST["pais"];
$idEstado    = $_POST["estado"];
$idMunicipio = $_POST["municipio"];


$acao        = $_POST["acao"];
/// Recebe Valores - End

/// instanciar clase cliente - Start
$obj_cliente = new Cliente(); 
/// instanciar clase cliente - End

if($acao == "insere"){	

	/// Chama metodo - Start
	$result = $obj_cliente->insere($idadeAluno, $nomeAluno, $idSexo, $idPais, $idEstado, $idMunicipio);
	/// Chama metodo - End
	
}else if($acao == "Altera"){
	
	/// Chama metodo - Start
	$result = $obj_cliente->atualizar($idadeAluno, $nomeAluno, $idSexo, $idPais, $idEstado, $idMunicipio, $idAluno );
	/// Chama metodo - End
	
}else if($acao == "deletar"){
	
	/// Chama metodo - Start
	$result = $obj_cliente->deletar($idAluno );
	/// Chama metodo - End
}
?>