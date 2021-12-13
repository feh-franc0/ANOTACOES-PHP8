<?php

/**FOREACH
 * O comando foreach fornece uma maneira mais fácil de iterar em arrays, repetindo códigos para cada índice de um array.
 * 
 * É possível obter o valor de cada item do Array ou o nome da chave e o valor de cada item do Array
 * 
 */

 $aereas = ["a" => "Gol",
            "b" => "Latam",
            "Azul"];

foreach ($aereas as $chave => $valor) { //usando $index => $valor . ira mostrar o indice do arrey e o valor que o contem
    var_dump($chave, $valor);
}

foreach ($aereas as $valor) {
    var_dump($valor); //mostrara apenas o valor
}

//TAMBEM PODEMOS USAR O FOREACH PARA LER COLEÇOES, EXEMPLO O $_SERVER

foreach ($_SERVER as $valor) {
    var_dump($valor);
}