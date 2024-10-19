<?php
session_start();
include("login.php");
include('pagina.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
</head>
<body>

    <h2>Editar Perfil</h2>

    <!-- Exibe a imagem atual do perfil -->
    <div>
        <img src="images/default-profile.png" alt="Foto do Usuário" width="100" height="100">
    </div>

    <!-- Formulário de edição -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="profile-pic">Foto de Perfil:</label>
            <input type="file" id="fotouser" name="profile_pic">
        </div>

        <div>
            <input type="submit" value="Salvar Alterações">
        </div>
    </form>

</body>
</html>
