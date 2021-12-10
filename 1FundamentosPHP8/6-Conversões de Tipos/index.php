/**
 * *Se trata da alteração do tipo de dado do valor de uma variável.Isso pode acontecer automaticamente de acordo com o contexto de uso de uma variável ou explicitamente.
 * *um exemplo de conversão automática é o uso do operador de multiplicação com qualquer um dos operandos sendo um float. Todos os valores serão avalisados como sendo float.
 * *
 * *Conversão Explícita:
 * *Para fazer uma conversão exxplícitanós devemos escrever o nome do tipo entre parênteses na frente de uma variável.
 * *Também é possível usar a função internna settype().
*/

<?php

$valor = "3";

$valor *= 2;
$valor *= 2.3;
$novoValor = (string) $valor;
var_dump(get_debug_type($novoValor));

var_dump($novoValor);

settype($novoValor, "integer");

var_dump($novoValor);

var_dump(get_debug_type($novoValor));