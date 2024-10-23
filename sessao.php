<?php
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
if($email == NULL){
	die("Usuário não autenticado!
	<a href='LOGIN.php'>Logar</a>");
};
?>
