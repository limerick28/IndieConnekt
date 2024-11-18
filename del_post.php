<?php
session_start();
$idPost = $_GET['idPost'];
$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');
$sql = "SELECT foto FROM posts WHERE idPost = $idPost";
$result = mysqli_query($conexao, $sql);
if ($result && $res = mysqli_fetch_assoc($result)) {
    unlink("images/" . $res['foto']);
    mysqli_query($conexao, "DELETE FROM posts WHERE idPost = $idPost");
    header('Location: perfill.php');
    exit;
} else {
    echo "Erro ao excluir o post!";
}

mysqli_close($conexao);
?>
