<?php
session_start();
if(isset($_SESSION['idusuarios'])){
    $id = $_SESSION['idusuarios'];  
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $fotouser =  $_SESSION['fotouser']; 

    
    if($id == null){
        die("Usuário não autenticado! <a href='LOGIN.php'>Logar</a>");
    }
} else {
  
    header("Location: LOGIN.php");
    exit();
}
?>
