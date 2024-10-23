<?php
include('sessao.php');
$idjogo = $_GET['idjogos'];
$idusuarios = $_SESSION['id'];
$con = mysqli_connect('localhost','root', '', 'indieconnekt');
$sql = "INSERT INTO listaDesejo (id_idjogos, id_idusuarios) values ($idjogo, $idusuarios)";
$exe = mysqli_query($con, $sql);
if($exe){
	echo"Produto inserido no carrinho";
}
else{
	echo"erro";
}
echo "<a href='dashboardlog.php'>adicione mais jogos!</a>";
$fecha = mysqli_close($con);
?>