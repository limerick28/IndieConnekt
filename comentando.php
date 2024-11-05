<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página de Comentários</title>
    <style>

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 400px;
        }
        textarea, button {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Comentários</h1>
        <form action="comentar.php" method="post" enctype="multipart/form-data">
            <textarea name="texto" placeholder="Escreva seu comentário..." required></textarea>
            <input type="file" name="fotocomentario" accept="image/" onchange="previewImage(event)" required>
            <img id="imagePreview" src="#" alt="Prévia" style="display: none;">
            <button type="submit">Enviar</button>
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