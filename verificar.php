<?php
session_start();
$senha = $_POST['senha'];
$login = $_POST['email'];
$username = $_POST['username'];
$conexao = mysqli_connect('localhost','root','','indieconnekt');
$sql = "SELECT * FROM usuarios WHERE email like '$login'
and senha like '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
if($res['email'] != NULL){
   $_SESSION['username'] = $res['username'];
   $_SESSION['email'] = $res['email'];
   $_SESSION['id'] = $res['idusuarios'];
   header("Location: dashboardlog.php");
}
else{
   echo "Login e/ou senha incorretos";
}
$fechar = mysqli_close($conexao);
?>
