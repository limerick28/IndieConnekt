<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Post - Blog de Jogos Indies</title>
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
        background-color:#3a2064; ;
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
    .nameuser{
            transform: translateX(95px);
        }
        
    .sair {
        border-color: #f0f0f0;
        border: 5px;
        color: #333;
        padding: 5px 10px;
        font-size: 16px;
        cursor: pointer;
        transform: translateX(212px) translateY(-5px);
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
    .sairbutton {
            transform: translateX(250px) translateY(2px);
        }
        .sairbutton button {
            background-color: transparent;
            border: 1px solid #91ff10;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .sairbutton button:hover{
            background-color: #91ff10;
            color: #000000;
        }
        
        main {
            background-color: #2e2e4e;
            padding: 45px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            width: 80%; 
            max-width: 1200px; 
            margin: 50px auto 0 auto;
            
        }

        
        label {
            display: block;
            margin: 10px 0 5px;
        }
        #imagePreview {
            margin-top: 10px;
            max-width: 30%; 
            max-height: 300px; 
            border-radius: 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid 
            border-radius: 5px;
            background-color: #2a2a3e; /* Um tom mais claro de roxo */
            color: #ffffff;
        }
        input[type="submit"] {
            border: 1px solid #91ff10;
            background-color: transparent;
            padding: 10px 15px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transform: translateX(800px) translateY(10px);
        }
        input[type="submit"]:hover {
            background-color: #91ff10; /* Verde limão mais escuro ao passar o mouse */
            color: black;
        }
        #imagePreview {
            margin-top: 10px;
            max-width: 50%;
            border-radius: 5px;
        }

        .imagebutton input {
            background-color: transparent;
            border: 1px solid #91ff10;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            
        }
        .imagebutton input:hover{
            background-color: #91ff10;
            color: #000000;
        }
        .imagebutton {
    background-color: transparent;
    border: 1px solid #91ff10;
    color: #ffffff;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
    margin-top: 10px;
    transform: translateY(10px);
}

.imagebutton:hover {
    background-color: #91ff10;
    color: #000000;
}

/* Ocultar o input padrão de seleção de arquivo */
.file-input {
    display: none;
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
        </div>
    <main>
        <h2>

    
        <form action="cadProd.php" method="post" enctype="multipart/form-data">
            <label for="title">Título do Post:</label>
            <input type="text" id="title" name="nomePost" required>

            <label for="content">Descrição:</label>
            <textarea id="content" name="comentario" rows="10" required></textarea>
        </h2>
            <label for="image" class="imagebutton">Escolha uma imagem</label>
            <input class="file-input" type="file" id="image" name="foto" accept="image/" onchange="previewImage(event)" required style="display:none;">
            <img id="imagePreview" src="#" alt="Prévia da Imagem" style="display: none;">
            <input type="submit" value="Publicar Post">
        </form>
    </main>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.style.display = 'block';
        }
    </script>

</body>
</html>