<?php
include('sessao.php');
$con = mysqli_connect('localhost','root', '', 'indieconnekt');
$sql = "select * from posts order by nomePost asc";
$exe = mysqli_query($con, $sql);
while($res = mysqli_fetch_array($exe)){
	$idPost = $res['idPost'];
	$nomePost = $res['nomePost'];
	$comentario = $res['comentario'];
	$foto = $res['foto'];
	echo "<div><img width='150px' src='imagens/$foto'>Produto: $nomePost Preço: $comentario</div>";
}
$fecha = mysqli_close($con);

?>