<?php
/**OPERADORES DE INCREMENTO/DECREMENTO
 * 
 * O PHP suporta operadores de pré e pós-incremento e decremento no estilo da Linguagem C
 * 
 * Muito útil para controlar laços de repetição, executando incremento e decremento.
 * 
 * EXEMPLO:         NOME:                   EFEITO:
 *   ++$a           Pré-incremento          Incrementa $a em um,e então retorna $a.
 *   $a++           Pós-incremento          Retorna $a,e então incrementa $a em um.
 *   --$a           Pré-decremento          Decrementa $a em um,e então retorna $a.
 *   $a--           Pós-decremento          Retorna $a, e então decrementa $a em um.
 * 
 */

$a = 10;
$b = 10;
$c = 10;
$d = 10;

echo $a++ * 2; // = 20 
echo "</br>";
echo ++$b * 2; // = 22
echo "</br>";
echo $c-- * 2; // = 20
echo "</br>";
echo --$d * 2; // = 18
echo "</br>";