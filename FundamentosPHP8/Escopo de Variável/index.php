<?php 
/**
 * *O que é Escopo de Variável?
 * *O escopo de uma variável é o contexto onde ela foi definida.
 * *Podemos citar como exemplo a mudança de um escopo
 * *quando criamos uma função e o conteúdo da sub-rotina
 * *executada pela função passará a ser um subcontexto ou
 * *um novo escopo.
 * *
 * *Escopo Global:
 * *No exemplo abaixo mostramos uma variável chamada $hcode criada no escopo global do arquivo PHP.
 * *<?php
 * *$hcode = "https://hcode.com.br";
 * *
 * *Escopo Local:
 * *No exemplo abaixo mostramos uma variável chamada $hcode criado no escopo local.
 * *<?php
 * *function exemplo(){
 * *    $hcode = "https://hcode.com.br";
 * *
 * *Arquivos Incluídos:
 * *O escopo da variável inclui os arquivos incluídos ou requeridos
 * *<?php
 * *$hcode = "https://hcode.com.br";
 * *include "arquivo.php";
 * *
 * *Comando global:
 * *É possível promover uma variável local para o escopo global
 * *por meio da palavra-chave global do PHP
 * *<?php
 * *function exxemplo(){
 * *    global $hcode;
 * *    $hcode = "https://hcode.com.br";
 * *}
 * *
 * *
 * *}
*/

$hcode = "https://hcode.com.br";

function exibir(){
    global $hcode; //se n tiver o global $hcode nao ira conseguir achar o local da variavel, pq esta em outro escopo
    echo $hcode;
}

exibir();