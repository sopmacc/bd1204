<?php 
	include_once("conn.php");

	$sql=mysqli_query($conn, "select * from tbgenerofilme");
	echo "<table border=1><tr><td>Codigo do Gênero</td><td>Gênero</td>";

	while ($linha=mysqli_fetch_array($sql))
	 {
		$codProduto=$linha['codGenerofilme'];
		$nomeProduto=$linha['generoFilme'];
		echo"<p>";

		echo"<tr><td>$codProduto</td><td> $nomeProduto</td>";
	}
	echo"</table>";
?>