<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "bd1204";

	$conn = new mysqli ($host, $user, $pass, $banco);

	if ($conn->connect_error)
	{
		die ("Falha na conexão: ". $conn->connect_error);
	}

?>