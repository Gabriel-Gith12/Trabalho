// JavaScript Document

function telaLogin(){
	window.location.href = 'login.php';
}

function telaPrincipal(){
	window.location.href = 'paginaPrincipal.php';
}

function telaListarClientes(){
	window.location.href = 'listarClientes.php';
}

function telaPesquisar(){
	window.location.href = 'paginaPesquisa.php';
}

function verificar(){	
	var email = $('#email').val();
	var senha = $('#senha').val();
	var acao  = $('#acao').val();
	
	$.ajax({
		type:"POST",
		url:"controle/controle_login.php",
		data:{acao:acao, email:email, senha:senha},
		
		success: function(data){
			/// console.log("logado");
			/// alert("Cliente Logado!");
			if(data==1){
				window.location.href = 'paginaPrincipal.php';
			}else{
				window.location.href = 'login.php';
			}
		}
	});
	
}