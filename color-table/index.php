<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla dinamica</title>
</head>

<body>
<table border="1" align="center">
<?php
$filas=10;
$columnas=15;
$texto=1;
$bandera=true;

for($f=0; $f<$filas; $f++){
	echo "<tr align='center'>";
	for($c=0; $c<$columnas; $c++){
		if($bandera){
			echo "<td style=padding:10px; bgcolor=#C39012>".$texto."</td>";
			$bandera=false;
			$texto++;
		}
		else
		{
			echo "<td style=padding:10px;>".$texto."</td>";
			$bandera=true;
			$texto++;
		}
	}
	echo "</tr>";
}
?>
</table>
</body>
</html>