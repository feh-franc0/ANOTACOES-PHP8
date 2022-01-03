<?php

/**DISPLAY_ERRORS
 * A propriedade display_errors determina se os erros devem ser impressos na tela como parte da saída ou se devem ser ocultados do usuários
 * 
 * Nota:
 * Este é um recusro para dar suporte ao desenvolvimento e nunca deve ser usado em sistemas de produção.
 * 
 * Nota:
 * Embora display_errors possa ser configurado em tempo de execução(com ini_set()), ele não terá nenhum efeito se o script tiver erros fatais.isso ocorre porque a ação em tempo de execução desejada não é executada.
 * 
 */

 ini_set("display_errors",0);//usando o "0" não ira mostrar o warning nem erro, se por o 1 ira mostrar o erro e os warnings
 include("hcode.php");//com o require ira gerar um fatal erro e nao ira deixar pular o erro com o ini_set("display_errors",0). pq o require obriga que o arquivo esteja funcionando bem.

 echo "Depois do require";

 //Como ver o erro sem mostrar para o cliente(sem habilitar no php em produção), no Apache vamos em: C:>Apache24>logs>error.log (no error.log estará os erros que estao acontecendo)