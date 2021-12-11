<?php

/**
 * *O que são referências?
 * *No PHP referência se trata de acessar o mesmo conteúdo de uma variável por meio de nomes diferentes.É como se atribuíssem apelidos as variáveis,porém ambas estão armazenando o mesmo valor.
 * 
 * *Há três tipos de uso de referências:
 * 
 * *-Atribuição por referência
 * 
 * ->Esses dois ultimos tem mais a ver com funções que é passar parametros para as funcoes e esperar o retorno dessas funcoes isso veremos depois...
 * *-Passagem de parâmetro por referência
 * 
 * *-Retorno por referência
 * *******************************************************************
 * 
 * *VEJAMOS: ATRIBUIÇÃO POR REFERÊNCIA;
*/


$a = 50;

$b = &$a; //o $b vai receber a mesma referencia de $a, basta ter o "&" na frente de quem sera a nossa referencia no caso "&$a"
$c = $a; //vamos atribuir a variavel $a sem o caracter da referencia,entao n estamos passando a referencia e sim atribuindo o valor de $a, estamos copiando o valor de $a e atribuindo ao vaor de $c

var_dump("a", $a); //50
var_dump("b", $b); //50
var_dump("c", $c); //50

$a = 250; //mudamos o $a para 250, e ainda temos o $b recebendo a referencia de $a

var_dump("a", $a); //250
var_dump("b", $b); //250
var_dump("c", $c); //50 , o $c copiou o valor de $a, entao ele continua com 50,pq ele apenas copiou o valor antes pertencente a $a
