<?php

/**SET_ERROR_HANDLER
 * Define uma função do usuário para manipular erros para manipular erros no script.
 * Esta função pode ser usada para definir a sua própria maneira de manipular erros em tempo de execução,por exemplo,em aplicações nas quais você precisa fazer uma limpeza de dados/arquivos quando um erro crítico acontece, ou quando você precisa que haja um erro sob certa circunstância(usando trigger_error()).
 * 
 */
function manipuladorDeErro(
    $errno,
    $errstr,
    $errfile,
    $errline
)
{

    var_dump("Número", $errno);
    var_dump("Mensagem", $errstr);
    var_dump("Arquivo", $errfile);
    var_dump("Linha", $errline);

};

SET_ERROR_HANDLER("manipuladorDeErro");

//trigger_error("Acontecceu um problema.");