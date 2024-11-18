<?php
session_start();
$idusuarios = $_SESSION['idusuarios'];

// Verifique se a sessão está definida
if (!isset($idusuarios)) {
    die("Erro: Sessão não iniciada.");
}

$conexao = mysqli_connect('localhost', 'root', '', 'indieconnekt');

// Verifique a conexão
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Use prepared statement para evitar injeção de SQL
$sql = "SELECT * FROM usuarios WHERE idusuarios = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, 'i', $idusuarios);
mysqli_stmt_execute($stmt);
$executar = mysqli_stmt_get_result($stmt);

if ($executar && mysqli_num_rows($executar) > 0) {
    $res = mysqli_fetch_array($executar);
} else {
    die("Erro: Usuário não encontrado.");
}

mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - Indieconnekt</title>
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
    .nameuser{
            transform: translateX(140px);
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
    
    input[type="text"], input[type="file"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        background-color: #2a2a3e;
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
        margin-top: 15px;
    }

    input[type="submit"]:hover {
        background-color: #91ff10;
        color: black;
    }
    </style>
</head>
<body>

<div class="navbar">
            <img class="indielogo" height="30" src="images/indieconnektlogo.png" width="50" href="dashboardlog.html">
            <div class="indielogo">
            </div>
            <div class="search-bar">
                <input placeholder="Procurar" type="text" />
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

<main>
    <h2>Editar Perfil</h2>
    <form action="atualizaruser.php" method="post" enctype="multipart/form-data">
        <label class="caixa" for="idusuarios">Id do Usuário</label>
        <input type="text" id="idusuarios" name="idusuarios" value="<?php echo $res['idusuarios'];?>" readonly>

        <label class="caixa" for="username">Nome do Usuário</label>
        <input type="text" id="username" name="username" value="<?php echo $res['username'];?>">

        <label for="fotouser">Foto do Usuário</label>
        <input type="file" id="fotouser" name="fotouser">

        <input type="submit" value="Atualizar">
    </form>
</main>

</body>
</html>
