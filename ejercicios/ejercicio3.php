<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<table width="300" border="1">
		<tr>
			<?php
				for ($numero=1; $numero <= 10 ; $numero++) { 
					echo "<td>";
					echo $numero ;
					echo "</td>";
				}

				
			?>
		</tr>
	</table>
		<br><br>
	<table width="300" border="1">
		<tr> <!-- TAMBIEN SE PUEDE CONCATENAR -->
			<?php
				for ($numero=1; $numero <= 10; $numero++) { 
					echo "<td>".$numero."</td>";
				}

			?>	

		</tr>
	</table>
		<br><br>
	<table border="1">
		<tr>
			<?php
			for ($numero=1; $numero <= 10; $numero++) { 
					echo "<tr><td>".$numero."</tr></td>";
				}
			?>	
		</tr>
	</table>
		<br><br>
	<table border="1">
		<?php
			for ($filas=1; $filas <= 4; $filas++) { 
				echo "<tr>";
					for ($numero=1; $numero <=4 ; $numero++) { 
						echo "<td>".$numero."</td>";
					}
				echo "</tr>";
			}
		?>
	</table>
		<br><br>
	<table border="1">
		<?php
			$numero=1;
			for ($filas=1; $filas <= 4; $filas++) { 
				echo "<tr>";
					for ($repeticiones=1; $repeticiones <=4 ; $repeticiones++) { 
						echo "<td>".$numero."</td>";
					}
				echo "</tr>";
				$numero++;
			}
		?>
	</table>
		<br><br>
	<table border="1">
		<?php
			$cont=1;
			for ($filas=1; $filas <= 4; $filas++) { 
				echo "<tr>";
					for ($columna=1; $columna <=4 ; $columna++) { 
						echo "<td>".$cont."</td>";
						$cont++;
					}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>