<?php
include("sessao.php");
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
        font-family: Arial, sans-serif;
        padding-bottom: 3rem;
        background-color: #1b0d24;
        color: #333;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #1e1e2e;
        color: #ffffff;
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
    .nav .login {
        color: #ffffff;
        text-decoration: none;
        margin: 0 10px;
        font-size: 14px;
        border-radius: 5px;
        margin-right: 20px
    }
    .nav .cadastro {
        color: #ffffff;
        text-decoration: none;
        margin: 0 10px;
        font-size: 14px;
        border-radius: 5px;
    }
    .header .nav .get-app {
        border: 1px solid #ffffff;
        padding: 5px 10px;
        border-radius: 5px;
    }
    .search-bar {
        display: flex;
        justify-content: center;
        padding: 10px 20px;
        transform: translateX(-25%);
        width: 500px;
    }
    .search-bar input {
        width: 100%;
        max-width: 600px;
        padding: 10px;
        border-color: gra;
        border-radius: 5px;
        background-color: #2a2a3e;
        color: #ffffff;
    }
    
    .navbar {
        background-color: #3a2064;
        backdrop-filter: blur(50px);
        display: flex;
        justify-content: space-between;
        align-items: center; 
        padding: 15px;
        height: 60px; 
    }

        .navbar .indielogo {
        max-height: 100px; 
        height: 150px;
        width: 150px;
        object-fit: contain;
       
    }

    .navbar nav ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    .navbar nav ul li {
        margin-left: 2em;
    }

    .navbar nav ul li a {
        text-decoration: none;
        color: white;
    }
    .hero {
        text-align: center;
        padding: 5em 2em;
        background-color: #141726;
        color: #282c34;
    }
        h1 {
            color: #00ff00; /* Verde limão */
        }
        main {
            background-color: #3f2a56; /* Um pouco mais claro que o roxo escuro */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #00ff00; /* Verde limão */
            border-radius: 5px;
            background-color: #4f3b6b; /* Um tom mais claro de roxo */
            color: #ffffff;
        }
        input[type="submit"] {
            background-color: #00ff00; /* Verde limão */
            color: #000000;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #00cc00; /* Verde limão mais escuro ao passar o mouse */
        }
        #imagePreview {
            margin-top: 10px;
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
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
            </form>
            </div>
            </div>
                </div>
                    </div>
    
    <main>
        <form action="cadProd.php" method="post" enctype="multipart/form-data">
            <label for="title">Título do Post:</label>
            <input type="text" id="title" name="nomePost" required>

            <label for="content">Conteúdo do Post:</label>
            <textarea id="content" name="comentario" rows="10" required></textarea>

            <label for="image">Escolha uma imagem:</label>
            <input type="file" id="image" name="foto" accept="image/*" onchange="previewImage(event)" required>
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
