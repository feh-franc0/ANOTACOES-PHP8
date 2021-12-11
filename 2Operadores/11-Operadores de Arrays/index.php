<?php
/**OPERADORES DE ARRAYS
 * Alguns operadores de comparação podem ser ultilizados em conjunto com arrays,
 * neste caso irão produzir uma combinação desde união de arrays até comparação de índices e valores do array
 * 
 * EXEMPLO:         NOME:               RESULTADO:
 * $a + $b          União               União de $a e $b.
 * $a == $b         Igualdade           True se $a e $b tem os mesmos pares de chave/valor.
 * $a === $b        Identidade          True se $a e $b tem os mesmos pares de chave/valor na mesma ordem e do mesmo tipo.
 * $a != $b         Desigualdade        True se $a não é igual a $b.
 * $a <> $b         Desigualdade        True se $a não é igual a $b
 * $a !== $b        Não identidade      True se $a não é identico a $b.
 *                  
 */

 $a = ["Gol", "Latam", "Azul"];
 $b = [
    "Delta",
    "British Airlines",
    "American Airlines",
    "Qatar Airways",
    "Emirates"    
];

$c = $a + $b; // os primeiros 3([0,1,2]) index de $a ira sobrepor os de $b, e o index 3 e 4 de $b irá se manter:
/* IRÁ RETORNAR EM $C :
                array(5){
                  [0]=>
                  string(3) "Gol"
                  [1]=>
                  string(5) "Latam"
                  [2]=>
                  string(4) "Azul"
                  [3]=>
                  string(13) "Qatar Airways"
                  [4]]=>
                  string(8) "Emirates"
                 }
 */

var_dump($c);

$d = [200, 50, 35];
$e = [
    2 => 35,
    0 => 200,
    1 => "50"
];

var_dump($d == $e); //True
var_dump($d === $e);//False

