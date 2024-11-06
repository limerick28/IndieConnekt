<?php
session_start();
$fotouser = $_SESSION['fotouser'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
if($email == NULL){
	die("Usuário não autenticado!
	<a href='LOGIN.php'>Logar</a>");
};
?>
