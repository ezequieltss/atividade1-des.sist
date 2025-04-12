<?php
$numero = 8;      // Número fixo da tabuada
$contador = 1;    // Começa em 1

while ($contador <= 10) {
    $resultado = $numero * $contador;
    echo "$numero x $contador = $resultado<br>";
    $contador++;
}
?>