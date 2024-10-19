<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
$sql = "INSERT INTO usuarios (username, email, senha) VALUES ('$username', '$email', '$senha')";

$exe = mysqli_query($conexao, $sql);

if ($exe) {
    header('location:perfill.php');
} else {
    echo  "<script>alert('deu erro aí');</script>";  mysqli_error($conexao);
}

mysqli_close($conexao);
?>
