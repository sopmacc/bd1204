<?php
	include_once("conn.php");

	$sql=mysqli_query($conn, "select * from tbator");
	echo "<table border=1><tr><td>Codigo do Ator</td><td>Nome do Ator</td>";

	while ($linha=mysqli_fetch_array($sql))
	 {
		$codProduto=$linha['codAtor'];
		$nomeProduto=$linha['nomeAtor'];
		echo"<p>";

		echo"<tr><td>$codProduto</td><td> $nomeProduto</td>";
	}
	echo"</table>";

?>