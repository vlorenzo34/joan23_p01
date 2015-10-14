<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		for ($cont=1; $cont <= 10 ; $cont++) { 
			echo "<a href='ejercicio4_2.php?parametro=$cont'>Opc: $cont</a><br/>"; 
		}

	 ?>
</body>
</html>