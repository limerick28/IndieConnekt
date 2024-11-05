<?php
$con = mysqli_connect('localhost', 'root', '', 'indieconnekt');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM posts ORDER BY nomePost ASC";
$exe = mysqli_query($con, $sql);

echo "<table style='width: 100%; border-collapse: collapse;'>
<tr>
    <th style='border: 1px solid #ddd; padding: 8px;'>Postagem</th>
    <th style='border: 1px solid #ddd; padding: 8px;'>Descrição</th>
    <th style='border: 1px solid #ddd; padding: 8px;'>Foto</th>
</tr>";

while ($res = mysqli_fetch_array($exe)) {
    $idPost = $res['idPost'];
    $nomePost = htmlspecialchars($res['nomePost']);
    $comentario = htmlspecialchars($res['comentario']);
    $foto = htmlspecialchars($res['foto']); // Certifique-se de que este campo contém o caminho correto

    echo "<tr>
        <td style='border: 1px solid #ddd; padding: 8px;'>$nomePost</td>
        <td style='border: 1px solid #ddd; padding: 8px;'>$comentario</td>
        <td style='border: 1px solid #ddd; padding: 8px;'><img src='$foto' alt='Foto' style='max-width: 100px; height: auto;'></td>
    </tr>";
}

echo "</table>";

mysqli_close($con);
?>
