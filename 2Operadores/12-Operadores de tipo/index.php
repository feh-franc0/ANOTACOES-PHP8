<?php
/**OPERADORES DE TIPO:
 * instanceof é usado para determinar se uma variável PHP é um objeto instanciado de uma certa classe:
 * 
 * EXEMPLO:
 * 
 * <?php
 * class MinhaClasse
 * {
 * }
 * 
 * class OutraClasse
 * {
 * }
 * $a = new MinhaClasse;
 * 
 * var_dump($a instanceof MinhaClasse);
 * var_dump($a instanceof OutraClasse);
 */

 class Carro {

 }

 class Moto {

 }

 $fusca = new Carro();

 var_dump($fusca instanceof Carro);//True
 var_dump($fusca instanceof Carro);//False