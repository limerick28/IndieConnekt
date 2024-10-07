<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-up Redirecionamento</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0; 
            top: 0; 
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgba(0, 0, 0, 0.5); 
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; 
            padding: 20px; 
            border: 1px solid #888; 
            width: 300px; 
            text-align: center;
        }
        .button {
            margin: 10px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<button id="myBtn">Abrir Pop-up</button>

<div id="myModal" class="modal">
    <div class="modal-content">
        <h2>Escolha uma opção</h2>
        <button class="button" onclick="redirect('https://www.exemplo1.com')">Página 1</button>
        <button class="button" onclick="redirect('https://www.exemplo2.com')">Página 2</button>
        <button class="button" onclick="closeModal()">Fechar</button>
    </div>
</div>

<script>
    // Função para abrir o modal
    document.getElementById('myBtn').onclick = function() {
        document.getElementById('myModal').style.display = 'block';
    }

    // Função para fechar o modal
    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }

    // Função para redirecionar
    function redirect(url) {
        window.location.href = url;
    }

    // Fechar o modal ao clicar fora dele
    window.onclick = function(event) {
        if (event.target == document.getElementById('myModal')) {
            closeModal();
        }
    }
</script>

</body>
</html>
