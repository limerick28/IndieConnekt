<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarios (username, email, senha) VALUES ('$username', '$email', '$senha_hash')";

$exe = mysqli_query($conexao, $sql);

if ($exe) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
