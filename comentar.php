<?php
include("sessao.php");
$texto = $_POST['texto'];
$uploaddir = 'images/';
$nomeArq = basename($_FILES['fotocomentario']['name']);
$uploadfile = $uploaddir.$nomeArq;
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "INSERT into comentarios (texto, fotocomentario, id_idusuarios, perfil_email)
values ('$texto', '$nomeArq', $id, '$email')";
echo $sql;
$executar = mysqli_query($conexao, $sql);

if (move_uploaded_file($_FILES['fotocomentario']['tmp_name'], $uploadfile)) {
	if($executar){
		echo "cadastrado";
		header('location:perfill.php');
	}
	else{
		echo "erro ao cadastrar";
	}
} else {
    echo "Erro ao enviar arquivo!";
}
$fechar = mysqli_close($conexao);
?>