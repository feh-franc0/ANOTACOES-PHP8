<?php

/** FUNÇÕES GERADORAS:
 * Os generators fornecem uma maneira fácil de implementar simples iterators sem a sobrecarga ou complexidade de criar uma classe que implemente a interface Iterator.
 * 
 * Dessa forma é possível principalmente criar grandes rotinas com menos uso de memória.
 * 
 * A principal diferença dessa função é que você poderá fazer vários retornos com o comando yield e não apenas um como com o comando return.
 * 
 */

 function fila(){
    yield "Fernando";
    yield "João Felipe";
    yield "Tatiana";
    yield "Eduarda";
    yield "Lara";
 }

 $fila = fila();

 
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 
 $fila = fila();//Retorna do zero a contagem

 
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 var_dump($fila->current()); // current = atual
 var_dump($fila->next()); //Próximo da fila
 echo "<br/>";
 