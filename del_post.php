<?php
session_start();
$idPosts = $_GET['idPosts'];
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "select foto from posts where idPosts=$idPosts";
$exe = mysqli_query($conexao,$sql);
$res = mysqli_fetch_array($exe);
$foto = $res['foto'];
$sql = "DELETE FROM usuarios WHERE idPosts=$idPosts";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
	echo $foto;
	unlink("images/$foto");
    header('location:perfill.php');
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);

?>