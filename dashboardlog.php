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
        .header {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #1a1a2e;
        }
        .home{
            width: 40px;
            height: auto;
            transform: translateX(180px);
            color: white;
        }
        .nameuser{
            transform: translateX(95px);
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
            top: 10px; /* Alinha a caixinha no topo da imagem */
            right: 30px;
}

.dropdown-menu {
            display: none;
    position: absolute;
    background-color: #2e2e4e;
    min-width: 120px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    top: 10px; /* Alinha a caixinha no topo da imagem */
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
        
        .header .nav .get-app {
            border: 1px solid #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
        }
        /*css mudado daqui ate button hover*/
        .search-bar {
            display: flex;
            justify-content: center;
            padding: 10px 20px;
            transform: translateX(-330px);
            width: 500px;
        }
        .search-bar input {
            position: fixed ;
            width: 100%;
            max-width: 600px;
            padding: 10px;
            border-color: gra;
            border-radius: 5px;
            background-color: #2a2a3e;
            color: #ffffff;
            transform: translateY(-20px);
        }
        
        .navbar{
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
 
        .hero h2 {
            font-size: 2.5em;
            margin: 0 0 0.5em;
        }

        .hero p {
            font-size: 1.2em;
            margin: 0 0 1em;
        }

        .cta-button {
            background-color: white;
            color: #3a2064;
            padding: 0.75em 1.5em;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .jogos-list {
            padding: 2em;
            background-color: #141726;
            text-align: center;
        }

        .jogos-list h2 {
            margin-bottom: 1em;
            color: white;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background-color: #222;
            color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .placeholder {
            background-color: #555;
            margin-bottom: 10px;
            height: 150px;
            border-radius: 4px;
        }

        .nomejogo {
            margin: 10px 0;
            text-align: center;
        }

        .descriçao {
            text-align: center;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .sair{
            border-color: #f0f0f0; 
            border: 5px;
            color: #333; 
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
            transform:translateX(212px) translateY(-5px);
        }
        button:hover{
            color: #000;
            border: 1px solid #91ff00;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #91ff00;
        }
        footer {
            background-color: #3a2064;
            color: white;
            text-align: center;
            padding: 1em 0;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #3a2064;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
            width: 400px;
            height: 20px;
            position: relative;
        }

        .main-heading {
            padding: 2rem 0 2rem 0;
        }

        .content {
            position: relative;
        }

        .carousel-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 10;
        }

        .carousel-heading {
            font-size: 3rem;
            color: #308d46;
            margin-bottom: 1rem;
        }

        .slideshow {
            height: 550px;
            overflow: hidden;
            position: relative;
        }

        .slideshow-wrapper {
            display: flex;
            width: 400%;
            height: 100%;
            position: relative;
            transition: transform 0.6s ease-in-out;
        }

        .slide {
            width: 100%;
            height: 100%;
        }

        .slide-img {
            width: 90%;
            height: 100%;
            object-fit: fill;
        }

        @keyframes slideshow {
            0%, 100% {
                transform: translateX(0%);
            }
            25% {
                transform: translateX(-100%);
            }
            50% {
                transform: translateX(-200%);
            }
            75% {
                transform: translateX(-300%);
            }
        }
        .slide-btn {
            border: none;
            border-radius: 50%;
            width: 2rem;
            height: 2rem;
            outline: none;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-15%);
            z-index: 70;
            font-size: 1.5rem;
            color: #3a2064;
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s, transform 0.3s;
        }

        .slide-btn-left {
            left: 1%;
        }

        .slide-btn-right {
            right: 1%;
        }

        .slide-btn:hover {
            color: #91ff00;
            transform: scale(1.0);
        }

        .slide-btn-left::before {
            content: '◀';
            transform: translateY(-13%) scale(1.2);
            margin-right: 10px;
            width:15px;
        }

        .slide-btn-right::before {
            content: '▶';
            transform: translateY(-13%) scale(1.2);
            margin-left: 3px;
            width: 15px;
        }
        
         li:hover{
            background-color: #3a2064 ;
            border-bottom: 10px thin white;
            border-bottom-style: solid;
         }

        .header2 {
            display: flex;
            padding: 10px 20px;
            background-color: #2e2e4e;
            border-bottom: 1px solid #444;
            border-top: 4px solid #91ff10;
        }
        .header2 div {
            margin-right: 20px;
            cursor: pointer;            
        }
        .header2 div:hover{
            color:#91ff10
        }
        
        .filters {
            display: flex;
            padding: 10px 20px;
            background-color: #2e2e4e;
            border-bottom: 1px solid #444;
            border-top: 1px solid #91ff10;
            padding: 5px 10px;
            border-radius: 5px;
            
        }
        .filters div {
            margin-right: 20px;
            cursor: pointer;
        }
        .filters div:hover{
            color:#91ff10
            
        }
        .content2 {
            display: flex;
            justify-content: center;
            padding: 20px;
            flex-wrap: wrap;
            
        }
        .game-card {
            background-color: #2e2e4e;
            border-radius: 10px;
            margin: 10px; 
            margin-bottom: 40px; 
            overflow: hidden;
            width: 300px;
            height: auto; 
            display: flex;
            flex-direction: column;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .game-card img {
            width: 100%;
            height: auto;
        }
        .game-card:hover img {
            transform: scale(1.05);
        }
        .game-info {
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .game-info img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .game-info div {
            display: flex;
            flex-direction: column;
        }
        .game-info div span {
            font-size: 14px;
        }
        .game-info div span:first-child {
            font-weight: bold;
        }
        .logo-container {
        margin-bottom: 20px;
    }
    img.indielogo2 {
        height: 200px;
        width: auto; 
        transform: translatey(-100px);
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
    </header>
    <main>
    
        <section class="hero">
            <div class="content">
            <div class='logo-container'>
</div>
                <div class="slideshow">
                    <button class="slide-btn slide-btn-left"></button>
                    <button class="slide-btn slide-btn-right"></button>

                    <div class="slideshow-wrapper">
                        <div class="slide">
                            <img class="slide-img"
                                src="images/hollowknighted.jpg">
                        </div>
                        <div class="slide">
                            <img class="slide-img"
                                src="images/stardewvalleyed.jpg">
                        </div>
                        <div class="slide">
                            <img class="slide-img"
                                src="images/conscripted.jpg">
                        </div>
                        <div class="slide">
                            <img class="slide-img"
                                src="images/darklegendsed.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
           
               
        <section class="jogos-list">
        <h2>Jogos em Destaque</h2>
        <?php
$con = mysqli_connect('localhost', 'root', '', 'indieconnekt');
if (!$con) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$sql = "SELECT * FROM jogos ORDER BY nomejogo ASC";
$exe = mysqli_query($con, $sql);

if (mysqli_num_rows($exe) > 0) {
    echo "<style>
        .content2 {
            display: flex;
            justify-content: center;
            padding: 20px;
            flex-wrap: wrap;
        }

        .game-card {
            background-color: #2e2e4e;
            border-radius: 10px;
            margin: 10px;
            margin-bottom: 40px;
            overflow: hidden;
            width: 300px;
            height: auto;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .game-card img {
            width: 100%;
            height: auto;
        }

        .game-card:hover img {
            transform: scale(1.05);
        }

        .game-info {
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .game-info img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .game-info div {
            display: flex;
            flex-direction: column;
        }

        .game-info div span {
            font-size: 14px;
        }

        .game-info div span:first-child {
            font-weight: bold;
        }

        .logo-container {
            margin-bottom: 20px;
        }
    </style>";

    echo "<div class='content2'>";

    while ($res = mysqli_fetch_array($exe)) {
        $idjogos = htmlspecialchars($res['idjogos']);
        $nomejogo = htmlspecialchars($res['nomeJogo']);
        $fotojogo = htmlspecialchars($res['fotoJogo']);

        echo "
        <div class='game-card'>
            <div class='logo-container'>
                <img src='images/$fotojogo'?>
            </div>
            <div class='game-info'>
                <div>
                    <span>Produto: $nomejogo</span>
                </div>
            </div>
    <a href='addcarrinho.php?idjogos=$idjogos' style='padding: 10px; text-align: center; color: #007bff; text-decoration: none;'>Adicionar à lista de desejo!</a>
        </div>";
    }

    echo "</div>";
}
mysqli_close($con);
?>

</main>
        <section>
        </section>
    <footer>
        <p>&copy; PRO</p>
    </footer>
mai
    <script>
        const slides = document.querySelector('.slideshow-wrapper');
        const leftButton = document.querySelector('.slide-btn-left');
        const rightButton = document.querySelector('.slide-btn-right');
    
        let index = 0;
        const totalSlides = 4;
    
        function updateSlide() {
            const slideWidth = slides.clientWidth / totalSlides;
            slides.style.transform = `translateX(-${index * slideWidth}px)`;
        }
    
        function nextSlide() {
            index = (index < totalSlides - 1) ? index + 1 : 0; 
            updateSlide();
        }
    
       
        let autoSlide = setInterval(nextSlide, 2000); 


        leftButton.addEventListener('click', () => {
            clearInterval(autoSlide); 
            index = (index > 0) ? index - 1 : totalSlides - 1;
            updateSlide();
            autoSlide = setInterval(nextSlide, 2000); 
        });
    
        rightButton.addEventListener('click', () => {
            clearInterval(autoSlide); 
            nextSlide();
            autoSlide = setInterval(nextSlide, 2000); 
        });
    </script>
    
</body>
</html>
