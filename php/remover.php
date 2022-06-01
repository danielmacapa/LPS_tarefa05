<?php

$categoria = $_GET["categoria"];

$query = "DELETE FROM categorias WHERE nome_categoria = '$categoria'";

$con = mysqli_connect("localhost", "root", "", "mydb");

mysqli_query($con, $query);

?>