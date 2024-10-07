<?php
include("sessao.php");
$nome = $_POST['nomeJogo'];
$descricao = $_POST['descricao'];
$uploaddir = 'images/';
$nomeArq = basename($_FILES['fotoJogo']['name']);
$uploadfile = $uploaddir.$nomeArq;
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "INSERT into jogos (nomeJogo, descricaojogo, fotoJogo, id_idusuarios)
values ('$nome', '$descricao', '$nomeArq', $id)";
echo $sql;
$executar = mysqli_query($conexao, $sql);

if (move_uploaded_file($_FILES['fotoJogo']['tmp_name'], $uploadfile)) {
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