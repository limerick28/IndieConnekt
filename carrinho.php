<?php
include('sessao.php');
$idusuarios = $_SESSION['id'];
$con = mysqli_connect('localhost','root', '', 'indieconnekt');
$sql = "SELECT * from listaDesejo, jogos where listaDesejo.id_idusuarios = $idusuarios and listaDesejo.id_idjogos=jogos.idjogos";
$exe = mysqli_query($con, $sql);
while($res = mysqli_fetch_array($exe)){
	$idlista = $res['idlista'];
	$nome = $res['nomeJogo'];
	$foto = $res['fotoJogo'];
	echo "<div>Produto: $nome, <img src='images/$foto'><a href='delcarrinho.php?id=$idlista'>Remover</a></div>";
}
echo "<div>&nbsp;</div><div><a href='dashboardlog.php'>adicione mais jogos!</a></div>";
$fecha = mysqli_close($con);
?>