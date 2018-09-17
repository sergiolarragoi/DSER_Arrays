<?php

/* Crea un programa que guarde las cuatro estaciones en un array numérico
 * y las muestre en pantalla. */

$estaciones = array('Primavera', 'Verano', 'Otoño', 'Invierno');
for ($i = 0; $i < sizeof($estaciones); $i++) {
    echo $estaciones[$i] . '<br/>';
}


