<?php

/**RETORNANDO VALORES
 * Valores podem ser retornados utilizando a instrução opcional return.
 * Qualquer tipo pode ser retornado, incluindo arrays e objetos. Isto faz com que a função termine sua execução imediatamente e passa o controle de volta para a linha de onde ela foi chamada.
 * 
 * EXEMPLO:
 * 
 * <?php
 * function quadrado ($num){
 *      return $num * $num;
 * }
 * echo quadrado (4); //imprime '16'
 */

function somar(float $valor1, float $valor2):int {
    return $valor1 + $valor2;
}
$resultado = somar(11.5, 20);

var_dump(somar($resultado, 50));