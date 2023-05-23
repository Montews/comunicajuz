<?php
	include('conexao.php');
	$cliente=$_POST['cliente'];
	$whats=$_POST['whats'];
	$emailC=$_POST['emailC'];
	$pessoa=$_POST['pessoa'];
	$cpfnpj=$_POST['cpfnpj'];
	$advogado=$_POST['advogado'];
	$emailA=$_POST['emailA'];
	$oab=$_POST['oab'];
	$data=$_POST['data'];
	$nProcesso=$_POST['nProcesso'];


			$inserir = "INSERT INTO relatorio (cliente, whats, emailC, pessoa, cpfnj, advogado, emailA, oab, data, 	nProcesso) 
			VALUES ('$cliente', '$whats', '$emailC', '$pessoa', '$cpfnpj', '$advogado', '$emailA', '$oab', '$data', '$nProcesso')";
			$executar = mysqli_query  ($mysqli,$inserir);


		if($executar){
				echo "<script language='javascript' type='text/javascript'>
					alert('Informações Cadastradas com Sucesso');
					window.location.href='../paginas/relatorio.php';</script>";
			}






?>