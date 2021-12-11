<?php
/**
 * OPERADORES DE COMPARAÇÃO
 * $a == $b     igual
 * $a === $b    identico
 * $a != $b     diferente
 * $a <> $b     diferente
 * $a !== $b    nao identico
 * 
 * $a < $b      menor que
 * $a > $b      maior que
 * $a <= $b     menor ou igual
 * $a >= $b     maior ou igual
 * 
 * $a <=> $b    spaceship(nave espacial){
 *      Um integer menor que,igual a ou maior que zero quando $a é,
 *      respectivamente, menor que,igual a ou maior que $b. 
 *      se $a = $b,retorna 0
 *      se $a > $b,retorna 1
 *      se $a < $b,retorna -1
 * }
 * 
 * ****************************************************************
 * OPERADOR Nullsafe ?
 * 
 * sem o operador Nullsafe:
 * $country = null;
 * if ($session !== null){
 *      $user = $session->user;
 *      
 *      if ($user !== null){
 *          $addres = $user->getAddress();
 * 
 *          if ($address !== null){
 *              $country = $addres->country;
 *          }
 *      }
 * }
 * 
 * com o operador Nullsafe,usando o ?:
 * $country = $session?->user?->getAddress()?->country;
 * 
 * ******************************************************************
 * 
 * OPERADOR Null Coalesce ??
 * ->se o primeiro valor for NULO ele ignora e assume o segundo valor:
 * $nome = $_POST['nome']?? "Não autorizado!";
 *
 */

$valueA = 10;
$valueB = 11;

var_dump($valueA <=> $valueB);

$valueC = NULL;

var_dump($valueC ?? "Não há valor");