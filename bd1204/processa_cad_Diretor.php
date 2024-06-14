<?php
	include_once("conn.php");
	$diretor = $_POST['txtDiretor'];


	$result_diretor = "INSERT INTO tbdiretorfilme(nomeDiretor) VALUES ('$diretor')";

	$resultado_diretor = mysqli_query($conn, $result_diretor);


	if (mysqli_affected_rows($conn) !=0) 
	{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
				<script type=\"text/javascript\">
					alert(\"Diretor cadastrado com sucesso.\");
				</script>
			";
	}

	else
	{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDiretor.php'>
				<script type=\"text/javascript\">
					alert(\"Falha no cadastro do diretor.\");
				</script>
			";
	}

?>