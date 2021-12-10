<?php
/**
 * *Uma constante é um identificador por nome para umm valor único que nunca será alterado durante a execuçãp do código PHP
 * *constantes por convençao sao sempre escritas com letras maiúsulas
 * *para declarar uma nova constante devemos usar a função interna define()
 */
/**os parametros para uma constante sao o nome e o valor da constante */
define("CURSO", "PHP 8 da Hcode");

//esse CURSO se refere ao "PHP 8 da Hcode", sendo esse uma constante
echo CURSO;

echo "<br/>";

define("ESTUDE", "Nunca deixe de estudar, constancia e foco sempre irão ser a melhor forma de chegar ao seu objetivo!");

echo ESTUDE;