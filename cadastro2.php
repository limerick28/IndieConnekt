<?php
session_start();
$username = $_POST['username'];
$senha = $_POST['senha'];
$email = $_POST['email'];
// Conecta ao banco de dados
$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Insere na tabela usuarios
$sql1 = "INSERT INTO usuarios (username, email, senha) VALUES ('$username', '$email', '$senha')";
$exe1 = mysqli_query($conexao, $sql1);

if ($exe1) {
    echo "Cadastro realizado com sucesso na tabela usuarios!<br>";
} else {
    echo "Erro ao cadastrar na tabela usuarios: " . mysqli_error($conexao) . "<br>";
}

// Insere na tabela perfil
$sql2 = "INSERT INTO perfil (nome_username, perfil_email, foto_fotouser) VALUES ('$username', '$email', 'usericon.jpg')";
$exe2 = mysqli_query($conexao, $sql2);

if ($exe2) {
    echo "Cadastro realizado com sucesso na tabela perfil!";
    header('location:dashboardlog.php');
} else {
    echo "Erro ao cadastrar na tabela perfil: " . mysqli_error($conexao);
}

// Fecha a conexão
mysqli_close($conexao);
?>
