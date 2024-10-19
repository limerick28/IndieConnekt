<?php
session_start();
$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios";
$executar = mysqli_query($conexao, $sql);

echo "<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh; 
        margin: 0;
        font-family: Arial, sans-serif; 
        background-color: #1e1e2e; 
    .table-container {
        width: 80%; 
        background-color: #1e1e2e;
        border-radius: 8px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        overflow: hidden; 
        margin-top: 20px; 
        transform: translatey(-300px);
    }
    .logo-container {
        margin-bottom: 20px;
    }
    img.indielogo {
        height: 300px;
        width: auto; 
        transform: translatey(-200px);
        
    }
    table {
        width: 100%;
        border-collapse: collapse;
        
    }
    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #2e2e4e; 
        color: white; 
    }
    th {
        background-color: #2a2a38; 
    }
    tr:hover {
        background-color: #3a3a4a; 
    }
    img {
        width: 50px; 
        height: auto; 
    }
    a {
        color: #007BFF; 
    }
    a:hover {
        text-decoration: underline; 
    }
</style>";

echo "<div class='logo-container'>
    <img class='indielogo' src='images/indieconnektlogo.png' alt='Logo IndieConnekt' />
</div>
<div class='table-container'>
    <table>
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Username</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Apagar</th>
            <th>Atualizar</th>
        </tr>";

while ($resultado = mysqli_fetch_array($executar)) {
    $idusuarios = $resultado['idusuarios'];
    $username = $resultado['username'];
    $email = $resultado['email'];
    $senha = $resultado['senha'];
    $fotouser = $resultado['fotouser'];

    echo "<tr>
        <td>$idusuarios</td>
        <td><img src='images/$fotouser' alt='Foto de $username'></td>
        <td>$username</td>
        <td>$email</td>
        <td>$senha</td>
        <td><a href='del_user.php?idusuarios=$idusuarios'>Remover</a></td>
        <td><a href='upd_user.php?idusuarios=$idusuarios'>Atualizar</a></td

    </tr>";
}

echo "</table></div>";
mysqli_close($conexao);
?>
