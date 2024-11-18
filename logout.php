<?php
session_start();
$_SESSION['nome'] = null;
session_destroy();  
include('LOGIN1.php');
?>