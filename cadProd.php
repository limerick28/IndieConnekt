<?php
include("sessao.php");
$nome = $_POST['nomePost'];
$comentario = $_POST['comentario'];
$uploaddir = 'c:/xampp/htdocs/INDIECONNEKT/imagens/';
$nomeArq = basename($_FILES['arquivo']['name']);
$uploadfile = $uploaddir.$nomeArq;
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "INSERT into posts (nomePost, comentario, foto)
values ('$nome', '$comentario', '$nomeArq')";
echo $sql;
$executar = mysqli_query($conexao, $sql);

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
	if($executar){
		echo "cadastrado";
	}
	else{
		echo "erro ao cadastrar";
	}
} else {
    echo "Erro ao enviar arquivo!";
}
$fechar = mysqli_close($conexao);

?>