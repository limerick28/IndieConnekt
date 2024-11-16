<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <!-- Formulário de Login -->
            <form id="loginForm" action="verificar.php" method="POST">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="loginEmail">Email</label>
                    <input type="email" id="loginEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Senha</label>
                    <input type="password" id="loginPassword" name="senha" required>
                </div>
                <button type="submit">Entrar</button>
                <p>Não tem conta? <a href="#" id="switchToRegister">Cadastre-se</a></p>
            </form>

            <!-- Formulário de Cadastro -->
            <form id="registerForm" action="cadastro.php" method="POST" style="display: none;">
                <h2>Cadastro</h2>
                <div class="form-group">
                    <label for="registerUsername">Username</label>
                    <input type="text" id="registerUsername" name="username" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email</label>
                    <input type="email" id="registerEmail" name="email" required>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Senha</label>
                    <input type="password" id="registerPassword" name="senha" required>
                </div>
                <div class="form-group">
                </div>
                <button type="submit">Cadastrar</button>
                <p>Já tem conta? <a href="#" id="switchToLogin">Login</a></p>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<script>// Selecionar os elementos do DOM
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');
const switchToRegister = document.getElementById('switchToRegister');
const switchToLogin = document.getElementById('switchToLogin');

// Alternar para o formulário de Cadastro
switchToRegister.addEventListener('click', (e) => {
    e.preventDefault(); // Evitar o comportamento padrão do link
    loginForm.style.display = 'none'; // Esconde o formulário de login
    registerForm.style.display = 'block'; // Mostra o formulário de cadastro
});

// Alternar para o formulário de Login
switchToLogin.addEventListener('click', (e) => {
    e.preventDefault(); // Evitar o comportamento padrão do link
    registerForm.style.display = 'none'; // Esconde o formulário de cadastro
    loginForm.style.display = 'block'; // Mostra o formulário de login
});
</script>