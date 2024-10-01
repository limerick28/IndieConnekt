<?php
session_start();
include('login.php');
include('pagina.php');
$id = $_POST['id'];
$username = $_POST['username'];
$fotouser = $_POST['fotouser'];
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "update usuarios set username='$username', fotouser=$fotouser,
where id=$id";
$executar = mysqli_query($conexao, $sql);
if($executar){
    echo "Atualizado com sucesso!";
}
else{
    echo "Erro";
}
$fechar = mysqli_close($conexao);
include('final.html');
