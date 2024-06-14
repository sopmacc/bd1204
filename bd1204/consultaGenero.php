<?php
include_once("conn.php");

$sql=mysqli_query($conn, "select * from tbgenero");
echo"<table border = 1><tr><td>Codigo do Genero</td><td>Genero do Filme</td>";

while($linha=mysqli_fetch_array($sql)){
    $codProduto=$linha['codGenero'];
    $nomeProduto=$linha['genero'];
    echo"<p>";

    echo"<tr><td>$codProduto</td><td> $nomeProduto</td>";
}
?>