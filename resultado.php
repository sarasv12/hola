<?php
session_start();
$nombre=$_SESSION['nombre'];
$grado=$_SESSION['grado'];
$materia=$_SESSION['materia'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$s=$n1+$n2+$n3;
$p=$s/3;
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="esti.css">
<body>
	<center>
		<div class="div3">
			<h1>Estudiante <?php echo $nombre?> del grado <?php echo $grado?></h1>
			<h3>Este es su promedio para la materia <?php echo $materia?>:</h3>
			<h1><?php echo $p?></h1>
			<h3>
			<?php
			if($p<3)
			{
				echo "Lamentablemente perdió la materia";
			}
			else
			{
				echo "Felicidades, ganó la materia";
			}
			?>
			</h3>
		</div>
	</center>
</body>
</html>