<?php

$categoria = "Livros";
$data_cadastro = date("Y-m-d H:i:s");

//Conexão com o Banco de Dados
$host = mysqli_connect("localhost", "root", "", "mydb");

if ($host) { echo "Conexão com o Banco efetuada.";}

$query = "INSERT INTO categorias VALUES ('', '$categoria', 
'$data_cadastro');";
mysqli_query($host, $query);

if(mysqli_affected_rows($host)){
    echo "<script> alert('Categoria cadastrada com sucesso.');
    location.href='../index.html'; </script>";
}





?>