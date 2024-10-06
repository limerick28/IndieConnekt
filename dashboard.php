<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Connekt</title>
    <link rel="stylesheet" href="pagina.css">
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
                <a class="cadastro" href="LOGIN.php">
                Cadastrar-se
                </a>
                <a class="cadastro" href="listadesejo.php">
              
                    lista de desejo
                    </a>
                    <a class="cadastro" href="perfil.php">
                       Seu perfil
                        </a>
            </div>
            </div>
                </div>
                    </div>
            
                
                            </nav>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="content">
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
            <div class="card-container">
                <div class="card">
                    <div class="placeholder"></div>
                    <h2>Jogo 1</h2>
                    <p>Descrição do jogo 1.</p>
                    <button><a href="comunidade.html">Ver mais</a></button>
                </div>

                <div class="card">
                    <div class="placeholder"></div>
                    <h2 class="nomejogo">The Dark Legend</h2>
                    <p class="descriçao">Descrição do jogo 2.</p>
                    <button>Ver mais</button>
                </div>

                <div class="card">
                    <div class="placeholder"></div>
                    <h2>Jogo 3</h2>
                    <p>Descrição do jogo 3.</p>
                    <button>Ver mais</button>
                </div>

                <div class="card">
                    <div class="placeholder"></div>
                    <h2>Jogo 4</h2>
                    <p>Descrição do jogo 4.</p>
                    <button>Ver mais</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; PRO</p>
    </footer>

    <script>
        const slides = document.querySelector('.slideshow-wrapper');
        const leftButton = document.querySelector('.slide-btn-left');
        const rightButton = document.querySelector('.slide-btn-right');

        let index = 0;

        function updateSlide() {
            const slideWidth = slides.clientWidth / 4; // considerando que há 4 slides
            slides.style.transform = `translateX(-${index * slideWidth}px)`;
        }

        leftButton.addEventListener('click', () => {
            index = (index > 0) ? index - 1 : 3;
            updateSlide();
        });

        rightButton.addEventListener('click', () => {
            index = (index < 3) ? index + 1 : 0;
            updateSlide();
        });
    </script>
</body>
</html>
