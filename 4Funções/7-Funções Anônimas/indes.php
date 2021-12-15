<?php

/** FUNÇÕES ANÔNIMAS
 * Funções anônimas, também conhecidas como closures, permitem a criação de funções que não tem o nome especificado. Elas são mais úteis como o valor de parâmetros callback, mas podem tem vários outros usos.
 * 
 * EXEMPLO:
 * 
 * <?php
 * $curso = function($nome){
 *      printf("Curso: ", $nome);
 * };
 * 
 * $curso('PHP 8');
 * $curso('Laravel');
 * 
 */

/*
 //FUNÇÃO ANÔNIMA PARA ATRIBUIÇÃO:
 $empresa = function($site, $tel){
     return "https://$site<br/>Tel: $tel";
 }
 echo $empresa("hcode.com.br", "112149-7360");
*/

//PASSANDO FUNÇÃO ANÔNIMA COMO PARAMETRO DE OUTRA FUNÇÃO
 $empresa = function($site, $tel){
     return "https://$site<br/>Tel: $tel";
 };

 
 function somar($a, $b, $callback){
     $callback($a + $b);
 }
    
 $fn = function($resultado) use ($empresa){//Na função anônima podemos usar o use() para pegar a variavel de fora e conseguirmos usar-la dentro da nossa função anônima. APENAS PODE SER USADO O use() NA FUNÇÃO ANONIMA, para pegar uma variavel do escopo global em uma função normal vai ter que dar o 'global $var' dentro da função que voce quer permitir o acesso a essa determinada $var
     echo $empresa("hcode.com.br", "112149-7360");
     var_dump($resultado);
 };

 somar(2, 3, $fn);
 somar(5, 5, $fn);

 //EXISTE UMA BIBLIOTECA DE BAIXO NIVEL PARA PHP CHAMADA REACT PHP QUE É UMA BIBLIOTECA PARA VOCE TRABALHAR DIRIGIDO A EVENTOS, NESSE CASO VOCE VAI VER EXATAMENTE O USO DOS CALLBACKS .