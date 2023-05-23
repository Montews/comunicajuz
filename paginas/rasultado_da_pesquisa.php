<?php
	include('../php/conexao.php');
	$consulta ="SELECT * FROM forms";
	$con = $mysqli->query($consulta) or die ($mysqli->error);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Comunica Juz</title>
		<link rel="shortcut icon"  href="../img/alt/logoo.ico">
		<link rel="stylesheet" href="../css/resultado_da_pesquisa.css">
		<link rel="stylesheet" href="../css/menu.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	
	<body >

		<section class="logo">
			<img src="../img/alt/logo.png" height="130px" >
		</section>

		<nav>
			<input type="checkbox" id="check">

			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>

			<ul>
				<li><a href="index.html">Início</a></li>
				<li><a href="cadastro.html">Cadastro</a></li>
				<li><a href="relatorio.php">Análise</a></li>	
				<li><a href="usuario.html">Adicionar Usuario</a></li>
				<li><a href="satisfacao.html">Satisfação</a></li>						
			</ul>

		</nav>

<!--inicio da tabela -->

			<?php while($dado = $con->fetch_array()){?>
		
				
				<div class="base">
				
					<div class="title">Informações do Usuario</div><br>

					<label class="label">• Qual seu nome?</label><br/>
						<div class="resp"> <?php echo $dado["pergunta1"];?></div><br><br>

					<label class="label">• Qual seu estado?</label><br/>
						<div class="resp"> <?php echo $dado["pergunta2"];?></div><br><br>

					<label class="label">• Qual a sua área de atuação</label><br/>
						<div class="resp"> <?php echo $dado["pergunta3"];?></div><br><br>

					<label class="label">• Há  quanto tempo você exerce a sua função?</label><br/>
						<div class="resp"> <?php echo $dado["pergunta4"]; ?></div><br><br>

					<label class="label">• Você tem familiaridade com a tecnologia?</label><br/>
						<div class="resp"> <?php echo $dado["pergunta5"];?></div><br><br>

					<label class="label">• Você usa a nossa plataforma há quanto tempo?</label><br/>
						<div class="resp"> <?php echo $dado["pergunta6"];?></div><br><br>

					<label class="label">• O quanto você diria que nosso sistema mudou seu estilo de trabalho?</label><br/>
						<div class="resp"> <?php echo $dado["pergunta7"];?></div><br><br>

					<label class="label">• O que o noso sistema mudou no seu estilo de trabalho?</label><br/>
						<div class="resp"> <?php echo $dado["pergunta8"];?></div><br><br>

					<label class="label">• Como você conheceu nossa empresa?</label><br/>
						<div class="resp"> <?php echo $dado["pergunta9"];?></div><br><br>

					<label class="label">• Deixe um relato do que poderiamos mudar no nosso sistema?</label>
						<div class="resp"> <?php echo $dado["pergunta10"];?></div><br><br>
						<hr>
				</div>
			<?php		 }?>








					
	
	


</body>
</html>