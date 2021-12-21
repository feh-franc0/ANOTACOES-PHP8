<?php

/**CONSTANTES PRÉ-DEFINIDAS DE ERROS
 * O PHP possui 15 constantes pré-definidas para tratar os erros e variantes de erros que ocorrem na aplicação
 * 
 * Cada constantes possui um valor exponencial de 1 a 16384.
 * 
 * As constantes podem ser utilizadas internamente no PHP e no arquivo php.ini
 * 
 * 
 * VALOR    CONSTANTE                       DESCRIÇÃO
 * 1        E_ERROR(integer)                Erros fatais em tempo de execução.Estes indicam erros que não podem ser recuperados,como problemas de alocação de memória.A execução do script é interrompida.
 * 2        E_WARNING(integer)              Avisos em tempo de exxecução(erros não fatais).A execução do script não é interrompida.
 * 4        E_PARSE(integer)                Erro em tempo de compilação.Erros gerados pelo interpretador.
 * 8        E_NOTICE(integer)               Notícia em tempo de execução.Indica que o script encontrou alguma coisa que pode indicar um erro,mas que também possa acontecer durante a execução normal do script
 * 16       E_CORE_ERROR(integer)           Erro fatal que acontece durante a inicialização do PHP.Este é parecido com E_ERROR,exceto que é gerado pelo núcleo do PHP.
 * 32       E_CORE_WARNING(integer)         Avisos (erros não fatais) que aconteçaM deurante a inicialização do PHP.Este é parecido com E_WARNING,exceto que é gerado pelo núcleo do PHP.
 * 64       E_COMPILE_ERROR(integer)        Error fatal em tempo de compilação.Este é parecido com E_ERROR,exceto que é gerado pelo Zend Scripting Engine.
 * 128      E_COMPILE_WARNING(integer)      Aviso em tempo de compilação.Este é parecido com E_WARNING,exceto que é gerado pelo Zend Scripting Engine.
 * 256      E_USER_ERROR(integer)           Erro gerado pelo usuário.Este é parecido com E_ERROR,exceto que é gerado pelo códigoo PHP usando a função trigger_error().
 * 512      E_USER_WARNING(integer)         Aviso gerado pelo usuário.Este é parecido com E_WARNING,exceto que é gerado pelo código PHP usando a função trigger_error().
 * 1024     E_USER_NOTICE(integer)          Noticia gerada pelo usuário.Este é parecido com E_NOTICE,exceto que é gerado pelo código PHP usando a função trigger_error().
 * 2048     E_STRICT(integer)               Notícias em tempo de execução.Permite ao PHP sugerir mudanças ao seu código as quais irão assegurar melhor interoperabilidade e compartibilidade futura ao seu código.
 * 4096     E_RECOVERABLE_ERROR(integer)    Erro fatal capturável.Indica que um erro provavelmente perigoso acontecceu,mas não deixou o Engine em um estado instável.Se o erro não for pego por uma manipulador definido pelo usuário(veja também set_error_handler()),a aplicação é abortada como se um E_ERROR.
 * 8192     E_DEPRECATED(integer)           Avisos em tempo de execução.Habilite-o para receber avisos sobre código que não funcionará em futuras versões   
 * 16384    E_USER_DEPRECATED(integer)      Mensagem de aviso gerado pelo usuário.Este é como um E_DEPRECATED, exceto que é gerado em código PHP usando a função trigger_error().
 * 30719    E_ALL(integer)                  Todos erros e avisos, como suportado, exxceto ed nível E_STRICT no PHP <6
 */

var_dump(E_ALL);    //int (32767)
var_dump(E_STRICT); //int (2048)
var_dump(E_NOTICE); //int (8)
var_dump(E_ERROR);  //int (1)
var_dump(E_WARNING);//int (2)