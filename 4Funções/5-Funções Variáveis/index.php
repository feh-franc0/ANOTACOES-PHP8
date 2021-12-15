<?php

/**FUNÇÕES VARIÁVEIS:
 * O PHP suporta o conceito de funções variáveis.
 * 
 * Isto significa que se um nome de variável tem parênteses no final dela, o PHP procurará uma função com o mesmo nome, qualquer que seja a avaliação da variável, e tentará executá-la.
 * 
 * EXEMPLO:
 * <?php
 * function exibe(){
 *      echo "Exibindo na Tela <br/>";
 * }
 * 
 * $e = 'exibe';
 * $e(); //Chama a função exibe()
 * 
 */

 function somar($a, $b){
     return $a + $b;
 }

 $nome = "somar";

 echo $nome(1, 2); // = 3

 echo $nome; // somar
