<?php

/**FUNÇÕES INTERNAS:
 * Como toda linguagem de programação PHP 8 vem com muitas funções internas, que facilitam a programação.
 * 
 * Além das funções internas, temos funções que necessitam que uma extensão específica esteja compilada, se não erros fatais "undefined function"(função não definida) irão aparecer. Por exemplo para usar PDO com MySQL, PHP deve ser compilado com suporte ao PDO e MySQL.
 * 
 * EXXEMPLO:
 * 
 * <?php
 * if (function_exists('strlen')){
 *      echo "A função existe.<br/>\n";
 * } else {
 *      echo "A função não existe.<br/>\n";
 * }
 * 
 */

 function somar(){

 }

 var_dump(function_exists("somar"));

 echo strlen("Fernando Franco");
?>
<a href="https://www.php.net/manual/pt_BR/book.strings.php">PHP funções de STRING</a>
<!--esse link mostra todas as categorias das funções de string, imagina agora todas as funções oferecidas pelo php, ia ficar uma explicação GIGANTESCA,então o melhor a se fazer é caso tenha alguma dúvida ou queira saber mais ir na docummentção do próprio PHP 8:
 php.net/manual/pt_BR/book.strings.php
-->

<!--REFERENCIA DAS FUNÇÕES-->
<a href="https://www.php.net/manual/pt_BR/funcref.php">Referência das Funções</a>