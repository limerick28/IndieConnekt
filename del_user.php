<?php
session_start();
$idusuarios = $_GET['idusuarios'];
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "select foto from usuarios where idusuarios=$idusuarios";
$exe = mysqli_query($conexao,$sql);
$res = mysqli_fetch_array($exe);
$foto = $res['foto'];
$sql = "DELETE FROM usuarios WHERE idusuarios=$idusuarios";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
	echo $foto;
	unlink("images/$foto");
    header('location:tabelauser.php');
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);

?>
