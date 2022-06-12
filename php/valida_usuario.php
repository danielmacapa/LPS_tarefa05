<?php
// inicia a sessão
session_start();

// recupera os valores de usuário e senha da tela de login
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// testa a conexão com o banco
// if ($host){    echo "OK";}

// se o botão Enviar (do form em index) for clicado
if (isset($_POST['submit'])){
    // conexão com o banco de dados (localhost, usuario, senha, nome do banco)
    $host = mysqli_connect("localhost", "root", "", "mydb");

    // consulta o banco atrás de usuário e senha
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'
     AND senha = '$senha'";
    
    //executa a query
    $exec = mysqli_query($host, $query);
    
    if(mysqli_num_rows($exec) > 0){
        echo "<script> alert('Login realizado');
        location.href='../tela_cadastro.html'</script>";
    }
    else{
        echo "<script>alert('Usuário ou senha inválido');
        location.href='../index.html'</script>";
    }
}

?>