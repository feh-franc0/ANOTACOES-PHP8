<?php

/**REQUIRE E REQUIRE_ONCE
 * A declaração require faz a inclusão de outro arquivo e executa. Porém caso ocorra algum erro no arquivo incluído a execução do arquivo principal será parada.
 * 
 * A declaração require_once é idêntica à require exceto que o PHP verificará se o arquivo já foi incluído,e em caso afirmativo, não o incluirá (exigirá) novamente
 * 
*/

echo "A";

require_once "return.php"; //importante usar caso você queira importar apenas uma vez esse certo arquivo, quando seu sistema estiver muito grande voce pode acabar chamadno o mesmo arquivo,arquivo esse que dá erro caso chamado mais de uma vez, e acabar causando um erro,entao pra isso nao acontecer use o require_once

//require "return.php";//use quando o arquivo que voce chamar for um arquivo que suporte ser chamado varias vezes e que n irá interferir diferetamente emm nenhum outro codigo

//caso queira pegar o arquivo em um diretorio acima,use ../ caso estiver ainda mais em cima basta usar ../até chegar no nivel do arquivo

echo "B";