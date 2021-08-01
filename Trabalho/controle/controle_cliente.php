<?php
/// Load Modelo - Star
include($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");

/// Load Modelo - End

class Cliente{
	
	public function busca($id = false){
		
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		/// Instrucoes SQL select - Start

		$sql = "SELECT * FROM aluno";
		
		if($id>0){
			
		$sql .= " WHERE idAluno = ".$id;
		}

        $resultado   = mysqli_query($conectar,$sql);
		  $r = 0;
		
        while($dados = mysqli_fetch_assoc($resultado)){	
		$linha[$r]['idAluno']     = $dados['idAluno'];	
	    $linha[$r]['idadeAluno']  = $dados['idadeAluno'];
	    $linha[$r]['nomeAluno']   = $dados['nomeAluno'];
		$linha[$r]['idSexo']      = $dados['idSexo'];
		$linha[$r]['idPais']      = $dados['idPais'];
		$linha[$r]['idEstado']    = $dados['idEstado'];
		$linha[$r]['idMunicipio'] = $dados['idMunicipio'];
		  $r++;
   }
		
		/// $resultado = 'Mostra Cliente';
		/// Instrucoes SQL select - Start
		
		/// Popular Variáveis
		return $linha; /// Enviar valores para a instancia
		
	}
	
	function insere($idade,$nome,$sexo,$pais,$estado,$municipio){
		$resultado = true;
		$obj_con   = new ConexaoBD();
		$conectar  = $obj_con->con();
		
		/// montar a instrução SQL  e executar
		$sqlInsert = 
		"INSERT INTO aluno (
		 idadeAluno,
		 nomeAluno,
		 idSexo,
		 idPais,
		 idEstado,
		 idMunicipio

		) VALUES (
		
		'".$idade."',
		'$nome',
		'.$sexo.',
		'.$pais.',
		'.$estado.',
		'.$municipio.')
		;";
		mysqli_query($conectar,$sqlInsert)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
		
        }
	
	function atualizar($idade,$nome,$sexo,$pais,$estado,$municipio,$id){
		$resultado = true;
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		
		/// montar a instrução SQL  e executar
		$sqlUpdate = "
		UPDATE aluno set idadeAluno=".$idade.", nomeAluno='".$nome."' , idSexo=".$sexo.", idPais=".$pais.", idEstado=".$estado.", idMunicipio=".$municipio."
		WHERE idAluno =" . $id;
	
		 /// return $sqlUpdate;
		mysqli_query($conectar,$sqlUpdate)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
	}
	
	function deletar($id){
		$resultado = true;
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		
		/// montar a instrução SQL  e executar
		$sqlDelete = "DELETE FROM aluno WHERE idAluno =" . $id;

		 /// return $sqlUpdate;
		mysqli_query($conectar,$sqlDelete)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
	}
}

?>