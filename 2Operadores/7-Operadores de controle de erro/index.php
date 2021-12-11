<?php

/**OPERADORES DE CONTROLE DE ERRO
 * o PHP suporta um operador de controle de erro: o sinal 'arroba' (@).
 * Quando ele precede uma expressao em PHP,qualquer mensagem de erro que possa ser gerada por aquela expressão será ignorada.
 * 
 * ISSO PODE SER MUITO UTIL,MAS TMB MUITO PERIGOSO. PODDE SER QUE VC USE E NAO VEJA O ERRO Q ESTA OCORRENDO,PODENDO CAUSAR DIVERSOS PROBLEMAS FUTUROS.
 * 
 * OLHE ESSE ERRO POR EX:
 * 
 * <?php 
 * // Erro de arquivo intencional
 * $myfile = @file('arquivo_nao_existente') or 
 *      die ("Falha abrindo arquivo: '$php_errormsg'");S
 * 
 */

//$resultado = file("shuashusahusahu");//assim ira mostrar o erro
$resultado = @file("sdasadsd");// com o uso do @ nao ira mostrar nenhuma mnsg de erro

//podemos usar o 'or die()' para mostrar uma mnsg de erro pre-definida,ex:
$resultado = @file("sdasadsd") or die("Não foi possível encontrar o arquivo ");