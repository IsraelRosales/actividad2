<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Programacion Web</title>
</head>
<body>

	<?php 
		if (isset($_POST['calcular']) && $_POST['calcular'] = 'Calcular') {
				$medida = $_POST['medida'];
				$octogono = 8;
				$Nfijodeapotema = 1.207;
				
				$perimetro = 0;
				$apotema = 0;
				$area = 0;

				if (!empty($medida)) {
					echo "<h1 align='center'>CÁLCULO DEL ÁREA DE UN OCTÓGONO</h1>";

					$perimetro = ($medida * $octogono);

					$apotema = ($medida * $Nfijodeapotema);

					$area = ($perimetro * $apotema) / 2;

					echo "<div align='center'><br>";
					echo "<h2>Cálculos:<br></h2>";
					echo "El perímetro =  ".$medida." x ".$octogono."<br>";
					echo "El apotema =  ".$medida." x ".$Nfijodeapotema."<br>";
					echo "El área =  (".$perimetro." x ".$apotema.") / 2 <br><br>";
					echo "</div>";

					echo "<div align='center'><br>";
					echo "<h2>Resultados<br></h2>";
					echo "El perímetro del octógono es : ".$perimetro.".<br>";
					echo "El apotema del octógono es: ".$apotema. ".<br>";
					echo "El área del octógono es: ".$area.".<br><br>";
					echo "<a href='index.html'><button>Regresar</button><a/>";
					echo "</div>";
					echo "<p align='right'><i>By Israel Rosales</i></p>";
					
				}
				else{
					echo "<div align='center'><br>";
					echo "<h1>¡Algo estuvo mal!, Vuelva a intentar.</h1>";
					echo "<a href='index.html'><button>Regresar</button><a/>";
					echo "</div>";
				}
		}
	 ?>
</body>
</html>