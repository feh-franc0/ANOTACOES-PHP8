/**
 * *O que são referências?
 * *No PHP referência se trata de acessar o mesmo conteúdo de uma variável por meio de nomes diferentes.É como se atribuíssem apelidos as variáveis,porém ambas estão armazenando o mesmo valor.
 * *Há três tipos de uso de referências:
 * *-Atribuição por referência
 * *-Passagem de parâmetro por referência
 * *-Retorno por referência
*/

<?php

$a = 50;

$b = &$a;
$c = $a;

var_dump("a", $a);
var_dump("b", $b);
var_dump("c", $c);

$a = 250;

var_dump("a", $a);
var_dump("b", $b);
var_dump("c", $c);
