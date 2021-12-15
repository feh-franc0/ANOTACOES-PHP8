<?php

/**ARROW FUNCTIONS:
 * Disponíveis a partir da versão PHP 7.4 como uma sintaxe mais concisa para funções anônimas.
 * 
 * Funções anônimas e arrow functions são implementadas usando a classe Closure.
 * 
 * Arrow funcctions tem a forma básica fn(argument_list) => expr.
 * 
 * <?php
 * 
 * $y = 1;
 * $fn1 = fn($x) => $x + $y;
 * 
 * //equivalente
 * $fn2 = function ($x) use ($y){
 *      return $x + $y;
 * };
 * var_export($fn1(3));
 * 
 * //equivalente 2
 * $z = 1;
 * $fn = fn($x) => fn($y) => $x * $y + $z;
 * 
 * var_dump($fn(5)(10));
 * 
 * 
 */

 $valor = 10;
 
/*
 $somar = function($a, $b) use($valor){
     return $a + $b * $valor;
 };
*/

//AGORA EM FORMA DE ARROW FUNCTION:
 $somar = fn($a, $b) => $a + $b * $valor;

 echo $somar(10,25);

