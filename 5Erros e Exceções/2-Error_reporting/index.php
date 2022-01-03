<?php

/**ERROR_REPORTING
 * Podemos definir o tipo de exibição de erro em nível de código com a função error_reporting, que aceitará um bitmask ou  uma constante.
 * 
 * Usar constantes é fortemente encorajado para assegurar compatibilidade com versões futuras
 * 
 */

 //error_reporting(E_ERROR);//queremos exibir os erros,não ira aparecer o warning.
 //error_reporting(E_WARNING);//Ira aparecer apenas o warning, ocultando todos os tipos de erros e mostrando só os alertas.
 //error_reporting(E_WARNING | E_ERROR);//queremos ver todos os warnings ou todos os erros.Ira mostrar as duas formas,já que teremos os dois tipos true.

 //O error_reporting() é para determinar que tipos de erros ou variantes de erros devem ser exibidas.
 //O mais comum a ser usada no error_reporting() é o E_ALL | E_NOTICE | E_WARNING para mostrar para você em tempo de desenvolvimento e o E_STRICT para boas praticas
 error_reporting(E_ALL & E_NOTICE & E_WARNING & E_STRICT);

 require("hcode.php");