<?php

$a = 10;

echo $a;
echo "<br/>";

function somar($valor): int { 
    global $a;
    $resultado = $valor * $a;
    echo "você multiplicou $valor X $a = $resultado";
    return $resultado;
    echo "OK";
}
somar(25);
echo "<br/>";

echo "FINALIZADO!";