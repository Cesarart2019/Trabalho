<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lista</title>
		<style type="text/css">
			
			 h1{}
			 a{
			 	
			 	text-align: center; color: black; font-weight: 50px; animation: none
			 }
		</style>
	</head>
	<body >
	<a href="INDEX.HTML">cadastre-se já!</a>
		<?php
			include_once('Conexao.php');
			$num = @$_GET['quel'];
			$nom = @$_GET['qual'];
			$sex = @$_GET['quil'];

			$sql = "INSERT INTO alunos VALUES ($num, '$nom', '$sex')";
			$r = mysqli_query($con, $sql);
		?>
		<table border="2px" align="center" bgcolor="orange" width="800px" height="10px">
			<tr>
				<td>Número</td>
				<td>Nome</td>
				<td>Sexo</td>
				<td>Excluir</td>
				<td>Atualizar</td>


			</tr>

			<?php
				$sql = "SELECT * FROM alunos";
				$r = mysqli_query($con, $sql);
				if ($r) {
					while ($result = mysqli_fetch_array($r)) {
			?>
						<tr align="center">
							<td><?php echo $result['numero']; ?></td>
							<td><?php echo $result['nome']; ?></td>
							<td><?php echo $result['sexo']; ?></td>
           					<td><a href="excluir.php?numero=<?php echo $result['numero']; ?> "> <img src="delete.gif"></a></td>
            				<td><a href="editar.php?numero=<?php echo $result['numero']; ?> &nome=<?php echo $result['nome']; ?>&sexo=<?php echo $result['sexo'];?>"> <img src="edit.gif"></a></td>
						</tr>
			<?php
					}
				}
			?>
		</table>
		
	</body>
</html>