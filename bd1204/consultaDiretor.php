<?php
	include_once("conn.php");

	$sql=mysqli_query($conn, "select * from tbdiretorfilme");
	echo "<table border=1><tr><td>Codigo do Diretor</td><td>Nome do Diretor</td>";

	while ($linha=mysqli_fetch_array($sql))
	 {
		$codProduto=$linha['codDiretor'];
		$nomeProduto=$linha['nomeDiretor'];
		echo"<p>";

		echo"<tr><td>$codProduto</td><td> $nomeProduto</td>";
	}
	echo"</table>";
?>