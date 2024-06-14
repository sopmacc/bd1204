<?php
    include_once("conn.php");
    $selDir = $_POST['selectDiretor'];
    $selGen = $_POST['selectGeneros'];
    $txtFilmes = $_POST['txtNomeFilme'];

    $result_usuario = "INSERT INTO tbfilme (filme,codGenero,codDiretor) VALUES ('$txtFilmes','$selGen','$selDir')";

    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if (mysqli_affected_rows($conn) != 0) {
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = index.php'>
        <script type =\"text/javascript\">
        alert(\"Filme Cadastrado com Sucesso.\");
        </script>
        ";
    }
    else {
        echo"
        <META HTTP-EQUIV=REFRESH CONTENT = '0; URL = index.php'>
        <script type =\"text/javascript\">
        alert(\"O filme não foi Cadastrado com Sucesso.\");
        </script>
        ";
    }
?>