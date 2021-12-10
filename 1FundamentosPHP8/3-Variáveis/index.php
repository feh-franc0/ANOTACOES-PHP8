<?php
/**
 *    Para criar var,use no inicio o cifrão($)
 *    var sao case-sensitive e devem ser iniciadas com:
 *        Letras ou sublinhado e depois seguido por qualquer letra,numero ou sublinhado
 *    única exceção é a var $this que tem um tratamento especial e por isso nao pode ser atribuida
*/

$primeiroNome = "Fernando";
$ultimoNome = "Franco";

$nomeCompleto = $primeiroNome . " " . $ultimoNome;

echo $primeiroNome;
echo "<br/>";
echo $ultimoNome;
echo "<br/>";
echo $nomeCompleto;

/**
 * temos o var_dump(); 
 * o var_dump() mostra o tipo de dado,peso e o valor
 */
var_dump($primeiroNome);