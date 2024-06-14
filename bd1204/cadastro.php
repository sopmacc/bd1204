<?php 
	include_once("conn.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
</head>
<body>
	<form method="POST" action="processa_cad_filmes.php">
		Nome do Filme: <input type="text" name="txtNomeFilme"><br><br>
		<select name="selectGenero">
			<option>Selecione</option>
			<?php
				$result_niveis_acessos = "SELECT * FROM tbgenerofilme";
				$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
				while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
					<option value="<?php echo $row_niveis_acessos['codGenerofilme']; ?>">
						<?php echo $row_niveis_acessos['generoFilme']; ?>
					</option> <?php

				}

				?>
		</select><br><br>

		<select name="selectDiretor">
			<option>Selecione</option>
			<?php
				$result_niveis_acessos = "SELECT * FROM tbdiretorfilme";
				$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
				while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
					<option value="<?php echo $row_niveis_acessos['codDiretor']; ?>">
						<?php echo $row_niveis_acessos['nomeDiretor']; ?>
					</option> <?php

				}

				?>
		</select><br><br>

		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>