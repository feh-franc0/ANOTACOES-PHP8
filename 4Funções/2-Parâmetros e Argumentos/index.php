<?php

/**Parâmetros e Argumentos:
 * Informações podem ser passadas para funções através da lista de argumentos, que é uma lista de expressões delimitados por vírgulas. Os argumentos são avaliados da esquerda para a direita
 * 
 * O PHP suporta a passagem de argumentos por valor (o padrão), passagem por referência, e valores padrões de argumentos. lista de argumentos de tamanho variável também são suportadas.
 * 
 * EXEMPLO:
 * 
 * <?php
 * function cafe ($tipo = "Machaccino"){
 *      return "Fazendo uma xíraca de café $tipo.\n";
 * }
 * echo cafe();
 * echo cafe(null);
 * echo cafe("Expresso");
 * 
 */

 /*
 //PASSAGEM DE PARAETRO POR VALOR:
 function somar($numeroA, $numeroB){
     echo $numeroA + $numeroB . "<br/>";
 }
 somar(5, 5);
 somar(10, 5);
 */

/*
 //PASSAGEM DE PARAMETRO POR REFERÊNCIA
 $a = 50;
 
 function somar(&$numeroA, $numeroB){
     $numeroA += $numeroB; // = $numeroA = $numeroB + $numeroA;
     echo $numeroA .  "<br/>";
 }

 somar($a, 5); //$a = 55;
 somar($a, 10);//$a = 60;

 echo "Agora fora da Função: $a";
 */

 /*
 //VALOR PADRÃO
 $a = 50;
 
 function somar(&$numeroA, $numeroB = 10){//sempre por o valor padrão da direita para a esquerda
     $numeroA += $numeroB;
     echo $numeroA .  "<br/>";
 }

 somar($a, 5);
 somar($a); 
 somar(//pasagem de parâmetro por nome...
     numeroB: 30,
     numeroA: $a
 );

 echo "Agora fora da Função: $a";
 */


 //Tipos de Dados para os nossos parâmetros
 $a = 50;
 
 //se quiser pode por tmb &$numeroA ficando = int &$numeroA
 function somar(&$numeroA, int $numeroB = 10){
     var_dump($numeroB);
     $numeroA += $numeroB;
     echo $numeroA .  "<br/>";
 }

 somar($a, 5.5);
 somar($a, "5");
 somar($a); 
 somar(
     numeroB: 30,
     numeroA: $a
 );