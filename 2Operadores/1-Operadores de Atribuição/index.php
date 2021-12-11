<?php
//operador de atribuição "="
$amount = 200.00;
$valueA = $amount;

//$amount /= 2; // $amount=$amount/2 -> $amount=100
$discount = 10;
//tmb podemos usar os operadores atribuição com alguns operadores aritmeticos,como o +,-,*,/ e etc..Que alem de atribuir ira fazer a operação
$formula = $discount / 100;

$valueA *= $formula; //10% do $valueA que é = 20
echo $valueA;
echo "</br>";
$amount -= $valueA;
// = , += , -= , *= , /= , .=
echo $amount; // = 180

/*Operadores de Atribuição por referência, já vimos isso em aulas passadas.
$a = 3;
$b = &$a; // $b é uma referência de $a, se mudar o valor de $a o $b muda automaticamente
*/