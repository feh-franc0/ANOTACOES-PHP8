<?php

/**CONTINUE
 * O comando continue é usado para pular o resto de código do resttante da iteração atual e continuar na próxima iterção.
 * 
 * Este comando também aceita um argumento numérico opcional que diz quantos níveis de aninhados deverão continuar.
 * 
 */

 for (
    $contador = 0;
    $contador <= 250;
    $contador++
 ) {
     if($contador >= 118 && $contador <= 125){
         continue; // vai ignorar a contagem de 118 até 125, não irá nem aparecer os números de 118 à 125. Tmb pode ser usado números dps igualmente o braak,caso esteja em aninhamento com outros continues
     }
     echo $contador." ";
 }