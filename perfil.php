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
                    <p style="color: #aaaaaa;">Você não possui comentários ainda.</p>
                    <a href="comentando.php" style="color: #91ff10; text-decoration: underline;">Clique aqui para adicionar um comentário</a>
                </div>
            </div>

            <div class="content">
                <?php
                if (!isset($_SESSION['id'])) {
                    echo "Você precisa estar logado para ver os posts.";
                    exit;
                }

                $idUsuarioLogado = $_SESSION['id'];
                $con = mysqli_connect('localhost', 'root', '', 'indieconnekt');

                $sql = "SELECT * FROM posts WHERE id_idusuarios = '$idUsuarioLogado' ORDER BY nomePost ASC";
                $exe = mysqli_query($con, $sql);

                if (mysqli_num_rows($exe) > 0) {
                    echo "<table style='background-color: #2e2e4e; padding: 20px; border-radius: 10px; width: 800px;'>";

                    while ($res = mysqli_fetch_array($exe)) {
                        $idPost = htmlspecialchars($res['idPost']);
                        $nomePost = htmlspecialchars($res['nomePost']);
                        $comentario = htmlspecialchars($res['comentario']);
                        $foto = htmlspecialchars($res['foto']);

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

    <footer>
        <p>&copy; PRO</p>
    </footer>
</body>
</html>
