<?php
include("sessao.php")
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
            ;
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
            transform: translateX(-30px);
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
        .searchbutton{
            transform: translateX(23px);
        }
        .nameuser{
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
        .nav {
            position: relative;
             display: inline-block;
        }
        .home{
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
    top: 40px; /* Alinha a caixinha no topo da imagem */
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

/* Exibe a caixa quando o mouse passa sobre a imagem */
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
            color:#91ff10;
            padding: 20px 30px;
            cursor: pointer;
            font-size: 10px;
        }
        .tabs button:hover {
            background-color: transparent;
            border: none;
            color: #91ff10;
            padding: 20px 30px;
            cursor: pointer;
            font-size: 10px;
            display: fixed;
        }

        .tabs button.active {
            border-bottom: 2px solid #91ff10;
        }
        .posts{
            color: white;
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

        .sidebar {

            left: 60px;
            top: 20px;
            width: 200px;
        }

        .sidebar img {
            width: 100%;
            margin-bottom: 20px;
        }

        .invite-link {
            background-color: #2e2e4e;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }

        .invite-link p {
            margin: 5px 0;
        }

        .invite-link button {
            background-color: #91ff10;
            border: none;
            color: #000000;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10px;
            background-color: #111;
            object-fit: cover;
            border-radius: 5px;
            width: 500px;
            height: 50px;
        }

        .main {
            display: flex;
            padding: 20px;
        }

        .sidebar {
            width: 250px;
            background-color: #2e2e4e;
            padding: 20px;
            border-radius: 10px;
        }

        .sidebar .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .sidebar .stats div {
            text-align: center;
        }

        .sidebar .share {
            margin-bottom: 20px;
        }

        .sidebar .share input {
            width: 100%;
            padding: 5px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        ;

        .sidebar .comments {
            margin-bottom: 20px;
        }

        .sidebar .comments input {
            width: 100%;
            padding: 5px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .sidebar .comments .comment {
            background-color: #1e1e2e;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .content .game {
            background-color: #2e2e4e;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            width: 800px;
            height: 400px;


        }

        .content .game .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .content .game .header .title {
            font-size: 20px;
            font-weight: bold;
        }

        .content .game .posts {
            width: 200px;

        }

        .content .game .posts .postsimagem {
            width: 400px;
            height: 250px;
            object-fit: cover;
            border-radius: 7px;
        }

        .content .game .details {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
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
                <input class="searchbutton" type="image" src="images/lupa.png" alt="Buscar" style="  transform: translateY(-19px) translateX(230px); width: 36px; height: auto;" />
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
            $fotouser =  $_SESSION['fotouser'];
            echo"<img src='images/$fotouser' alt='Foto de perfil'>"
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
            <?php
                $username = isset($_GET['username']) ? $_GET['username'] : (isset($_SESSION['username']) ? $_SESSION['username'] : null);

                if ($username) {
                    $conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');
                    $username = mysqli_real_escape_string($conexao, $username);

                    $query = "SELECT fotouser FROM usuarios WHERE username = '$username'";
                    $result = mysqli_query($conexao, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $fotouser = mysqli_fetch_assoc($result)['fotouser'];
                        echo "<img src='images/$fotouser' alt='Foto de perfil de $username'>";
                    } else {
                        echo "<img src='images/default.jpg' alt='Foto de perfil padrão'>";
                    }
                } else {
                    echo "<img src='images/default.jpg' alt='Foto de perfil padrão'>";
                }
?>

                <div class="profile-info">
                <h1>
                <span>
                @<?php
            if (isset($_GET['username'])) {
            echo  htmlspecialchars($_GET['username']) . "";
                 } else {
                     echo "Nenhum usuário logado!";
                }
                ?>
                </span>
                </h1>
            
                <div class="status">
                </div>
                </div>
                <div class="profile-edit">
                
                </div>
            </div>
            <div class="profile-stats">
            <div class="profile-post">
                </div>
                
            </div>
            <div class="tabs">
            <button class="active2" onclick="window.location.href='perfill2.php';">
            <h1 class="posts" >
                Posts
            </h1>
    </button>
    <button class="active"  onclick="window.location.href='perfilljogo2.php';">
            <h1>
                Jogos
            </h1>
    </button>
    
    </div>

<div class="main">
    <div class="sidebar">
        <div class="comments" style="background-color: #2e2e4e; padding: 20px; border-radius: 10px; margin-top: 20px;">
            <h2 style="color: #ffffff;">Comentários</h2>
<?php
if (!isset($_SESSION['idusuarios'])) {
echo "<p class='warning'>Você precisa estar logado para ver os posts.</p>";
}
if (isset($_GET['email'])) {
    echo  htmlspecialchars($_GET['email']) . "";}


$idUsuarioLogado = $_SESSION['idusuarios'];
$con = mysqli_connect('localhost', 'root', '', 'indieconnekt');

$sql2 = "SELECT * FROM comentarios WHERE '$email' = perfil_email ORDER BY id_idusuarios DESC";
$exe2 = mysqli_query($con, $sql2);

if (mysqli_num_rows($exe2) > 0) {
echo "<table style=' 
width: 250px;
background-color: #1e1e2e;
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
color: #1e1e2e;
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
margin-bottom: 10px;'
;>";

while ($res2 = mysqli_fetch_array($exe2)) {
$id = htmlspecialchars($res2['idcomentario']);
$texto = htmlspecialchars($res2['texto']);
$fotocomentario = htmlspecialchars($res2['fotocomentario']);

echo "<tr style='background-color: #3b3b6e;'>
        <td style='background-color: #3d3d6d; padding: 15px; border-radius: 10px; margin-top: 10px;'>$texto  <img src='images/$fotocomentario'> </td>
       
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

    <style>
       
        

        /* Estilos do link que abre o pop-up */
        .add-comment-link {
            color: #91ff10;
            text-decoration: underline;
            cursor: pointer;
            font-weight: bold;
        }

        /* Estilos do overlay (fundo escuro) */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Estilos do pop-up */
        .popup-container {
            background-color: #2e2e4e;
            border-radius: 10px;
            padding: 20px;
            width: 400px;
            color: white;
            position: relative;
            z-index: 1001;
        }

        /* Botão de fechar */
        .close-popup-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            border: none;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        .botaoo, .custom-file-upload {
            width: 100%;
            margin-bottom: 10px;
            background-color: transparent;
            border: 1px solid #91ff10;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .botaoo:hover, .custom-file-upload:hover {
            background-color: #91ff10;
            color: #000000;
        }

        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #2a2a3e;
            color: #ffffff;
            margin-bottom: 15px;
        }

        /* Esconder o botão real de arquivo */
        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            width: 380px; 
            text-align: center;
        }
    </style>

    <!-- Link para abrir o pop-up -->
    <a class="add-comment-link" onclick="openPopup()">Clique aqui para adicionar um comentário</a>

    <!-- Estrutura do pop-up -->
    <div class="overlay" id="popupOverlay">
        <div class="popup-container">
            <button class="botaoo" class="close-popup-btn" onclick="closePopup()">✖</button>
            <h1>Comentários</h1>
            <form action="comentar.php" method="post" enctype="multipart/form-data">
                <textarea name="texto" placeholder="Escreva seu comentário..." required></textarea><br>
                <label class="custom-file-upload">
                    <input type="file" name="fotocomentario" accept="image/*" onchange="previewImage(event)" required>
                    Escolher arquivo
                </label><br>
                <img id="imagePreview" src="#" alt="Prévia" style="display: none; margin-top: 10px; max-width: 100%;"><br>
                <button class="botaoo" type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <script>
        function openPopup() {
            document.getElementById('popupOverlay').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
        }

        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.style.display = 'block';
        }
    </script>

    </a>
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
        <th style='display: flex; justify-content: space-between; align-items: center; padding: 10px; background-color: #1e1e2e; border-radius: 5px;'><h2>$nomePost</h2>  </th>
    </tr>
    <tr>
        <td style='padding: 10px;'><img src='images/$foto' style='  transform: translateX(-10px); width: 400px; height: 250px; object-fit: cover; border-radius: 7px;'></td>
<td style='vertical-align: top; padding: 10px; font-size: 15px; font-weight: bold; max-width: 400px; border-radius: 7px; word-wrap: break-word; word-break: break-word; text-align: justify;'>
    $comentario
</td>
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