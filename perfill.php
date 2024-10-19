<?php
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

        .sidebar .share button {
            width: 100%;
            padding: 5px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }

        .sidebar .share .social {
            display: flex;
            justify-content: space-between;
        }

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
            background-color: #333;
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
            <div class="search-bar">
                <input placeholder="Procurar" type="text" />
            </div>
            <div class="profile-pic">
        <a href="perfill.php">
            <img src="images/darklegendsed.jpg" alt="Foto do Usuário" class="profile-img">
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
            <img src="images/<?php $_SESSION['fotouser']; ?>
                <div class="profile-info">
                <h1>
                <span>
                @<?php
            if (isset($_SESSION['username'])) {
            echo  htmlspecialchars($_SESSION['username']) . "";
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
                <button type="button" onclick="window.location.href='upd_user.php';">
                Edit profile
                </button>
                </div>
            </div>
            <div class="profile-stats">
            <div class="profile-post">
                <button type="button" onclick="window.location.href='cadastrando.php';" >
                Realizar Postagem
                </button>
                </div>
                
            </div>
            <div class="tabs">
        <button class="active">
                Posts
    </button>
    
  </div>
  <div class="main">
   <div class="sidebar">
    <div class="stats">
     <div>
      <div>
      </div>
      <div>
      </div>
     </div>
     <div>
      <div>
      </div>
      <div>
      </div>
     </div>
    </div>
    <div class="share">
     <div class="social">
      <button>
      redesocial1
      </button>
      <button>
       redesocial2
      </button>
     </div>
    </div>
    <div class="comments">
     <div>
      Comentarios
     </div>
     <input placeholder="o que você está pensando?" type="text"/>
     <div class="comment">
      <div>
       <strong>
        usuario1
       </strong>
      </div>
      <div>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, autem assumenda corporis perspiciatis, ullam unde commodi accusamus tempora nihil dolorem, similique tempore. Eum distinctio sapiente repellat ipsa odio perferendis corrupti.
      </div>
     </div>
     <div class="comment">
      <div>
       <strong>
        usuario2
       </strong>
      </div>
      <div>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis consectetur necessitatibus incidunt, deserunt sequi iure debitis similique, adipisci soluta facilis autem dicta nobis molestias excepturi! Explicabo nulla ea voluptates ipsa?
      </div>
     </div>
     <div class="comment">
      <div>
       <strong>
        usuario3
       </strong>
      </div>
      <div>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio temporibus consectetur fuga, eaque vero dolore vitae eius enim ea perspiciatis doloribus debitis aliquam dolorem, doloremque suscipit sapiente minima! Nemo, vel!
      </div>
     </div>
    </div>
   </div>
   <div class="content">
    <div class="game">
     <div class="header">
      <div class="title">
      POST 1
      </div>
     </div>
     <div class="posts">
      <div>
       <img src="images/stardewvalleyed.jpg" alt="" class="postsimagem">
      </div>
     </div>
     <div class="download">
      <div class="size">
      </div>
     </div>
    </div>
    <div class="game">
     <div class="header">
      <div class="title">
       POST2
      </div>
      </div>
     <div class="posts">
      <div>
        <img src="images/stardewvalleyed.jpg" alt="">   
      </div>
     </div>
     <div class="download">
      <div class="size">
      </div>
     </div>
    </div>
    
   </div>
    <footer>
        <p>&copy; PRO</p>
    </footer>

</body>
</html>