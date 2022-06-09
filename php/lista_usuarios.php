<?php

//Conexão com o Banco de Dados
$host = mysqli_connect("localhost", "root", "", "mydb");

$query = "SELECT * FROM usuarios";

$exec = mysqli_query($host, $query);

if(mysqli_affected_rows($host)){
    echo "<h1>Lista de usuários</h1>";

    while($dados = mysqli_fetch_array($exec)){
        echo 'ID: '.$dados["id"]."<br>";
        echo 'Nome completo: '.$dados["nome"]."<br>";
        echo 'E-mail: '.$dados["email"]."<br>";
        echo 'Data de Nascimento: '.$dados["data"]."<br>";
        echo 'CPF: '.$dados["cpf"]."<br>";
        echo 'Usuário: '.$dados["usuario"]."<br>";
        echo 'Senha: '.$dados["senha"]."<br><br>";
    }
}
echo "<input type='button' value='Sair' 
onclick=location.href='../index.html'>";


?>