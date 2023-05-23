<?php
	include('../php/conexao.php');
	$consulta ="SELECT * FROM relatorio";
	$con = $mysqli->query($consulta) or die ($mysqli->error);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Comunica Juz</title>
		<link rel="shortcut icon"  href="../img/alt/logoo.ico">
		<link rel="stylesheet" href="../css/menu.css">
		<link rel="stylesheet" href="../css/tabel.css">
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
	<table class="table">
		<thead>
			<th>Cliente</th>
			<th>Whats</th>
			<th>Email do Cliente<br></th>
			<th>Pessoa</th>
			<th>CPF/CNPJ</th>
			<th>Advogado</th>
			<th>OAB</th>
			<th>Inicio do Processo</th>
			<th>Código do Processo</th>
			<th>Email Advogado</th>
			<th>Opções</th>
		</thead>
			<?php while($dado = $con->fetch_array()){?>
				<tbody>
					<tr>
						<td class="Cliente"><?php echo $dado["cliente"]; ?></td>
						<td class="Whats"><?php echo $dado["whats"]; ?></td>
						<td class="Email do Cliente"><?php echo $dado["emailC"]; ?></td>		
						<td class="Pessoa"><?php echo $dado["pessoa"]; ?></td>				
						<td class="CPF/CNPJ	"><?php echo $dado["cpfnj"]; ?></td>
						<td class="Advogado"><?php echo $dado["advogado"]; ?></td>		
						<td class="OAB"><?php echo $dado["oab"]; ?></td>
						<td class="Inicio do Processo	"><?php echo 	date("d/m/20y", strtotime ($dado["data"])); ?></td>
						<td class="Código do Processo"><?php echo $dado["nProcesso"]; ?></td>
						<td class="Email do Advogado"><?php echo $dado["emailA"]; ?></td>
						<td><a href="editar.phpcodigo=<?php echo $dado["whats"]; ?>">Editar</a>
						<a href="editar.phpcodigo=<?php echo $dado["whats"]; ?>">Excluir</a></td>
					</tr>
				<tbody>
			<?php }?>
	</table>

</body>
</html>