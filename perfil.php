<?php
session_start()
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
        </head>
<body>
    <div class="navbar">
            <img class="indielogo" height="30" src="images/indieconnektlogo.png"width="50"/>
        <div class="indielogo">
    </div>
        <div class="search-bar">
            <input placeholder="Procurar" type="text"/>
            </div>
            <div class="nav">
                <form action="logout.php">
                <a class="cadastro" href="logout.php">
                SAIR
                </a>
                <a class="cadastro" href="cadastrando.php">
                criar post
                </a>
            </form>
            </div>
            </div>
                </div>
                    </div>
            
                
        </nav>
        <div class="container2">
            <div class="profile-header">
                <img alt="Profile picture" height="80" src="images/conscripted.jpg" width="80"/>
                <div class="profile-info">
                <h1>
                <span>
                <?php

    if (isset($_SESSION['username'])) {
    echo  htmlspecialchars($_SESSION['username']);
    } else {
        echo "Nenhum usuário logado!";
    }
    
    ?>
                </span>
                </h1>
                <form action="upduser.php">
                <div class="status">
                </div>
                </div>
                <div class="profile-edit">
                    <a href="upduser.php">
                <button>
                Edit profile
                </button>
                </div>
            </a>
            </div>
            <div class="profile-stats">
                <div>
                <p>
                0
                </p>
                <p>
                postagens
                </p>
                </div>
                <div>
                <p>
                0
                </p>
                <p>
                Likes
                </p>
                </div>
                <div>
                </i>
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