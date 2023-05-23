<?php
	include('../php/conexao.php');
	$pergunta1=$_POST['pergunta1'];
	$pergunta2=$_POST['pergunta2'];
	$pergunta3=$_POST['pergunta3'];
	$pergunta4=$_POST['pergunta4'];
	$pergunta5=$_POST['pergunta5'];
	$pergunta6=$_POST['pergunta6'];
	$pergunta7=$_POST['pergunta7'];
	$pergunta8=$_POST['pergunta8'];
	$pergunta9=$_POST['pergunta9'];
	$pergunta10=$_POST['pergunta10'];


			$inserir = "INSERT INTO forms (pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10) 
			VALUES ('$pergunta1', '$pergunta2', '$pergunta3', '$pergunta4', '$pergunta5', '$pergunta6', '$pergunta7', '$pergunta8', '$pergunta9', '$pergunta10')";
			$executar = mysqli_query  ($mysqli,$inserir);


		if($executar){
				echo "<script language='javascript' type='text/javascript'>
					alert('Informações Cadastradas com Sucesso');
					window.location.href='../paginas/relatorio.php';</script>";
		}else{
			echo "<script language='javascript' type='text/javascript'>
					alert('Não foi enviar sua pesquisa.);
					window.location.href='../paginas/relatorio.php';</script>";
		}






?>