<?php
/**SWITCH
 * O comando switch é similar a varios comandos if que avaliam se uma variável ou expressão tem igualdade com diferentes valores. Caso seja igual poderemos executar um trecho de comandos.
 */

 $nome = "Fernando";

 switch ($nome){
    case "Fernando": //se usarmos cases seguidos ele tera a função de or , caso nome = Fernando ou nome = Fernando Franco, faça...
    case "Fernando Franco":
        echo "Olá Fernando";
    break; //quebra do case
    case "João";
        echo "Olá João";
    break;
    default: // esse é o padrão, caso nenhuma opção seja apropriada será mostrado o que estiver no default.
        echo "Olá.Ops,não sei seu nome";
 }