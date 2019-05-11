

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Cadastro de Aluno</title>  
    		<style type="text/css">
label a{
			text-align: center;
			text-decoration: none;
			color: orange;
		}
		label {
			text-align: center;
			text-decoration: none;
			color: brown;

		}
		div{

			position: absolute;
			width: 350px;
			height: 450px;
			border: 1px solid black;
			box-shadow: 2px 2px 12px  black ;
			top: 30%;
			left: 42.5%;
			background-color: rgba(0,0,0,.5);

		}
		form{
			margin-left: 30px;

		}
		input[type = "submit"]{
			margin-top: 300px;
			margin-left: 100px;
			width: 80px;
			padding: 20px;
			height: 50px;

		}
		form{
			border-left: 10px;
		}
		h1{text-align: center; color: #fff; font-weight: 500; margin-bottom: 20px;text-transform: uppercase;align-items: center;}

		</style> 
</head>
<body>
<?php 
    

$numero = $_GET['numero'];
$nome = $_GET['nome'];
$sexo = $_GET['sexo'];
    
    
?>	<div>
<h1>Editar</h1>
    <form action="atualizar.php" method="POST">
        Número:<input type="text" name="quel" size="18" value="<?php  echo $numero;?>"><br>
        	<input type="text" name="numeroA" hidden="true" value="<?php echo $numero; ?>">
        Nome:<input type="text" name="qual" id="nome"  value="<?php echo $nome;?>"><br>
        sexo: <input type="radio" name="quil" value="M" <?php echo ($sexo == 'M') ? "checked" : null; ?>>M <input type="radio" name="quil" value="F" <?php echo ($sexo == 'F') ? "checked" : null; ?>>F<br>
        <input type="submit" value="Editar">
    </form>
    </div>
</body>
</html>