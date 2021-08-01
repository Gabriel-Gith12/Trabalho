// JavaScript Document
	function telaListar(){
		
		/// console.log('Foi para a Tela de Cadastro');
		window.location.href = 'listarClientes.php';
	}
	function telaCadastrar(){

		/// console.log('Foi para a Tela de Cliente');
		window.location.href = 'formCadastro.php';
	}
	function telaEditar(valor){

		/// console.log('Foi para a Tela de Edição');
		/// window.location.href = 'formEditarCadastro.php?id='+valor;
		$('#idFormulario').val(valor);
		$('#formulario').submit();
	}

	function editar(valor){
		
		var result = confirm("Você tem certeza?");
		if(result == true){	
		idade      = $('#idade').val();
		nome       = $('#nome').val();		
		sexo       = $('#sexo').val();
		pais       = $('#pais').val();
		estado     = $('#estado').val();
		municipio  = $('#municipio').val();
		id         = $('#id').val();
		$.ajax({
			
			type:"POST",
			url:"controle/controle_cliente.php",
			data:{acao:"Altera",idade:idade,nome:nome,sexo:sexo,pais:pais,estado:estado,municipio:municipio,id:id},
			
			success: function(data){
				console.log("editado");
				telaListar()
				alert("Cliente Editado!");
			}	
		});	
	}else{
		alert("Cliente não Editado!");
	}
}

	function cadastrar(){
		
		var result = confirm("Você tem certeza?");
		if(result == true){	
		idade     = $('#idade').val();
		nome      = $('#nome').val();		
		sexo      = $('#sexo').val();
		pais      = $('#pais').val();
		estado    = $('#estado').val();
		municipio = $('#municipio').val();
		
		$.ajax({
			
			type:"POST",
			url:"controle/controle_cliente.php",
			data:{acao:"insere",idade:idade,nome:nome,sexo:sexo,pais:pais,estado:estado,municipio:municipio},
			
			success: function(data){
				console.log("inserido");
				telaListar()
				alert("Cliente Cadastrado!");
			}	
		});	
	}else{
		alert("Cliente não Cadastrado!");
	}
}

	function deletar(valor){  
		
		var result = confirm("Você tem certeza?");
		if(result == true){
			
		$.ajax({
			type:"POST",
			url:"controle/controle_cliente.php",
			data:{acao:"deletar",id:valor},
			
			success: function(data){
				console.log("deletado");
				window.location.href = 'listarClientes.php';	
			alert("Cliente Deletado!");
			}
		});	
	}else{
		alert("Registro não Deletado!");
	}
}