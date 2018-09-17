<?php

/* En este programa tendrás que utilizar un array asociativo para guardar como key 
 * cada día de la semana y asociar a cada día un valor entero. Se trandrá que 
 * mostrar  en pantalla cada día y valor almacenado en el array así como la suma
 *  y media de todos los valores guadados en el array. */

$semanas = array("lunes" => 12, "martes" => 3, "miercoles" => 23, "jueves" => 6, "viernes" => 9, "sabado" => 78, "domingo" => 4);
foreach($semanas as $posicion=>$numero)
	{
	echo "El " . $posicion . " es " . $numero;
	echo "<br>";
	}
        
$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum temporadas = " . array_sum($semanas) . "\n<br>";

echo "media de numeros= " .array_sum($semanas)/count($semanas);
