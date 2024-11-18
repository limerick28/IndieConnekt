<?php
session_start();

if (isset($_GET['idjogos'])) {
    $id = $_GET['idjogos'];
    $idusuarios = $_SESSION['idusuarios'];


    $con = mysqli_connect('localhost', 'root', '', 'indieconnekt');
    

    $sql = "INSERT INTO listadesejo (id_idjogos, id_idusuarios) VALUES ('$id', '$idusuarios')";
    $exe = mysqli_query($con, $sql);
    
    if ($exe) {
        echo "Produto inserido no carrinho";
        header("Location: carrinho.php");  
    } else {
        echo "Erro ao inserir no carrinho: " . mysqli_error($con);
    }
    
    mysqli_close($con); 
} else {
    echo "ID do jogo não fornecido!";
}
?>