<?php
include('sessao.php');
$id = $_GET['id'];
$conexao = mysqli_connect
('localhost','root','','indieconnekt');
$sql = "DELETE FROM listaDesejo WHERE idlista=$id";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
    header('location:carrinho.php');
}
else{
    echo "Erro!";
}
echo "<div><a href='carrinho.php'>Voltar ao carrinho</a></div>";
$fechar = mysqli_close($conexao);
?>
