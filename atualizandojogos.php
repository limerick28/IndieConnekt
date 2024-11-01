<?php
session_start();

$idjogos = $_POST['idjogos'];
$nome = $_POST['nomeJogo'];
$descricao = $_POST['descricaojogo'];
$uploaddir = 'c:/xampp/htdocs/indieconnekt/images/';
$nomeArq = basename($_FILES['fotoJogo']['name']);
$uploadfile = $uploaddir . $nomeArq;

$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

if (move_uploaded_file($_FILES['fotoJogo']['tmp_name'], $uploadfile)) {
    
    $sql = "UPDATE jogos SET descricaojogo=?, nomeJogo=?, fotoJogo=? WHERE idjogos=?";


    $stmt = mysqli_prepare($conexao, $sql);

   
    mysqli_stmt_bind_param($stmt, 'ssi', $nome, $descricao, $nomeArq, $idjogos);

    
    if (mysqli_stmt_execute($stmt)) {
        echo "Atualizado com sucesso";
        header('Location:dashboardlog.php');
    } else {
        echo "Erro ao atualizar o usuário: " . mysqli_error($conexao);
    }

    
    mysqli_stmt_close($stmt);
} else {
    echo "Erro ao fazer o upload da imagem.";
}


mysqli_close($conexao);
?>