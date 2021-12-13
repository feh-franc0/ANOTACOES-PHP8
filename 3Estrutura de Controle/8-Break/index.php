<?php

/**Break
 * O comando break finaliza a execução dos comandos:
 * - for
 * - foreach
 * - while
 * - do-while
 * - switch
 * 
 * Ele ainda aceita um argumento numérico opcional que informa quantas estruturas aninhadas deverá interromper. Por padrão ele só irá interromper uma estrutura.
 * porém voce pode por o número de blocos aninhados que deseja que saia, se passarmos break 2 ele irá sair de dois e continuar com o terceiro 
 */

 $leitura = 20;
 $eof = 250;
 while ($leitura <= $eof) {
     
    if($leitura == 80) {
        echo "Saindo do laço <br/>";
        break;
    }
$leitura += 20;
echo $leitura."<br/>";
 }

 echo "Fora do comando while <br/><br/>";

 for ($x = 1; $x <= 10; $x++) { 
    for ($y = 1; $y <= 10; $y++) {
        if ($x * $y > 25) {
            break 2;// vai parar o for interno e o for externo, acabando com a calculadora quando um numero for <= 25
        }
        echo "$x x $y = " . ($x * $y) . "<br/>";
    }
 }