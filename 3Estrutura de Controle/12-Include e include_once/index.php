<?php

/**INCLUDE E INCLUDE_ONCE
 * Os arquivos são incluídos baseando-se no caminho do arquivo informado ou, se não informado, o include_path especificado.Se o arquivo não for encontrado no include_path, a declaração include irá verificar no diretório do script que o executa e no diretório de trabalho corrente, antes de falhar. O construtor include emitirá um aviso de não localizar o arquivo; possui um comportamento diferente do construtor require, que emitirá um erro fatal.
 * 
 * Se um caminho for definido -- seja absoluto (iniciando com a letra do drive ou \ no Windows, ou / no Unix/Linux), ou relativo ao diretório atual(começando com . ou ..) -- o include_path será completamente ignorado. Por exemplo, se o nome do arquivo iniciar com ../ , o interpretador irá procurar pelo arquivo no diretório pai.
 * 
 */

 include_once "include.php"; // a diferenca do include é que se no nosso arquivo tiver um warning ele continuará funcionando normalmente, so irá parar se tiver um fatal-error

 //include_once "include.php"; //chama apenas uma unica vez o arquivo
 //include "include.php";; //chama varias vezes o mesmo arquivo

 echo "Comandos finalizados!";