<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo "<h1> Tabla del: $_GET[parametro] </h1>";
		echo "<br/>";
		$res=0;
		for ($cont=1; $cont <= 10 ; $cont++) { 
			$res=$cont*$_GET['parametro'];
			echo "$_GET[parametro] X $cont = $res <br/>";
		}
	 ?>
	 <br><br>
	 <a href="tablas.php"> VOLVER </a>
</body>
</html>