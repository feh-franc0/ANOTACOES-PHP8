<?php

/**While
 * Este comando é um dos possíveis laços condicionais disponíveis no PHP.
 * 
 * Semelhante a várias outras linguagens de programação o comando while repetirá um trecho de códigos enquanto uma expressão for avaliada como verdadeira
 * 
 */

 $x = 0;

while ((int)date("s") % 2 === 0) {//seg atual do Coomputador, testando se ele é par ou impar
    $x++; //para saber quantas vezes ele vai executar o while ate o resultado ser impar
}

var_dump($x);