<?php

/**TRY, THROW, CATCH
 * O PHP possui um modelo de exceções similar ao de outras linguagens de programação. Uma exceção pode ser lançada (throw) e capturada (catch). Código pode ser envolvido por um bloco try para facilitar a captura de exceções potenciais. Cada bloco try precisa ter ao menos um bloco catch ou finally correspondente.
 * O objeto lançado precisa ser uma instância da classe Exception ou uma subclasse de Exception. Tentar lançar um objeto sem essa ascendência resultará em um erro fatal.
 * 
 * FINALLY
 * Disponível desde a versão PHP 5.5, um bloco finally pode ser especificado após ou no lugar de blocos catch. Código dentro de finally sempre serão executados depois do try ou catch, independente se houve o lançamento de uma exceção, e antes que a execução normal continue.
 * 
 */

function manipuladorDeExcecao($exception)
{

    echo $exception->getMessage()."<br/>";
    echo $exception->getFile()."<br/>";
    echo $exception->getLine()."<br/>";
    echo $exception->getCode()."<br/>";
}

set_exception_handler("manipuladorDeExcecao");

class SenhaException extends Exception {}

$nome = "";
$senha = "123";

try {

    if (!$nome) {

        throw new Exception("Preencha o seu nome.", 400);

    }

    if (strlen($senha) < 6) {

        throw new SenhaException("Senha é fraca.", 400);

    }

} catch(SenhaException $e) {

    echo "Problema na sua senha: " . $e->getMessage() . "<br/>";

} catch(Exception $e) {

    echo $e->getMessage() . "<br/>";

} finally {

    //var_dump("Final");

}
/*
$exibeErro = fn($erro) => throw new Exception($erro);

echo $exibeErro("Deu Erro! Throw Expression!");

echo "Depois da exceção";
*/