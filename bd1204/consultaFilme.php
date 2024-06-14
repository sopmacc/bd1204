<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta de filmes</title>
</head>
<body>
	<?php
	require_once ("conn.php");
	?>
	<form action="consultaFilme.php" method="post">
	<select name="selectFilmes">
		<option>Selecione</option>
		<?php
		$result_niveis_acessos = "SELECT * FROM tbfilme";
		$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
		while ($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)) { ?>
			<option value="<?php echo $row_niveis_acessos['codFilme']; ?>"><?php echo $row_niveis_acessos['filme']; ?></option> <?php 
			
		}

		?>
	</select><br><br>
	<input type="submit" name="Buscar">
		
	</form>

	<?php 

	$cod = $_POST['selectFilmes'];
	$resultado = mysqli_query($conn,"select tbfilme.filme,tbgenerofilme.generoFilme,tbdiretorfilme.nomeDiretor from tbfilme,tbgenerofilme,tbdiretorfilme where tbgenerofilme.codGenerofilme = tbfilme.codGenero and tbdiretorfilme.codDiretor = tbfilme.codDiretor and tbfilme.codFilme='".$cod."'");

	while($linha = mysqli_fetch_array($resultado))
	{
		echo "<br>Filme: ";
		echo $linha['filme'];
		echo "<br>Diretor: ";
		echo $linha['nomeDiretor'];
		echo "<br>Gênero: ";
		echo $linha['generoFilme'];
		echo "<br>";
	}

	$result = mysqli_query($conn, "select tbator.nomeAtor FROM tbator,tbatorfilme WHERE tbator.codAtor=tbatorfilme.codAtor AND tbatorfilme.codFilme='".$cod."'");
	echo "<br>Elenco: <br>";

	while($linha = mysqli_fetch_array($result))
	{
		echo $linha['nomeAtor'];
		echo "<br>";
	}

?>
</body>
</html>