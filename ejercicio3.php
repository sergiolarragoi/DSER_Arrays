<?php

/* Reprogramar el ejercicio anterior de modo que recibiendo por URL un día 
 * concreto, se muestre en pantalla el día seleccionado y el valor entero 
 * asociado al mismo. */

$resultadoURL = filter_input(INPUT_GET, 'dia');

$semanas = array("lunes" => 12, "martes" => 3, "miercoles" => 23, "jueves" => 6, "viernes" => 9, "sabado" => 78, "domingo" => 4);

if (isset($resultadoURL)) {
    echo $semanas[$resultadoURL];
} else {
    echo 'Introduce dia semana.';
}

