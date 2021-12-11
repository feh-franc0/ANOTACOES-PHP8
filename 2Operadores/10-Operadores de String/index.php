<?php
/**OPERADORES DE STRING:
 * 
 * Existem dois operadores de string. O primeiro é o operador de concatenação ('.'), que retorna a concatenação dos seus argumentos direito e esquerdo.
 * 
 * O segundo é o operador de atribuição de concatenação ('.='), que acrescenta o argumento do lado direito no argumento do lado esquerdo
 * 
 */

 $primeiroNome = "Fernando";
 $ultimoNome = "Franco";

 $nomeCompleto = $primeiroNome . " " . $ultimoNome;

 var_dump($nomeCompleto);

$texto = "Lorem ipsum dolor sit amet";
$texto .= "consectetur adipisicing elit.";
$texto .= "Praesentium in mollitia laboriosam.";

echo $texto."<br/>";

//SINTEXES PARA STRINGS:

//HEREDOX. basta abrir com (<<<IDENTIFICADOR) e fechar com (IDENTIFICADOR;), ACEITA REFERENCIA DE VARIAVEL
$texto2 = <<<HCODE
<pre>
autor: $nomeCompleto;
Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Est ipsa beatae non quo corrupti? 
 Nobis ipsum officiis voluptatem, 
 illo at molestiae delectus blanditiis aliquid perspiciatis,
  praesentium ex quod nulla libero.
  </pre>
HCODE;

echo $texto2."<br/>";

//NOWDOX. basta abrir com (<<<'IDENTIFICADOR') e fechar com (IDENTIFICADOR;), LEVA TUDO COMO STRING, N ACEITA REFERENCIA DE VARIAVEL
$texto3 = <<<'HCODE'
<pre>
autor: $nomeCompleto;
Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Est ipsa beatae non quo corrupti? 
 Nobis ipsum officiis voluptatem, 
 illo at molestiae delectus blanditiis aliquid perspiciatis,
  praesentium ex quod nulla libero.
  </pre>
HCODE;

echo $texto3;