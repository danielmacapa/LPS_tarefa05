<?php

//Conexão com o Banco de Dados
$host = mysqli_connect("localhost", "root", "", "mydb");

$query = "SELECT * FROM categorias WHERE id >= 3;

//echo $query;

/* $exec = mysqli_query($host, $query);

if(mysqli_affected_rows($host)){
    echo "A consulta está sendo realizada";

    while($dados = mysqli_fetch_array($exec)){
        echo $dados["id"]."<br>";
        echo $dados["nome_categoria]."<br>";
        echo $dados["data_cadastro"]."<br><br>";
    }
}





?>