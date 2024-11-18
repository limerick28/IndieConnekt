<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página de Comentários</title>
    <style>
        
        h1 {
            color: white;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .container {
            background-color: #2e2e4e;
            border-radius: 10px;
            padding: 20px;
            width: 400px;
            color: #2e2e4e;
        }
        button {
            width: 100%;
            margin-bottom: 10px;
            background-color: transparent;
            border: 1px solid #91ff10;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #91ff10;
            color: #000000;
        }

        textarea {
            position: fixed;
            width: 100%;
            max-width: 300px;
            padding: 10px;
            border-radius: 5px;
            background-color: #2a2a3e;
            color: #ffffff;
            transform: translateY(-20px);
        }

        /* Esconder o botão real de arquivo */
        input[type="file"] {
            display: none;
        }

        /* Estilo personalizado para o botão de arquivo */
        .custom-file-upload {
            width: 380px; 
            background-color: transparent;
            border: 1px solid #91ff10;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            display: inline-block;
        }
        
        .custom-file-upload:hover {
            background-color: #91ff10;
            color: #000000;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <h1>Comentários</h1>
        <form action="comentar.php" method="post" enctype="multipart/form-data">
            <textarea name="texto" placeholder="Escreva seu comentário..." required></textarea><br><br><br>

            <!-- Botão estilizado para escolher arquivo com largura reduzida -->
            <label class="custom-file-upload">
                <input type="file" name="fotocomentario" accept="image/*" onchange="previewImage(event)" required>
                Escolher arquivo
            </label>
            <br>
            <img id="imagePreview" src="#" alt="Prévia" style="display: none;"><br>
            <button class="profile-edit" type="submit">Enviar</button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.style.display = 'block';
        }
    </script>
</body>
</html>
