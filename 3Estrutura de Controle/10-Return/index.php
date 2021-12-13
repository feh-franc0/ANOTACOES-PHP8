<?php

/**RETURN
 * O comando return como o nome diz, retorna o controle do programa para quem o chamou.
 * 
 * Ao retornar todo o código seguinte não será executado, uma vez que a execução do escopo atual é finalizada imediatamente.
 * 
 * Se o return for usado no escopo global a execução também será finalizada
 * 
 */

$a = 10;

echo $a;
echo "<br/>";

function somar($valor): int { // o retorno da função não pode ser do tipo void, pq void é apenas usado para sub-rotina e return é para funções em si.
    global $a;
    $resultado = $valor * $a;
    echo "você multiplicou $valor X $a = $resultado";
    return $resultado;
    echo "OK";//não irá ser executado,o return para toda a execução quando é chamado,ignorando tudo o que foi feito após ele
}
somar(25);
echo "<br/>";

echo "FINALIZADO!";