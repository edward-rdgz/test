<?php

/* mayor o menor */
$a = 100;
$b = 200;
$c = 102;

$mayor = $a;
if ($b > $mayor)
$mayor = $b;
if ($c > $mayor)
$mayor = $c;
print "El numero mayor es: $mayor <br>";

$menor = $a;
if ($b < $menor)
$menor = $b;
if ($c < $menor)
$menor = $c;
print "El numero menor es: $menor <br>";

/* corredor */
$velocidadAtleta = 10.43;
$radio = 500;
$longPista = pi() * ($radio * 2);
$tiempoDescanso = (($longPista - ($longPista % 1000))/1000)*60;
$tiempo = (2 * (($longPista/$velocidadAtleta) + $tiempoDescanso));
print ("El atleta tardara: $tiempo seg. en recorrer 2 vueltas a la pista<br>");

/* automovil */
$kilometros = 100;
$metros = ($kilometros * 1000);
$hora = 1;
$segundos = ($hora * 3600);
$conversion = $metros/$segundos;
print "El automovil tiene una velocidad de $conversion m/s.<br>";

/* computadora */
$computadora=11000;
$cantidad=9;
$contador=0;
while($contador<$cantidad){
$contador++;
if($contador<5){
$descuento=($computadora*$cantidad)-(($computadora*$cantidad)*0.10);
}else if($contador<10){
$descuento=($computadora*$cantidad)-(($computadora*$cantidad)*0.20);
}else if($contador>9){
$descuento=($computadora*$cantidad)-(($computadora*$cantidad)*0.40);
}
}
print "Se vendieron en: $$descuento las maquinas<br>";

/* foreach */
$color = array ("azul"=>64, "cafe"=>220, "negro"=>0);
foreach($color as $valor)
print "valor: $valor <br>";

foreach ($color as $clave=>$valor)
print "clave: $clave valor: $valor <br>\n";

/* for */
print ("<ul>");
for($i=0;$i<5;$i++){
print("<li>Elemento: $i</li>");
}
print ("</ul>");

/* numero invertido */
$numero = 987654321;
$invertido = 0;
$modulo = 0;
print "El numero es: $numero <br>";
while($numero != 0){
	$modulo = $numero%10;
	$invertido = ($invertido * 10) + $modulo;
	$numero = floor($numero/10);
}
$invertido += $numero;
print "El numero invertido es: $invertido";

/* si es entero, par o no par y negativo */
$valor = 10;												
if(ctype_digit($valor)) {			//ctype_digit(nombre_variable) determina si el valor ingresado es un entero.			
	echo "<br>".$valor." es un número entero. </br>";						
} else { 
	echo "<br>".$valor." no es un número entero. </br>";
}

if($valor%2 == 0) { //dividimos el valor obtenido entre 2 para determinar si es par o no.
	echo "<br>".$valor." es un número par. </br>";
} else {
	echo "<br>".$valor." no es un número par. </br>";
}

if($valor < 0) { //indicamos que si el valor es menor a cero es negativo.
	echo "<br>".$valor." es un número negativo. </br>";
} else {
	echo "<br>".$valor." no es un número negativo. </br>";
}

/* numero mayor de un arreglo */
$entrada = array(1,2,3,10,4,5,6,7,48,9); //Los 10 numeros de entrada
$mayor = $entrada[0]; //Ponemos que el mayor es el primer elemento
//Se cambia automaticamente en el bucle
$pos=0; //la posicion en 0
//El bucle (lo importante)
//Iniciamos un bucle del tamaño de la cantidad de elementos del array
for($j=0; $j<count($entrada); $j++) { //Si mayor es menor que el elemento elejido
	if($mayor < $entrada[$j]) {   //cambiamos el mayor y su posicion 
		$mayor = $entrada[$j];
		$pos = $j;
	}
}
echo "<br> El número ".$mayor." es mayor y esta en la posición ".$pos.". </br>";

/* temperatura */
$centigrados = 0;
$fahrenheit = ((9 * $centigrados)/5) + 32;
print "Grados Fahrenheit: $fahrenheit <br>";
$rankine = $centigrados + 460;
$kelvin = $rankine - 187;
print "Grados Kelvin: $kelvin <br>";
print "Grados Rankine: $rankine <br>";

?>