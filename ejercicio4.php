<?php

/*
  Crear un array asociativo con los 12 meses del año,  los días correspondientes a
 *  cada mes  se inicializaran a 0.
  A continuación crear dos arrays numéricos, en uno se guardaran los nombres de los
 *  meses largos (enero, marzo....), en el otro los nombres de los meses cortos 
 * (abril, junio,...). 
  Ahora ir metiendo los días de cada mes al array asociativo, dependiendo si su
 * índice se encuentra entre los valores del array de los meses cortos o largos.
  Aparte calcular los días días que tiene febrero el año actual, para ello utilizad
 *  la función “cal_days_in_month”. (mirad documentación oficial php).
  Luego mostrar en pantalla cada mes con su número de días.
 */

$meses = array(
    "enero" => 0,
    "febrero" => 0,
    "marzo" => 0,
    "abril" => 0,
    "mayo" => 0,
    "junio" => 0,
    "julio" => 0,
    "agosto" => 0,
    "septiembre" => 0,
    "octubre" => 0,
    "noviembre" => 0,
    "diciembre" => 0
);
$contador = 1;
foreach ($meses as $key => $valor) {

    $valor = cal_days_in_month(CAL_GREGORIAN, $contador, date("Y"));
    $contador++;
    echo "$key"." "."$valor"."<br/>";
}


/*?>
<html>
    <head>
        <title>arrays2</title>
    </head>
    <body>

        <?php
        $mes ["enero"] = "0";
        $mes ["febrero"] = "0";
        $mes ["marzo"] = "0";
        $mes ["abril"] = "0";
        $mes ["mayo"] = "0";
        $mes ["junio"] = "0";
        $mes ["julio"] = "0";
        $mes ["agosto"] = "0";
        $mes ["septiembre"] = "0";
        $mes ["octubre"] = "0";
        $mes ["noviembre"] = "0";
        $mes ["diciembre"] = "0";
            
            echo "<table><tr><td>Mes</td><td>Dias</td></td>";
            foreach ($mes as $nombre => $dia){
                echo "<tr><td>" . $nombre. "</td><td>". $dia ."</td></tr>";
            }    
            
            echo "</table>";
            
            $arrMesesLargos = array("enero","marzo","mayo","julio","agosto","octubre","diciembre");
        $arrMesesCortos = array("febrero","abril","junio","septiembre","noviembre");
        
        foreach ($arrMesesLargos as $valor){
            $mes[$valor]=31;
        }
        foreach ($arrMesesCortos as $valor){
            $mes[$valor]=30;
        }
        echo "<table border='1'><tr><td>Mes</td><td>Dias</td></td>";
            foreach ($mes as $nombre => $dia){
                echo "<tr><td>" . $nombre. "</td><td>". $dia ."</td></tr>";
            }    
            
            echo "</table>";
        
        ?>


    </body>

</html>*/
