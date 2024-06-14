<?php 
	include_once("conn.php");
	$selAtor = $_POST['selectAtor'];
	$selFilme = $_POST['selectFilme'];

	$result_usuario = "INSERT INTO tbAtorFilme(codAtor, codFilme) VALUES ('$selAtor','$selFilme')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	if (mysqli_affected_rows($conn) != 0) {
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAtor.php'>
		<script type=\"text/javascript\">
			alert(\"Ator castrado com Sucesso. \");
		</script>
			";
	}

	else {
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAtor.php'>
		<script type=\"text/javascript\;>
			alert(\"Ator não castrado com Sucesso. \");
		</script>
			";
	}
?>