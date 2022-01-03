<?php

/**MANIPULANDO EXCEÇÕES COM SET_EXCEPTION_HANDLER
 * set_exception_handler - Define uma função definida pelo usuário para tratamento de exceções.
 * De forma semelhante aos erros, "exceções" tratam um comportamento inesperado, porém diferentemente de um erro, as exceções sempre serão produzidas pelo programador para tratar alguma violação da regra de negócio, enquanto um erro pode ser gerado pelo PHP e não estar diretamente ligado a regra de negócio.
 * 
 * ERRO : É inesperado e irá ser gerado pelo PHP ou se o programador estiver desparrando ele com o trigger_erro por exemplo(normalmente quando voce esta programando estruturas,contruindo frameworks ou programando em mais baixo nivel )
 * 
 * EXCEÇÃO : É VIOLAÇÃO DE REGRA DE NEGÓCIO
 */

 function manipuladorDeExcecao($exception)
 {
    //var_dump($exception);

    echo $exception->getMessage()."<br/>";
    echo $exception->getFile()."<br/>";
    echo $exception->getLine()."<br/>";
    echo $exception->getCode()."<br/>";
 }

 set_exception_handler("manipuladorDeExcecao");

 throw new Exception("Essa é minha exceção!", 400);

 echo "Depois da exceção";//Essa mensagem ñ será mostrado, pq vem depois do estouro da exceção que n foi tratada
 