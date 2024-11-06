<link rel="stylesheet" href="dashboard.css">
<?php
include("sessao.php");

$conexao = mysqli_connect('localhost','root','','indieconnekt');
$sql = "SELECT * FROM jogos";
$executar = mysqli_query($conexao, $sql);

while($res = mysqli_fetch_array($executar)){
    $id = htmlspecialchars($res['idjogos']);
    $nomejogo = htmlspecialchars($res['nomeJogo']);
    $fotojogo = htmlspecialchars($res['fotoJogo']);

    echo "<div class='card'>
            <div class='game-info'>
                <img src='images/$fotojogo' alt='$nomejogo'>
                <div>
                    <span>$nomejogo</span>
                    <a href='addcarrinho.php?idjogos=$id'>adicionar</a>
                </div>
            </div>
          </div>";
}
echo "</table>";
$fechar = mysqli_close($conexao);

?>