<?php

class conexaoBD{
	
	function con(){
		$conectar = mysqli_connect("localhost","root","") or die(mysqli_error());
		/// Selecionar Banco.
		mysqli_select_db($conectar,"aluno_db")or die(mysqli_error());
		
		return $conectar;
	}
}
/*
   /// modelo - Star
   /// Conexão Banco de Dados
   $conectar = mysqli_connect("localhost","root","") or die(mysqli_error());
   Seleciona Banco de dados
   mysqli_select_db($conectar,"mvc")or die(mysqli_error());
   /// modelo - End
   
   $sql = "SELECT * FROM cliente";

   $resultado = mysqli_query($conectar,$sql);

   while($dados = mysqli_fetch_assoc($resultado)){
	   
	   echo 'Nome:'. $dados['nomeCliente']."<br>";
	   echo 'Idade:'. $dados['idadeCliente']."<br>";
   }
   */
?>