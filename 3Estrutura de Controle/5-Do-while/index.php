<?php

/**DO-WHILE
 * Este comando é bem similar ao comando while, entretando a diferença é que o código que está condicionado será executado pelo menos uma vez mesmo que a expressão seja avaliada como falsa e continuará sendo repetido enquanto a expressão for verdadeira.
 */

 $x = 0;

 do{
     $x++; // faça! , se a condição desejada for atendida continue fazendo,se nao pare
 }while ((int)date("s") % 2 === 0);

 var_dump($x);