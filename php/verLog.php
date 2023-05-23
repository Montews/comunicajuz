<?php
	include('../php/conexao.php');
	
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$entrar = $_POST['entrar'];
	
	$criptografia = MD5($senha);
	
	if(isset($entrar)){
		$verifica = mysqli_query($mysqli,"SELECT * FROM usuario WHERE login = '$usuario' and senha = '$criptografia'")or die("Erro ao buscar no banco");
	

	if($usuario = "" || $usuario == null){
		echo "<script language = 'javascript' type = 'text/javascript'>alert('Preencha o campo de Usuário!');
		window.location.href = '../paginas/login.html';
		</script>";
	}if($senha = "" || $senha == null){
		echo "<script language = 'javascript' type = 'text/javascript'>alert('Preencha o campo de Senha');
		window.location.href = '../paginas/login.html';
		</script>";
	}if(mysqli_num_rows($verifica)<=0){
			echo "<script language='javascript' type='text/javascript'>
			alert('Não foi possível fazer login. Usuário/senha incorretos');
			window.location.href='../paginas/login.html';</script>";			
			die();		
	}else{
			$_SESSION['usuario'];
			header('Location:../paginas/relatorio.php');
			exit();
		}
	}
?>