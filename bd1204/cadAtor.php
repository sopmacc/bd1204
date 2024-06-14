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
	<form method="POST" action="processa_cad_atorFilme.php">
		<select name="selectAtor">
			<option>Selecione</option>
			<?php 
				$result_niveis_acessos = "SELECT * FROM tbator";
				$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
				while ($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)) { ?>
					<option value="<?php echo $row_niveis_acessos['codAtor']; ?>"><?php echo $row_niveis_acessos['nomeAtor']; ?></option> <?php
				}
			?>
		</select><br><br>

		<select name="selectFilme">
			<option>Selecione</option>
			<?php 
				$result_niveis_acessos = "SELECT * FROM tbfilme";
				$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
				while ($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)) { ?>
					<option value="<?php echo $row_niveis_acessos['codFilme']; ?>"><?php echo $row_niveis_acessos['filme']; ?></option> <?php
				}
			?>
		</select><br><br>

		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>