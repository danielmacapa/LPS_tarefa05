<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$cpf = $_POST['cpf'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//Conexão com o Banco de Dados (localhost, usuário, senha e banco)
$host = mysqli_connect("localhost", "root", "", "mydb");

if ($host){ 
    echo "Conexão com o Banco efetuada.";
}

$query = "INSERT INTO usuarios VALUES ('', '$nome', 
'$email', '$data', '$cpf', '$usuario', '$senha');";

$exec = mysqli_query($host, $query);
echo "$exec";

if(mysqli_affected_rows($host)){
    echo "<script> alert('Usuário cadastrado com sucesso.');
    location.href='../php/lista_usuarios.php'; </script>";
}





?>