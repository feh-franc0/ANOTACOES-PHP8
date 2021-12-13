<?php

/**SINTAXE ALTERNATIVA PARA ESTRUTURAS DE CONTROLE
 * O PHP oferece uma sintaxe alternativa para algumas estruturas de controle; entre eles if,while,for,foreach e switch.
 * 
 * Em cada caso, basicamente a sintaxe alternativa é trocar a chave de abertura por dois pontos(:) e a chave de fechamento por endif;, endwhile;, endfor;, endforeach; ou endswitch;
 * 
 */

 $a = 100;

 if ($a > 50) :
?>

    <span style="color: red;">A</span> é maior do que <strong>50</strong>
    
<?php
 endif;
?>