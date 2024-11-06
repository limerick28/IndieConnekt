<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="perfil.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Connekt</title>
</head>
<body>
    <div class="navbar">
        <img class="indielogo" height="30" src="images/indieconnektlogo.png" width="50"/>
        <div class="search-bar">
            <input placeholder="Procurar" type="text"/>
        </div>
        <div class="nav">
            <a class="cadastro" href="logout.php">SAIR</a>
            <a class="cadastro" href="cadastrando.php">Criar Post</a>
        </div>
    </div>

    <div class="container2">
        <div class="profile-header">
            <img alt="Profile picture" height="80" src="images/conscripted.jpg" width="80"/>
            <div class="profile-info">
                <h1>
                    <span>
                        <?php
                            echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : "Nenhum usuário logado!";
                        ?>
                    </span>
                </h1>
                <div class="status"></div>
            </div>
            <div class="profile-edit">
                <a href="upduser.php"><button>Edit profile</button></a>
            </div>
        </div>

        <div class="profile-stats">
            <div>
                <p>0</p>
                <p>Postagens</p>
            </div>
            <div>
                <p>0</p>
                <p>Likes</p>
            </div>
        </div>

        <div class="tabs">
            <button class="active">Posts</button>
        </div>

        <div class="main">
            <div class="sidebar">
                <div class="comments" style="background-color: #2e2e4e; padding: 20px; border-radius: 10px; margin-top: 20px;">
                    <h2 style="color: #ffffff;">Comentários</h2>
<?php
if (!isset($_SESSION['id'])) {
    echo "Você precisa estar logado para ver os posts.";
    exit;
}
$email = $_SESSION['email'];
echo $email;
$idUsuarioLogado = $_SESSION['id'];
$con = mysqli_connect('localhost', 'root', '', 'indieconnekt');

$sql2 = "SELECT * FROM comentarios WHERE '$email' = perfil_email ORDER BY id_idusuarios DESC";
$exe2 = mysqli_query($con, $sql2);

if (mysqli_num_rows($exe2) > 0) {
    echo "<table style=' 
    width: 250px;
    background-color: #2e2e4e;
    padding: 20px;
    border-radius: 10px;

    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;

    text-align: center;

    margin-bottom: 20px;

    width: 100%;
    padding: 5px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;

    width: 100%;
    padding: 5px;
    border: none;
    border-radius: 5px;
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;

    margin-bottom: 20px;

    width: 100%;
    padding: 5px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;

    background-color: #333;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;'>";

    while ($res2 = mysqli_fetch_array($exe2)) {
        $id = htmlspecialchars($res2['idcomentario']);
        $texto = htmlspecialchars($res2['texto']);
        $fotocomentario = htmlspecialchars($res2['fotocomentario']);

        echo "<tr style='background-color: #3b3b6e;'>
                <td style='background-color: #3d3d6d; padding: 15px; border-radius: 10px; margin-top: 10px;'>$texto <img src='images/$fotocomentario'> </td>
               
            </tr>";
    }
    echo "</table>";
} else {
    echo "não tem nada aqui";
}
if (!$con) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>

                    <a href="comentando.php" style="color: #91ff10; text-decoration: underline;">Clique aqui para adicionar um comentário</a>
                </div>
            </div>

            <div class="content">
            
<?php
$sql1 = "SELECT * FROM posts WHERE id_idusuarios = '$idUsuarioLogado' ORDER BY nomePost ASC";
$exe1 = mysqli_query($con, $sql1);

if (mysqli_num_rows($exe1) > 0) {
    echo "<table style='background-color: #2e2e4e; padding: 20px; border-radius: 10px; width: 800px;'>";

    while ($res1 = mysqli_fetch_array($exe1)) {
        $idPost = htmlspecialchars($res1['idPost']);
        $nomePost = htmlspecialchars($res1['nomePost']);
        $comentario = htmlspecialchars($res1['comentario']);
        $foto = htmlspecialchars($res1['foto']);

        echo "<tr>
                <th style='display: flex; justify-content: space-between; align-items: center; padding: 10px; background-color: #111; border-radius: 5px;'>$nomePost</th>
            </tr>
            <tr>
                <td style='padding: 10px;'><img src='images/$foto' style='width: 400px; height: 250px; object-fit: cover; border-radius: 7px;'></td>
                <td style='padding: 10px; font-size: 20px; font-weight: bold; max-width: 400px; border-radius: 7px; word-wrap: break-word;'>$comentario</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum post encontrado.";
}
mysqli_close($con);
?>

            </div>
        </div>
    </div>
</body>
</html>
