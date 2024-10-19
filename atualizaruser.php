<?php
session_start();
$idusuarios = $_POST['idusuarios'];
$username = $_POST['username'];
$uploaddir = 'c:/xampp/htdocs/indieconnekt/images/';
$nomeArq = basename($_FILES['fotouser']['name']);
$uploadfile = $uploaddir.$nomeArq;
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "update usuarios set username='$username', fotouser='$fotouser'
where idusuarios=$idusuarios";
$executar = mysqli_query($conexao, $sql);
if (move_uploaded_file($_FILES['fotouser']['tmp_name'], $uploadfile)) {
	if($executar){
		echo "atualizado com sucesso";
	}
  
}
else{
    echo "Errooo";
      echo "$sql";
}
$fechar = mysqli_close($conexao);

