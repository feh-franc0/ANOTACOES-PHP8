<?php

/**FUNÇÕES RECURSIVAS:
 * É possível chamar funções recursivas no PHP. Assim a função é chamada dentro da própria função,neste caso, controlada por um comando de decisão para evitar recursão infinita.
 * 
 * NOTA: Chamadas recursivas a função/métodos acima de 100-200 níveis podem exaurir a pilha e causar o término do script.
 * Especificamente, recursão infinita é considerada um erro de programação.
 * 
 */
function recursivo($a){
    if($a < 100){
        echo $a." ";
        recursivo(++$a);
    }
}

recursivo(0);