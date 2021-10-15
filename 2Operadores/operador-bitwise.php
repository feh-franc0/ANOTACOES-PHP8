<?php

/**OPERADORES BIT A BIT (BITWISE)
 * Operadores bit-a-bit permitem a avaliação e modificação de bits especificos em um tipo inteiro.
 * 
 *      EXEMPLO         NOME                RESULTADO
 * 
 *      $a & $b         E(AND)              *Os bits que estão ativos tanto em $a quanto em $b são ativados.
 * 
 *      $a | $b         OU(OR inclusivo)    *Os bits que estão ativos em $a ou em $b são ativados.
 * 
 *      $a ^ $b         XOR(OR exclusivo)   *Os bits que estão ativos em $a ou em $b,mas não em ambos,são ativados
 * 
 *       ~ $a           NÃO(NOT)            *Os bits que estão ativos em $a não são ativados, e vice-versa.
 * 
 *      $a << $b        Deslocamento à      *Desloca os bits de $a $b passos para a esquerda(cada passo significa "multiplica por dois")
 *                      esquerda.          
 * 
 *      $a >> $b        Deslocamento à      *Desloca os bits de $a $b passos para a direita(cada passo significa "divide por dois")
 *                      direita
 * 
 * 
 * 
 */



$valorA = 32;
$valorB = 96;

$quantidade = 2;

//$valorA = $valorA << $quantidade;

var_dump($valorA | $valorB);


// 128  64  32  16  8   4   2   1
//  0   0   1   0   0   0   0   0

//0010 0000 = 32

// 128  64  32  16  8   4   2   1
//  0   1   1   0   0   0   0   0

// 128  64  32  16  8   4   2   1
//  0   1   1   0   0   0   0   0

