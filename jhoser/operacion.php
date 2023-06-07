<?php
$nombre = readline("primer nombre \n");
$apellido = readline("primer apellido \n");
echo"Biemvenido $nombre $apellido";

$numero1 = readline("Ingrese el numero que desea sumar\n");
$numero2 = readline("Ingrese el numero que desea sumar\n");
$suma = $numero1 + $numero2;
echo"La suma entre $numero1 + $numero2 es igual a: $suma";

$numero1 = readline("Ingrese el numero que desea sumar, restar y multiplicar \n");
$numero2 = readline("Ingrese el numero que desea sumar, restar y multiplicar \n");
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicar = $numero1 * $numero2;
echo"La suma de $nuemro1 + $numero2 es igual a:$suma, La resta entre el $numero1 - $numero2 es igual a:$resta, la multiplicacion entre el $numero1 * $numero2 es igual a:$multiplicar";


$nombre = readline("ingrese su nombre \n");
$sueldo = readline("Ingrese su sueldo sin puntos \n");
$aumento = ($sueldo * 0.15) + $sueldo;
echo"Estimado señor $nombre se le informa que su sueldo de $sueldo se le aplico un aumento del 15% es con gratitud informarle que su sueldo actual es de $aumento";
?>
