<?php
include('sessao.php');
$idusuarios = $_SESSION['idusuarios'];
$con = mysqli_connect('localhost','root', '', 'indieconnekt');

$sql = "SELECT * from listadesejo, jogos where listaDesejo.id_idusuarios = $idusuarios and listaDesejo.id_idjogos=jogos.idjogos";
$exe = mysqli_query($con, $sql);

// CSS em PHP
echo '<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #141726;
        margin: 0;
        padding: 20px;
    }
    .container {
        max-width: 800px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .game-item {
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
    }
    .game-item img {
        max-width: 100px;
        margin-right: 10px;
        vertical-align: middle;
    }
    .remove-link {
        color: red;
        text-decoration: none;
	}
    .remove-link:hover {
        text-decoration: underline;
    }
    .add-more {
        margin-top: 20px;
        display: block;
        color: blue;
        text-decoration: none;
    }
    .add-more:hover {
        text-decoration: underline;
    }
</style>';

echo '<div class="container">';

while($res = mysqli_fetch_array($exe)){
    $idlista = $res['idlista'];
    $nome = $res['nomeJogo'];
    $foto = $res['fotoJogo'];
    echo "<div class='game-item'>Produto: $nome <img src='images/$foto'><a class='remove-link' href='delcarrinho.php?id=$idlista'> Remover</a></div>";
}

echo "<div>&nbsp;</div><a class='add-more' href='mostrarjogos.php'>adicione mais jogos!</a>";
echo '</div>';

$fecha = mysqli_close($con);
?>