<?php
/** OPERADORES DE EXECUÇÃO:
 * O PHP suporta um operador de execução: O acento grave (``). Note que não são aspas simples! O PHP tentará executar o conteúdo dentro dos acentos graves como um comando do shell;
 * 
 * EX:
 * 
 * <?php
 * 
 * $output = `ls -al`;
 * echo "<pre>$output</pre>";
 * 
 * //O USO DO LS É APENAS NO LINUX, NO WINDOWS IRA TER Q USAR O DIR
 */

$resultado = `dir`;

//Para conseguir por os acentos e letragem adequada use o sapi_windows_cp_get("oem");
$oem = sapi_windows_cp_get("oem"); // pode ser usado o "oem" e o "ascii"

//para fazer a conversao use o sapi_windows_cp_conv
$resultado = sapi_windows_cp_conv($oem, //codigo atual
                                 65001, //O codigo para qual a gente quer mudar 
                                 $resultado); //A var que queremos converter 


echo "<pre>$resultado</pre>";