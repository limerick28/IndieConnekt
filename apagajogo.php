<?php
include('sessao.php');
$id = $_GET['idjogos'];
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "SELECT fotoJogo from jogos where idjogos=$id";
$exe = mysqli_query($conexao,$sql);
$res = mysqli_fetch_array($exe);
$foto = $res['fotoJogo'];
$sql = "DELETE FROM jogos WHERE idjogos=$id";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
	echo $foto;
	unlink("images/$foto");
    header('location:dashboardlog.php');
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);
?>
