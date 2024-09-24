<?php
include("sessao.php");
$con = mysqli_connect('localhost', 'root', '', 'indieconnekt');
$sql = "SELECT * from posts order by nomePost asc";
$exe = mysqli_query($con, $sql);
?>
    <form action="inserir.php" method="post" enctype="multipart/form-data" >
		Escolher arquivo: <input name="arquivo" type="file"><br>
        Nome do produto <input type="text" name="nomePost"><br>
        Quantidade <input type="text" name="comentario"><br>
        Valor <input type="text" name="foto"><br>
		<?php
		while($res = mysqli_fetch_array($exe)){
			$id = $res['id'];
			$nome = $res['nome'];
			echo "<option value='$id'>$nome</option>";
		}
		?>
		</select><br>
        <input type="submit">
    </form>

