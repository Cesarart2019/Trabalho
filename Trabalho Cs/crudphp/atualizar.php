<a href="listar.php">Listar</a>
<?php
$numero = $_POST['quel'];
$nome = $_POST['qual'];
$sexo = $_POST['quil'];

$num = $_POST['numeroA'];

include_once('conexao.php');

$sql = "UPDATE alunos SET nome = '$nome', sexo = '$sexo', numero = '$numero' WHERE numero = $num";

$r = mysqli_query($con, $sql);

header('Location: listar.php');

?>