<?php
	include('../php/conexao.php');
	$login=$_POST['login'];
	$senha=$_POST['senha'];

	$criptografia = MD5($senha);

	if($login =="" || $login ==null){
		echo "<script language='javascript' type='text/javascript'>
			alert('O campo login deve ser preenchido!');
			window.location.href='../paginas/usuario.html';</script>";

	}else{
		if($senha=="" || $senha == null){
			echo "<script language='javascript' type='text/javascript'>
				alert('O campo de senha deve ser prenchido!');
				window.location.href='../paginas/usuario.html';</script>";
			die();
		}else{
			$inserir = "INSERT INTO usuario (login, senha) VALUES ('$login', '$criptografia')";
			$executar = mysqli_query ($mysqli,$inserir);

			if($executar){
				echo "<script language='javascript' type='text/javascript'>
					alert('Login cadastrado com sucesso.');
					window.location.href='../paginas/login.html';</script>";
			}else{
				echo "<script language='javascript' type='text/javascript'>
					alert('Não foi possível cadastrar seu usuário.');
					window.location.href='../paginas/usuario.html';</script>";
			}
		}
	}





?>