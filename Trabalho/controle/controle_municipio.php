<?php 
/// Load Modelo - Star
require_once($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");
/// Load Modelo - End

class Busca{
	
	function municipio(){
		
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		/// Instrucoes SQL select - Start

		$sql = "SELECT * FROM municipio";
		$resultado   = mysqli_query($conectar,$sql) or die (mysqli_error());
		$r = 0;
		
		while($dados = mysqli_fetch_assoc($resultado)){	
			$linha[$r]['idMunicipio']     = $dados['idMunicipio'];	
			$linha[$r]['nomeMunicipio']   = $dados['nomeMunicipio'];	
			$r++;
		} 
		return $linha;
	}

	function  estado(){
		
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		/// Instrucoes SQL select - Start

		$sql = "SELECT * FROM estado";
		$resultado   = mysqli_query($conectar,$sql) or die (mysqli_error());
		$r = 0;
		
		while($dados = mysqli_fetch_assoc($resultado)){	
			$linha[$r]['idEstado']     = $dados['idEstado'];	
			$linha[$r]['nomeEstado']   = $dados['nomeEstado'];
			$r++;
		}
		return $linha;
	}
	
	function  pais(){
		
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		/// Instrucoes SQL select - Start

		$sql = "SELECT * FROM pais";
		$resultado   = mysqli_query($conectar,$sql) or die (mysqli_error());
		$r = 0;
		
		while($dados = mysqli_fetch_assoc($resultado)){	
			$linha[$r]['idPais']     = $dados['idPais'];	
			$linha[$r]['nomePais']   = $dados['nomePais'];
			$r++;
		}
		return $linha;
	}
}
?>