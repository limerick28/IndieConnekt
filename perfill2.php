<?php
// Conectar ao banco de dados
$con = mysqli_connect('localhost', 'root', '', 'indieconnekt');

// Verificar se a conexão foi bem-sucedida
if (!$con) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Recuperar o username da URL
$username = $_GET['username'];

// Consultar o ID do usuário com base no username
$sqlUser = "SELECT idusuarios, fotouser FROM usuarios WHERE username = '$username'";
$resultUser = mysqli_query($con, $sqlUser);

if (mysqli_num_rows($resultUser) > 0) {
    $user = mysqli_fetch_assoc($resultUser);
    $idUsuarioVisualizado = $user['idusuarios'];
    $fotouser = $user['fotouser'];
} else {
    echo "Usuário não encontrado!";
    exit;
}

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Connekt</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            background-color: #1e1e2e;
            color: #ffffff;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .navbar {
            backdrop-filter: blur(50px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            height: 60px;
            background-color: #3a2064;
        }

        .navbar .indielogo {
            max-height: 100px;
            height: 150px;
            width: 150px;
            object-fit: contain;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            padding: 10px 20px;
            transform: translateX(-330px);
            width: 500px;
        }

        .search-bar input {
            position: fixed;
            width: 100%;
            max-width: 600px;
            padding: 10px;
            border-radius: 5px;
            background-color: #2a2a3e;
            color: #ffffff;
            transform: translateY(-20px);
        }

        .searchbutton {
            transform: translateX(23px);
        }

        .nameuser {
            transform: translateX(95px);
        }

        .header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #1a1a2e;
        }

        .header .title {
            margin-left: 10px;
            font-size: 20px;
            font-weight: bold;
        }

        .header .nav {
            display: flex;
            align-items: center;
        }

        .home {
            width: 40px;
            height: auto;
            transform: translateX(180px);
            color: white;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid #91ff10;
            cursor: pointer;
        }

        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #2e2e4e;
            min-width: 120px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 40px;
            right: 30px;
        }

        .dropdown-menu a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {
            background-color: #91ff10;
            color: black;
        }

        .profile-pic:hover .dropdown-menu {
            display: block;
        }

        .hero {
            text-align: center;
            padding: 5em 2em;
            background-color: #141726;
            color: #282c34;
        }

        .hero h2 {
            font-size: 2.5em;
            margin: 0 0 0.5em;
        }

        .hero p {
            font-size: 1.2em;
            margin: 0 0 1em;
        }

        .container2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .profile-header {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 800px;
            margin-bottom: 20px;
        }

        .profile-header img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin-right: 20px;
            border: 2px solid #91ff10;
        }

        .profile-header .profile-info {
            display: flex;
            flex-direction: column;
        }

        .profile-header .profile-info h1 {
            margin: 0;
            font-size: 24px;
        }

        .profile-header .profile-info p {
            margin: 5px 0;
            color: #aaaaaa;
        }

        .profile-header .profile-info .status {
            display: flex;
            align-items: center;
        }

        .profile-header .profile-info .status .online {
            background-color: #00ff00;
        }

        .profile-edit {
            margin-left: auto;
        }

        .profile-edit button {
            background-color: transparent;
            border: 1px solid #91ff10;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .profile-edit button:hover {
            background-color: #91ff10;
            color: #000000;
        }

        .profile-post {
            margin-right: auto;
        }

        .profile-post button {
            background-color: transparent;
            border: 1px solid #91ff10;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .profile-post button:hover {
            background-color: #91ff10;
            color: #000000;
        }

        .profile-stats {
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 800px;
            background-color: #2e2e4e;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .profile-stats div {
            text-align: center;
        }

        .profile-stats div p {
            margin: 5px 0;
        }

        .profile-stats div .icon {
            font-size: 24px;
        }

        .tabs {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 800px;
            margin-bottom: 20px;
        }

        .tabs button {
            background-color: transparent;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .tabs button.active {
            border-bottom: 2px solid #d4d700;
        }

        .content {
            width: 100%;
            max-width: 800px;
            text-align: center;
        }

        .content img {
            width: 150px;
            margin-bottom: 20px;
        }

        .content p {
            color: #aaaaaa;
        }

        /* Novo CSS para separar os tópicos com fundo */
        .section {
            background-color: #2e2e4e;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .section h2 {
            margin-bottom: 15px;
            color: #ffffff;
        }
    </style>
</head>

<body>
<div class="navbar">
            <img class="indielogo" height="30" src="images/indieconnektlogo.png" width="50" href="dashboardlog.html">
            <div class="indielogo">
            </div>
            <form method="POST" action="pesquisa.php">
            <div class="search-bar">
            <input type="text" name="username" placeholder="Nome de usuário"  />
            <input type="text" name="pesquisar" placeholder="Procurar"  />
                <input class="searchbutton" type="image" src="images/lupa3.png" alt="Buscar" style="  transform: translateY(-19px) translateX(230px); width: 36px; height: auto;" />
                <button type="submit" style="display: none;">Enviar</button> 
            </form>
               
            
            </div>
            <div>
            <a href="dashboardlog.php">
            <img class="home" src="images/home.png" alt="">
            </a>
            </div>
            <div class="nameuser">
            <?php
            if (isset($_SESSION['username'])) {
            echo  htmlspecialchars($_SESSION['username']) . "";
                 } else {
                     echo "Nenhum usuário logado!";
                }
                ?></div>
            <div class="profile-pic">
        <a href="perfill.php">
        <?php 
            $fotouser1 =  $_SESSION['fotouser'];
            echo"<img src='images/$fotouser1' alt='Foto de perfil'>"
            ?>
            <img src="images/home.png" alt="">
        </a>
        <div class="dropdown-menu">
            <a href="perfill.php">Perfil</a>
            <a href="logout.php">Sair</a>
            <a href="cadastrando.php">Adicionar Post</a>
            <a href="cadastrojogo.php">Adicionar Jogo</a>
        </div>
    </div>
        </div>  
        </div>
        </div>
        </div>
        </nav>
        </div>
        </header>
   

        </nav>

    <div class="container2">
        <div class="profile-header">
            <img src="images/<?php echo htmlspecialchars($fotouser); ?>" alt="Foto de perfil">
            <div class="profile-info">
                <h1>@<?php echo htmlspecialchars($username); ?></h1>
            </div>
        </div>

        <div class="section">
            <h2>Posts de <?php echo htmlspecialchars($username); ?></h2>
            <?php
            // Consultar os posts do usuário visualizado
            $sqlPosts = "SELECT * FROM posts WHERE id_idusuarios = '$idUsuarioVisualizado' ORDER BY nomePost ASC";
            $exePosts = mysqli_query($con, $sqlPosts);

            if (mysqli_num_rows($exePosts) > 0) {
                while ($post = mysqli_fetch_assoc($exePosts)) {
                    echo "<div class='post'>";
                    echo "<h3>" . htmlspecialchars($post['nomePost']) . "</h3>";
                    echo "<p>" . nl2br(htmlspecialchars($post['comentario'])) . "</p>";
                    echo "<img src='images/" . htmlspecialchars($post['foto']) . "' alt='Imagem do post' style='width: 100%; max-width: 500px; height: auto;'>";
                    echo "</div>";
                }
            } else {
                echo "Este usuário não possui posts.";
            }
            ?>
        </div>

        <div class="section">
            <h2>Comentários de <?php echo htmlspecialchars($username); ?></h2>
            <?php
            // Consultar os comentários do usuário visualizado
            $sqlComentarios = "SELECT * FROM comentarios WHERE perfil_email = '$username' ORDER BY id_idusuarios DESC";
            $exeComentarios = mysqli_query($con, $sqlComentarios);

            if (mysqli_num_rows($exeComentarios) > 0) {
                while ($comentario = mysqli_fetch_assoc($exeComentarios)) {
                    echo "<div class='comentario'>";
                    echo "<p>" . htmlspecialchars($comentario['texto']) . "</p>";
                    echo "<img src='images/" . htmlspecialchars($comentario['fotocomentario']) . "' alt='Foto de perfil do comentário'>";
                    echo "</div>";
                }
            } else {
                echo "Este usuário não possui comentários.";
            }
            ?>
        </div>

        <div class="section">
            <h2>Jogos Criados por <?php echo htmlspecialchars($username); ?></h2>
            <?php
            // Consultar os jogos do usuário visualizado
            $sqlJogos = "SELECT * FROM jogos WHERE id_idusuarios = '$idUsuarioVisualizado' ORDER BY nomeJogo ASC";
            $exeJogos = mysqli_query($con, $sqlJogos);

            if (mysqli_num_rows($exeJogos) > 0) {
                while ($jogo = mysqli_fetch_assoc($exeJogos)) {
                    echo "<div class='jogo'>";
                    echo "<h3>" . htmlspecialchars($jogo['nomeJogo']) . "</h3>";
                    echo "<p>" . nl2br(htmlspecialchars($jogo['descricaojogo'])) . "</p>";
                    echo "<img src='images/" . htmlspecialchars($jogo['fotoJogo']) . "' alt='Imagem do jogo' style='width: 100%; max-width: 500px; height: auto;'>";
                    echo "</div>";
                }
            } else {
                echo "Este usuário não criou jogos.";
            }
            ?>
        </div>
    </div>

</body>

</html>

<?php
// Fechar a conexão com o banco de dados
mysqli_close($con);
?>
