<?php

/**  if, else e elseif :
 * 
 * if(){}
 * O comando if é um dos recursos mais conhecidos de quase todas as linguagens e nos permite executar um treccho de códigos de acordo com alguma condição.
 * A condição que será avaliada nos parenteses do if chamamos de expressões e precisarão retornar um valor true para que o bloco do if seja executado.
 * 
 * else(){}
 * O comando else só vai existir após um comando if e conterá os códigos que serão executados caso a expressão avaliada retorne false.
 * Este comando é opcional em nossos comandos if, mas caso use só poderá existir um.
 * 
 * elseif(){}
 * O comando elseif é uma combinação dos comandos else e if. Isso significa que se a expressão avaliada no if dor falsa poderemos testar uma outra possibilidade de expressão que possa ser verdadeira.
 * Este comando pe opcional em nosso if, mas caso precise usar podemos adicionar quantos elseif desejarmos. Se todos os elseif forem avaliados como false então será executado o comando else se existir
 * 
 */

 $a = 10;
 $b = $a + 1;

 if($a > $b) {
    echo "$a é maior que $b";
 }elseif(!$b % 2 === 0) {
     echo "$b não é par";
 } else {
     echo "$b é maior que $a";
 }

 echo "<br/>";

//OPERADOR TERNARIO
// (condiçao) , se for verdadeira(?) e entao fara algo , se for falso (:) se nao for verdadeiro faça..
echo ($a > $b) ? "a:$a é maior que b:$b" : "b:$b é maior que a:$a";
echo "<br/";