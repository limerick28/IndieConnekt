<?php
session_start();
$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
    $sql = "INSERT INTO usuarios (username, email, senha) VALUES ('$username', '$email', '$senha')";
    $executar = mysqli_query($conexao, $sql);


    if ($executar) {
        echo "Cadastro realizado com sucesso! <a href='LOGIN.html'>Fazer login</a>";
    } else {
        echo "Erro ao cadastrar! <a href='LOGIN.html'>Tentar Novamente</a>";
    }

    $res = mysqli_fetch_array($executar);
  
    if ( $res['senha']) {
        $_SESSION['nome'] = $res['username'];
        $_SESSION['id'] = $res['id'];
        $_SESSION['adm'] = $res['adm'];
        header('Location: inicial.php');
        exit;
    } else {
        echo "Login e/ou senha incorretos! <a href='login.html'>Tentar Novamente</a>";
    }


mysqli_close($conexao);
include('pagina.html');
?>
