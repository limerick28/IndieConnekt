<?php
include("sessao.php");
$nome = $_POST['nomePost'];
$comentario = $_POST['comentario'];
$uploaddir = 'images/';
$nomeArq = basename($_FILES['foto']['name']);
$uploadfile = $uploaddir.$nomeArq;
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "INSERT into posts (nomePost, comentario, foto, id_idusuarios)
values ('$nome', '$comentario', '$nomeArq', $id)";
echo $sql;
$executar = mysqli_query($conexao, $sql);

if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
	if($executar){
		echo "cadastrado";
		 header("location:perfill.php");
	}
	else{
		echo "erro ao cadastrar";
	}
} else {
    echo "Erro ao enviar arquivo!";
}
$fechar = mysqli_close($conexao);

?>