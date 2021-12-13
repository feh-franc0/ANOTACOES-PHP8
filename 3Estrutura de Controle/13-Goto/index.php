<?php

/**GOTO
 * O operador goto pode ser usado para pular para outra seção do programa.
 * 
 * O ponto de destino é definido por um rótulo seguindo de dois pontos, e a instrução é usada como goto seguida do rótulo de destino desejado. O uso do goto não é completamente irrestrito.
 */

 var_dump("Inicio");

 goto destino;

 conteudo:

 var_dump("conteúdo");

 return; //usado para parar a execução do código

destino:

var_dump("Término");

goto conteudo;