<?php
session_start();

$idusuarios = $_POST['idusuarios'];
$username = $_POST['username'];

$uploaddir = 'c:/xampp/htdocs/indieconnekt/images/';
$nomeArq = basename($_FILES['fotouser']['name']);
$uploadfile = $uploaddir . $nomeArq;

$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

if (move_uploaded_file($_FILES['fotouser']['tmp_name'], $uploadfile)) {
    
    $sql = "UPDATE usuarios SET username=?, fotouser=? WHERE idusuarios=?";


    $stmt = mysqli_prepare($conexao, $sql);

   
    mysqli_stmt_bind_param($stmt, 'ssi', $username, $nomeArq, $idusuarios);

    
    if (mysqli_stmt_execute($stmt)) {
        echo "Atualizado com sucesso";
        $_SESSION['fotouser'] = $nomeArq;
        header('Location: perfill.php');
    } else {
        echo "Erro ao atualizar o usuário: " . mysqli_error($conexao);
    }

    
    mysqli_stmt_close($stmt);
} else {
    echo "Erro ao fazer o upload da imagem.";
}


mysqli_close($conexao);
?>
