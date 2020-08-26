<?php
session_start();
$nombre=$_POST['nombre'];
$grado=$_POST['grado'];
$materia=$_POST['materia'];
$_SESSION['nombre']=$nombre;
$_SESSION['grado']=$grado;
$_SESSION['materia']=$materia;
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="esti.css">
<body>
	<center>
		<div class="div2">
			<h1><?php echo $nombre?></h1>
			<h2>Ingrese sus notas de la materia <?php echo $materia?></h2>
			<form action="resultado.php" method="POST">
				<label>Nota 1:</label>
				<input type="text" name="n1" placeholder="Ingrese una nota">
				<br><br>
				<label>Nota 2:</label>
				<input type="text" name="n2" placeholder="Ingrese una nota">
				<br><br>
				<label>Nota 3:</label>
				<input type="text" name="n3" placeholder="Ingrese una nota">
				<br><br>
				<input type="submit" name="enviar" value="Enviar">
			</form>
		</div>
	</center>
</body>
</html>