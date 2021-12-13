<?php

/**Match
 * O comando match é similar ao switch, porém além de ser mais reduzido ele faz a comparação por identidade do valor (===) ao invés de igualdade (==).
 * 
 * Este comando retorna o resultado da escolha que foi feita, porém é opcional fazer uso dele.
 * 
 * Outra particularidade é que este comando precisa terminar com um ponto e vírgula(;)
 * 
 */

 $msg = "200";

$retorno = match($msg) {
    200 => "o valor é o numero 200", // no caso o 200 é diferente de "200" pq ele tmb leva em questao a identidade(tipo de dado)
    "300" => "O valor é uma string 300",
    "400" => "o valor é string 400",
    default => "Algo não foi atendido" //use o default para ser um sinalizador de erro
};

var_dump($retorno);