<?php
	include('conexao.php');
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$mensagem=$_POST['mensagem'];


			$inserir = "INSERT INTO contato (nome, email, mensagem) 
			VALUES ('$nome', '$email', '$mensagem')";
			$executar = mysqli_query  ($mysqli,$inserir);


		if($executar){
				echo "<script language='javascript' type='text/javascript'>
					alert('Contato cadastrado com Sucesso');
					window.location.href='../paginas/contato.html';</script>";
			}




	


?>