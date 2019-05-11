<?php
	include_once('Conexao.php');
	$nu  = $_GET['numero'];
	$sql = "delete from alunos where numero = $nu";
	mysqli_query($con, $sql);
	header('Location: listar.php');

?>