<?php
/**
 * OPERADORES LÓGICOS
 * Quando duas condições em uma expressão precisam ser avaliadas em conjunto,podemos utilizar os operadores lógicos
 * dependendo da condição da expressão e do tipo de operadores,será possível execturar uma instrução.
 * 
 * Exemplo:         Nome:       Resultado:
 * $a and $b        E           Verdadeiro(true) se tanto $a quanto $b são verdadeiros.
 * $a or $b         OU          Verdadeiro se $a ou $b são verdadeiros.
 * $a xor $b        XOR         Verdadeiro se $a ou $b são verddadeiros,mas não ambos(para retornar TRUE tem q ter uma falsa e outra verdadeira)
 * !$a              NÃO         Verdadeiro se $a não é verdadeiro.
 * $a && $b         E           Verdadeiro se tanto $a quanto $b são verddadeiros.
 * $a || $b         OU          Verdadeiro se $a ou $b são verdadeiros.
 */


$a = 10;
$b = 20;
$c = 30;

var_dump(!($a > $b && $a > $c));
var_dump($a < $b || $a > $c);
var_dump(!($a < $b));
var_dump(!true);