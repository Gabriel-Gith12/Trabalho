<?php 
/// Load Modelo - Star
require_once($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");
/// Load Modelo - End

class BuscaSexo{
	
	function sexo(){
		
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		/// Instrucoes SQL select - Start

		$sql = "SELECT * FROM sexo";
		$resultado   = mysqli_query($conectar,$sql) or die (mysqli_error());
		$r = 0;
		
		while($dados = mysqli_fetch_assoc($resultado)){	
			$linha[$r]['idSexo']       = $dados['idSexo'];	
			$linha[$r]['nomeSexo']     = $dados['nomeSexo'];
			$r++;
		} 
		return $linha;
	}
}
?>