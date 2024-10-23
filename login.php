<?php
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conexao, $email);
$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha like '$senha' ";
$exe = mysqli_query($conexao, $sql);

if ($exe && mysqli_num_rows($exe) > 0) {
    $res = mysqli_fetch_assoc($exe);
    $_SESSION['username'] = $res['username'];
    $_SESSION['idusuarios'] = $res['idusuarios'];   
    $_SESSION['fotouser'] = $res['fotouser'];
    $_SESSION['email'] = $res['email'];
    header('location:perfill.php');
} else {
    echo "Email e/ou senha incorretos";
}

mysqli_close($conexao);
?>