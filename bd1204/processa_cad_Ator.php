<?php
	include_once("conn.php");
	$ator = $_POST['txtAtor'];


	$result_ator = "INSERT INTO tbator(nomeAtor) VALUES ('$ator')";

	$resultado_ator = mysqli_query($conn, $result_ator);

	if (mysqli_affected_rows($conn) !=0) 
	{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
				<script type=\"text/javascript\">
					alert(\"Ator cadastrado com sucesso.\");
				</script>
			";
	}

	else
	{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAtores.php'>
				<script type=\"text/javascript\">
					alert(\"Falha no cadastro do ator.\");
				</script>
			";
	}



?>