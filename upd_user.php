<?php
session_start();
$id = $_GET['id'];
$conexao = mysqli_connect('localhost','root','','indieconnekt');
$sql = "SELECT * FROM usuarios WHERE id=$id";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
$fechar = mysqli_close($conexao);
?>
    <form action="atualizaruser.php" method="post">
        Nome do usuario<input type="text" name="username"
        value="<?php echo $res['username'];?>"><br>
        fotouser <input type="file" name="fotouser"
        value="<?php echo $res['fotouser'];?>"><br>
        <input type="submit">
    </form>
	<?php
include('final.html');?>